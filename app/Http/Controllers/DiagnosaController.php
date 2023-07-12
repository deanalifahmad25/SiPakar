<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();

        return view('user.diagnosa', compact('gejala'));
    }

    public function diagnosa(Request $request)
    {
        $inputGejala = $request->input('gejala');

        $penyakitBFS = $this->getPenyakitByGejalaBFS($inputGejala);
        $penyakitBestFS = $this->getPenyakitByGejalaBestFS($inputGejala);

        return view('user.hasil-diagnosa', compact('penyakitBFS', 'penyakitBestFS'));
    }

    private function getPenyakitByGejalaBFS($gejala)
    {
        $penyakit = [];
        $antrian = collect(['K001', 'K002']); // Antrian untuk penyakit

        while (!$antrian->isEmpty()) {
            $keputusan = $antrian->shift(); // Ambil penyakit pertama dari antrian
            $basisAturan = Aturan::where('keputusan', $keputusan)->get();

            foreach ($basisAturan as $aturan) {
                $kriteriaGejala = explode('AND', $aturan->kriteria_gejala);
                $intersect = array_intersect($gejala, $kriteriaGejala);

                // Jika semua kriteria gejala cocok dengan input gejala
                if (count($intersect) == count($kriteriaGejala)) {
                    $penyakit[] = Penyakit::where('nama_penyakit', $aturan->penyakit)->first();
                }

                // Jika penyakit belum ada dalam antrian, tambahkan ke antrian
                if (!in_array($aturan->penyakit, $antrian->toArray())) {
                    $antrian->push($aturan->penyakit);
                }
            }
        }

        return $penyakit;
    }

    private function getPenyakitByGejalaBestFS($gejala)
    {
        $penyakit = [];
        $antrian = collect(['K001', 'K002']); // Antrian untuk penyakit
        $nilaiHeuristik = []; // Array untuk menyimpan nilai heuristik penyakit

        while (!$antrian->isEmpty()) {
            // Mengurutkan antrian berdasarkan nilai heuristik
            $antrian = $antrian->sortByDesc(function ($kode) use ($nilaiHeuristik) {
                return $nilaiHeuristik[$kode] ?? 0;
            });

            $keputusan = $antrian->shift(); // Ambil penyakit pertama dari antrian
            $basisAturan = Aturan::where('keputusan', $keputusan)->get();

            foreach ($basisAturan as $aturan) {
                $kriteriaGejala = explode('AND', $aturan->kriteria_gejala);
                $intersect = array_intersect($gejala, $kriteriaGejala);

                // Jika semua kriteria gejala cocok dengan input gejala
                if (count($intersect) == count($kriteriaGejala)) {
                    $penyakit[] = Penyakit::where('nama_penyakit', $aturan->penyakit)->first();
                }

                // Jika penyakit belum ada dalam antrian, tambahkan ke antrian
                if (!in_array($aturan->penyakit, $antrian->toArray())) {
                    $antrian->push($aturan->penyakit);

                    // Perhitungan nilai heuristik
                    $nilaiHeuristik[$aturan->penyakit] = $this->hitungNilaiHeuristik($gejala, $kriteriaGejala);
                }
            }
        }

        return $penyakit;
    }

    private function hitungNilaiHeuristik($gejala, $kriteriaGejala)
    {
        // Menghitung jumlah gejala yang cocok dengan input gejala
        $jumlahCocok = count(array_intersect($gejala, $kriteriaGejala));

        // Mengembalikan jumlah gejala yang cocok sebagai nilai heuristik
        return $jumlahCocok;
    }
}
