<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala1 = Gejala::create([
            'nama_gejala' => 'Demam Tinggi',
            'deskripsi_gejala' => 'Demam tinggi mencapai 39-40 derajat dan berlangsung selama beberapa hari hingga berminggu-minggu. Bersifat periodik, dengan kenaikan dan penurunan suhu tubuh. Pasien juga mungkin mengalami menggigil dan berkeringat berlebihan saat demam.',
            'pertanyaan' => 'Apakah anda mengalami Demam tinggi yang berlangsung selama beberapa hari hingga berminggu-minggu?'
        ]);

        $gejala2 = Gejala::create([
            'nama_gejala' => 'Ruam Kulit',
            'deskripsi_gejala' => 'Muncul bintik-bintik merah kecil pada tubuh dan wajah. Bintik-bintik ini dapat berkembang menjadi ruam yang lebih besar, biasanya tidak gatal dan bisa memudar dengan tekanan.',
            'pertanyaan' => 'Apakah muncul bintik-bintik merah kecil pada tubuh dan wajah anda?'
        ]);

        $gejala3 = Gejala::create([
            'nama_gejala' => 'Sakit Kepala',
            'deskripsi_gejala' => 'Sakit kepala biasanya terasa berat dan terbatas pada dahi atau bagian belakang kepala. Kondisi ini biasanya meningkat saat demam tinggi.',
            'pertanyaan' => 'Apakah anda merasakan sakit kepala?'
        ]);

        $gejala4 = Gejala::create([
            'nama_gejala' => 'Mual dan Muntah',
            'deskripsi_gejala' => 'Mual dan muntah yang berhubungan dengan tifus dapat disebabkan oleh peradangan pada saluran cerna dan gangguan pada saluran cerna.',
            'pertanyaan' => 'Apakah anda mengalami mual dan muntah?'
        ]);

        $gejala5 = Gejala::create([
            'nama_gejala' => 'Gangguan Pencernaan',
            'deskripsi_gejala' => 'Diare dengan tinja berwarna gelap dan berbau busuk. Pasien juga dapat mengalami konstipasi atau kesulitan buang air besar. Perubahan pola buang air besar ini dapat disebabkan oleh infeksi pada saluran pencernaan dan radang usus.',
            'pertanyaan' => 'Apakah anda mengalami diare?'
        ]);

        $gejala6 = Gejala::create([
            'nama_gejala' => 'Kelelahan',
            'deskripsi_gejala' => 'Fisik dan mental terasa lelah dan lesu. Kelelahan ini bisa disebabkan oleh demam terus-menerus dan peradangan di tubuh. Karena kekurangan energi, pasien mungkin merasa sulit untuk melakukan aktivitas sehari-hari.',
            'pertanyaan' => 'Apakah fisik dan mental anda terasa lelah dan lesu?'
        ]);

        $gejala7 = Gejala::create([
            'nama_gejala' => 'Sakit Perut',
            'deskripsi_gejala' => 'Sakit perut bisa bersifat kram atau nyeri yang tumpul dan terlokalisasi di sekitar perut. Nyeri ini biasanya lebih buruk saat ditekan atau saat pasien makan.',
            'pertanyaan' => 'Apakah anda merasakan sakit perut?'
        ]);

        $gejala8 = Gejala::create([
            'nama_gejala' => 'Gangguan Saluran Napas',
            'deskripsi_gejala' => 'Batuk kering, hidung tersumbat, bersin dan produksi lendir berlebihan.',
            'pertanyaan' => 'Apakah anda mengalami batuk kering, hidung tersumbat, bersin dan flu?'
        ]);

        $gejala9 = Gejala::create([
            'nama_gejala' => 'Pembengkakan Kelenjar ',
            'deskripsi_gejala' => 'Kelenjar getah bening di leher, ketiak, atau selangkangan bisa membesar dan terasa nyeri saat disentuh. Pembengkakan kelenjar getah bening disebabkan oleh respon tubuh terhadap infeksi dan peradangan yang terjadi pada penyakit tifus.',
            'pertanyaan' => 'Apakah leher, ketiak, atau selangkangan anda membesar dan terasa nyeri saat disentuh?'
        ]);

        $gejala10 = Gejala::create([
            'nama_gejala' => 'Gangguan Kesadaran',
            'deskripsi_gejala' => 'Pada kasus yang parah, tifus dapat memengaruhi sistem saraf pusat dan menyebabkan gangguan kesadaran. Pasien mungkin tampak bingung, sulit berkonsentrasi, atau bahkan kehilangan kesadaran.',
            'pertanyaan' => 'Apakah anda merasakan sulit berkonsentrasi atau mengalami pingsan?'
        ]);
    }
}
