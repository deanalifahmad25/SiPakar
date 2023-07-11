<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keputusan;

class KeputusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keputusan1 = Keputusan::create([
            'nama_keputusan' => 'Tifus'
        ]);

        $keputusan2 = Keputusan::create([
            'nama_keputusan' => 'Tidak Tifus'
        ]);
    }
}
