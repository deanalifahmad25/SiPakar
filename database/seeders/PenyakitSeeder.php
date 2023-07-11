<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakit1 = Penyakit::create([
            'nama_penyakit' => 'Epedemik Thypus',
            'deskripsi_penyakit' => 'Epedemik thypus adalah penyakit infeksi yang disebabkan oleh bakteri Salmonella typhi. Penyakit ini ditandai dengan demam tinggi terus-menerus, ruam, sakit kepala, gangguan pencernaan, kelelahan, dan pembengkakan kelenjar getah bening. Epedemik thypus dapat menyebar melalui makanan atau minuman yang terkontaminasi bakteri tersebut.'
        ]);

        $penyakit2 = Penyakit::create([
            'nama_penyakit' => 'Scrub Thypus',
            'deskripsi_penyakit' => 'Scrub thypus adalah penyakit infeksi yang disebabkan oleh bakteri Orientia tsutsugamushi. Penyakit ini ditandai dengan demam, sakit kepala, sakit perut dan pembengkakan kelenjar getah bening. Scrub thypus dapat ditularkan melalui gigitan kutu atau kutu yang terinfeksi. Penyakit ini kebanyakan terjadi di daerah dengan populasi kutu yang tinggi.'
        ]);

        $penyakit3 = Penyakit::create([
            'nama_penyakit' => 'Spotted Fever',
            'deskripsi_penyakit' => 'Spotted fever adalah penyakit menular yang disebabkan oleh bakteri Rickettsia rickettsii. Penyakit ini ditandai dengan demam tinggi, ruam yang khas, sakit kepala, gangguan pencernaan, dan masalah pernapasan. Spotted fever biasanya ditularkan melalui gigitan kutu yang terinfeksi. Penyakit ini dapat menyebabkan komplikasi serius jika tidak diobati.'
        ]);

        $penyakit4 = Penyakit::create([
            'nama_penyakit' => 'Tidak Tifus',
            'deskripsi_penyakit' => '-'
        ]);
    }
}
