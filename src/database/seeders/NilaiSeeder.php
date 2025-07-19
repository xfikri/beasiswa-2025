<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        $nilais = [
            ['keterangan' => 'Cumlaude', 'angka' => 3.75],
            ['keterangan' => 'Sangat Baik', 'angka' => 3.50],
            ['keterangan' => 'Baik', 'angka' => 3.00],
        ];

        foreach ($nilais as $nilai) {
            Nilai::create($nilai);
        }
    }
}
