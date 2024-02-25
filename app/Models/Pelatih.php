<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelatih',
        'nama_pelatih',
        'deskripsi',
        'image',
    ];

    public function pelatih()
	{
		return $this->belongsTo(Kelas::class, 'id_pelatihs');
	}
}
