<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->foreignId('jurusan_id')->constrained()->cascadeOnDelete();
            $table->foreignId('nilai_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        // Contoh kalau memang mau pakai model (jarang di migration)
        // Jurusan::create(['nama_jurusan' => 'Teknik Informatika']);
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
