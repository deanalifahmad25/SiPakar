<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\UserDiagnosa;

class DiagnosaController extends Controller
{
    public function index() {
        $gejala = Gejala::all();

        return view('user.diagnosa', compact('gejala'));
    }

    public function diagnosa(Request $request)
    {
        $inputGejala = $request->input('gejala');

        if (!$inputGejala) {
            return redirect()->back();
        }

        $penyakitBreadthFS = $this->getPenyakitByGejalaBreadthFS($inputGejala);
        $penyakitBestFS = $this->getPenyakitByGejalaBestFS($inputGejala);

        if ($penyakitBreadthFS && $penyakitBestFS) {
            if ($penyakitBreadthFS->kode_penyakit == $penyakitBestFS->kode_penyakit) {
                UserDiagnosa::create([
                    'kode_penyakit' => $penyakitBreadthFS->kode_penyakit
                ]);
            } else {
                UserDiagnosa::create([
                    'kode_penyakit' => $penyakitBreadthFS->kode_penyakit
                ]);

                UserDiagnosa::create([
                    'kode_penyakit' => $penyakitBestFS->kode_penyakit
                ]);
            }
        }

        return view('user.hasil-diagnosa', compact('penyakitBreadthFS', 'penyakitBestFS'));
    }

    private function getPenyakitByGejalaBreadthFS($gejala) {
        $penyakit = null;
        $antrian = collect(['K001', 'K002']); // Antrian untuk penyakit
        $solusi = []; // Array untuk menyimpan solusi yang ditemukan

        while (!$antrian->isEmpty()) {
            $keputusan = $antrian->shift(); // Ambil penyakit pertama dari antrian
            $basisAturan = Aturan::where('keputusan', $keputusan)->get();

            foreach ($basisAturan as $aturan) {
                $kriteriaGejala = explode('AND', $aturan->kriteria_gejala);
                $intersect = array_intersect($gejala, $kriteriaGejala);

                // Jika semua kriteria gejala cocok dengan input gejala
                if (count($intersect) == count($kriteriaGejala)) {
                    $penyakitObj = Penyakit::where('nama_penyakit', $aturan->penyakit)->first();
                    if ($penyakitObj) {
                        // Jika belum ada solusi yang ditemukan, tambahkan penyakit sebagai solusi
                        // Jika sudah ada solusi, periksa langkahnya dan pilih yang langkahnya lebih minimal
                        if (empty($solusi) || $penyakitObj->langkah < $solusi[0]->langkah) {
                            $solusi = [$penyakitObj];
                        }
                    }
                }

                // Jika penyakit belum ada dalam antrian, tambahkan ke antrian
                if (!in_array($aturan->penyakit, $antrian->toArray())) {
                    $antrian->push($aturan->penyakit);
                }
            }
        }

        if (!empty($solusi)) {
            $penyakit = $solusi[0];
        }

        return $penyakit;
    }

    private function getPenyakitByGejalaBestFS($gejala) {
        $penyakit = null;
        $antrian = collect(['K001', 'K002']); // Antrian untuk penyakit
        $nilaiHeuristik = []; // Array untuk menyimpan nilai heuristik penyakit
        $maxNilaiHeuristik = 0; // Inisialisasi nilai heuristik tertinggi

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
                    $penyakitObj = Penyakit::where('nama_penyakit', $aturan->penyakit)->first();
                    if ($penyakitObj) {
                        $jumlahCocok = count($intersect); // Jumlah gejala cocok
                        $nilaiHeuristik[$aturan->penyakit] = ($jumlahCocok / count($gejala)) * 100; // Menghitung nilai heuristik berdasarkan rumus (Jumlah Gejala Cocok / Jumlah Total Gejala) * 100

                        // Memperbarui penyakit dengan nilai heuristik tertinggi
                        if (!isset($maxNilaiHeuristik) || $nilaiHeuristik[$aturan->penyakit] > $maxNilaiHeuristik) {
                            $penyakit = $penyakitObj;
                            $maxNilaiHeuristik = $nilaiHeuristik[$aturan->penyakit];
                        }
                    }
                }

                // Jika penyakit belum ada dalam antrian, tambahkan ke antrian
                if (!in_array($aturan->penyakit, $antrian->toArray())) {
                    $antrian->push($aturan->penyakit);
                }
            }
        }

        return $penyakit;
    }
}
