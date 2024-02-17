<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelatih;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function classes()
    {
        $kelas = Kelas::all();

        return view('classes', compact('kelas'));
    }

    public function jadwal()
    {
        $jadwal = Jadwal::all();

        return view('schedule', compact('jadwal'));
    }

    public function pelatih()
    {
        $pelatih = Pelatih::all();

        return view('trainer', compact('pelatih'));
    }

    public function tentang()
    {
        return view('services');
    }


}
