<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas',
        'nama_pelatih',
        'jam',
        'durasi_kelas',
        'kategori',
        'image',

    ];

    public function getJamFormattedAttribute()
    {
        return Carbon::parse($this->attributes['jam'])->format('H:i');
    }
}
