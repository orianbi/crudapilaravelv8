<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'username' => 'Rika',
            'address' => 'Mataram',
        ]);
        Mahasiswa::create([
            'username' => 'Riska',
            'address' => 'Lotim',
        ]);
        Mahasiswa::create([
            'username' => 'Raka',
            'address' => 'Lotim',
        ]);

       
    }
}
