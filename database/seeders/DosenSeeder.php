<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'name' => 'Dosen 1',
            'nip' => '123456789',
        ]);

        Dosen::create([
            'name' => 'Dosen 2',
            'nip' => '987654321',
        ]);
    }
}
