<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'id_pelatihs',
        'image',
        'durasi',
        'deskripsi',
        'manfaat',
    ];
    public function nama_pelatih()
	{
		return $this->hasMany(Pelatih::class, 'id_pelatihs');
	}
}
