<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusans = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro'];

        foreach ($jurusans as $jurusan) {
            Jurusan::create(['nama_jurusan' => $jurusan]);
        }
    }
}
