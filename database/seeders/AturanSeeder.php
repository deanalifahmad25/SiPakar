<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aturan;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aturan1 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Epedemik Thypus',
            'kriteria_gejala' => 'G001ANDG002ANDG003',
        ]);

        $aturan2 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Epedemik Thypus',
            'kriteria_gejala' => 'G001ANDG004ANDG005',
        ]);

        $aturan3 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Scrub Thypus',
            'kriteria_gejala' => 'G001ANDG006ANDG007',
        ]);

        $aturan4 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Scrub Thypus',
            'kriteria_gejala' => 'G001ANDG003ANDG009',
        ]);

        $aturan5 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Spotted Fever',
            'kriteria_gejala' => 'G001ANDG005ANDG010',
        ]);

        $aturan6 = Aturan::create([
            'keputusan' => 'K001',
            'penyakit' => 'Spotted Fever',
            'kriteria_gejala' => 'G001ANDG008',
        ]);

        $aturan7 = Aturan::create([
            'keputusan' => 'K002',
            'penyakit' => 'Tidak Tifus',
            'kriteria_gejala' => 'G002ANDG003ANDG009',
        ]);

        $aturan8 = Aturan::create([
            'keputusan' => 'K002',
            'penyakit' => 'Tidak Tifus',
            'kriteria_gejala' => 'G002ANDG004ANDG007',
        ]);

        $aturan9 = Aturan::create([
            'keputusan' => 'K002',
            'penyakit' => 'Tidak Tifus',
            'kriteria_gejala' => 'G002ANDG006ANDG010',
        ]);

        $aturan10 = Aturan::create([
            'keputusan' => 'K002',
            'penyakit' => 'Tidak Tifus',
            'kriteria_gejala' => 'G002ANDG005ANDG008',
        ]);
    }
}
