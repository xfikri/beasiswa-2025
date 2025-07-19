<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Jurusan;
use App\Models\Mahasiswa;
=======
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

<<<<<<< HEAD

=======
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
<<<<<<< HEAD
            JurusanSeeder::class,
            NilaiSeeder::class,
            MahasiswaSeeder::class,
        ]);

=======
        ]);
>>>>>>> a177b77b51ced4dea59030394a0f02ef4fac2128
    }
}
