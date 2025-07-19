<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['keterangan', 'angka'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
