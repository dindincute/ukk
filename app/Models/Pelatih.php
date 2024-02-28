<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelatih',
        'deskripsi',
        'image',
    ];

    public function pelatih()
	{
		return $this->hasMany(Kelas::class, 'id_pelatih');
	}

    public function nam_pelatih()
	{
		return $this->hasMany(Jadwal::class, 'nam_pelatih');
	}
}
