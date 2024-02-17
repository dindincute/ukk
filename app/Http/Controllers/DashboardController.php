<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelatih;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $jadwal = Jadwal::all();
        $pelatih = Pelatih::all();

        return view('admin.dashboard', compact('kelas', 'jadwal', 'pelatih'));
    }

    public function kelas()
    {
        $kelas = Kelas::orderBy('created_at', 'desc')->get();

        return view('admin.kelas', compact('kelas'));
    }

    public function jadwal()
    {
        $jadwal = Jadwal::orderBy('created_at', 'desc')->get();


        return view('admin.jadwal-kelas', compact('jadwal'));
    }
    public function pelatih()
    {
        $pelatih = Pelatih::orderBy('created_at', 'desc')->get();

        return view('admin.pelatih-kelas', compact('pelatih'));
    }
}
