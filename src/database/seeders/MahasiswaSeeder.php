<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Fikri Nur Wahid',
            'nim' => '20250101',
            'jurusan_id' => 1,
            'nilai_id' => 1,
        ]);

        Mahasiswa::create([
            'nama' => 'Siti Aisyah',
            'nim' => '20250102',
            'jurusan_id' => 2,
            'nilai_id' => 2,
        ]);

        Mahasiswa::create([
            'nama' => 'Ahmad Riza',
            'nim' => '20250103',
            'jurusan_id' => 3,
            'nilai_id' => 3,
        ]);
    }
}
