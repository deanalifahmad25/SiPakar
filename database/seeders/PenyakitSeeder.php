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
            'deskripsi_penyakit' => 'Epedemik thypus adalah penyakit infeksi yang disebabkan oleh bakteri Salmonella typhi. Penyakit ini ditandai dengan demam tinggi terus-menerus, ruam, sakit kepala, gangguan pencernaan, kelelahan, dan pembengkakan kelenjar getah bening. Epedemik thypus dapat menyebar melalui makanan atau minuman yang terkontaminasi bakteri tersebut.',
            'solusi_penyakit' => 'Pengobatan yang tepat untuk penyakit epidemik thypus melibatkan pemberian antibiotik yang spesifik untuk melawan bakteri Salmonella typhi. Antibiotik yang umum digunakan termasuk azitromisin, ceftriaxone, atau ciprofloxacin. Penting untuk berkonsultasi dengan dokter atau tenaga medis yang kompeten untuk mendapatkan diagnosis yang akurat dan pengobatan yang tepat sesuai dengan kondisi individu. Pada beberapa kasus yang parah, rawat inap di rumah sakit mungkin diperlukan untuk memantau perkembangan penyakit dan memberikan perawatan yang tepat, termasuk hidrasi yang adekuat dan perawatan suportif lainnya. Penting untuk menjalani pengobatan secara penuh sesuai dengan petunjuk medis dan melakukan tindak lanjut dengan dokter untuk pemulihan yang optimal.'
        ]);

        $penyakit2 = Penyakit::create([
            'nama_penyakit' => 'Scrub Thypus',
            'deskripsi_penyakit' => 'Scrub thypus adalah penyakit infeksi yang disebabkan oleh bakteri Orientia tsutsugamushi. Penyakit ini ditandai dengan demam, sakit kepala, sakit perut dan pembengkakan kelenjar getah bening. Scrub thypus dapat ditularkan melalui gigitan kutu atau kutu yang terinfeksi. Penyakit ini kebanyakan terjadi di daerah dengan populasi kutu yang tinggi.',
            'solusi_penyakit' => 'Pengobatan yang tepat untuk penyakit Scrub Typhus melibatkan pemberian antibiotik yang efektif melawan bakteri Rickettsia tsutsugamushi, penyebab penyakit ini. Antibiotik seperti doksisiklin atau azitromisin biasanya digunakan untuk mengobati infeksi ini. Penting untuk berkonsultasi dengan dokter atau tenaga medis yang berkompeten untuk mendapatkan diagnosis yang akurat dan rekomendasi pengobatan yang tepat sesuai dengan kondisi individu. Pengobatan harus dimulai sesegera mungkin setelah diagnosis dan harus diikuti secara penuh sesuai dengan jadwal dan dosis yang ditentukan oleh dokter. Selain itu, perawatan suportif seperti menjaga hidrasi yang baik dan istirahat yang cukup juga penting untuk mempercepat pemulihan.'
            
        ]);

        $penyakit3 = Penyakit::create([
            'nama_penyakit' => 'Spotted Fever',
            'deskripsi_penyakit' => 'Spotted fever adalah penyakit menular yang disebabkan oleh bakteri Rickettsia rickettsii. Penyakit ini ditandai dengan demam tinggi, ruam yang khas, sakit kepala, gangguan pencernaan, dan masalah pernapasan. Spotted fever biasanya ditularkan melalui gigitan kutu yang terinfeksi. Penyakit ini dapat menyebabkan komplikasi serius jika tidak diobati.',
            'solusi_penyakit' => 'Pengobatan yang tepat untuk penyakit Spotted Fever, seperti Rocky Mountain Spotted Fever atau Tick-borne Spotted Fever, melibatkan pemberian antibiotik yang efektif melawan bakteri Rickettsia rickettsii atau Rickettsia conorii. Antibiotik seperti doksisiklin biasanya direkomendasikan sebagai pengobatan utama. Penting untuk segera mencari perawatan medis dan berkonsultasi dengan dokter atau tenaga medis yang berkompeten untuk mendapatkan diagnosis yang akurat dan pengobatan yang tepat sesuai dengan kondisi individu. Pengobatan harus dimulai sesegera mungkin setelah diagnosis dan harus diikuti dengan ketat sesuai dengan jadwal dan dosis yang ditentukan oleh dokter. Perawatan suportif seperti istirahat yang cukup, hidrasi yang baik, dan penggunaan obat pereda gejala seperti antipiretik (penurun demam) juga dapat membantu dalam pemulihan.'
        ]);

        $penyakit4 = Penyakit::create([
            'nama_penyakit' => 'Tidak Tifus',
            'deskripsi_penyakit' => '-',
            'solusi_penyakit' => '-'
        ]);
    }
}
