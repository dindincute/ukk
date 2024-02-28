<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nam_kelas',
        'nam_pelatih',
        'jam',
        'kategori',
        'image',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'nam_kelas');
    }

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class, 'nam_pelatih');
    }



}
