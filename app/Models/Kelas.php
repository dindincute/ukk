<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'image',
        'durasi',
        'deskripsi',
        'manfaat',
        'id_pelatih', // Kolom yang berhubungan dengan tabel pelatihs
    ];

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class, 'id_pelatih');
    }

    public function kelas()
    {
        return $this->hasMany(Jadwal::class, 'nam_kelas');
    }
}
