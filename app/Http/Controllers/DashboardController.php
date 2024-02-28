<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelatih;
use Auth;
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

    public function profile()
    {
        $ubahprofile = Auth::user();

        return view('admin.edit-profile', compact('ubahprofile'));
    }

    public function edit_profile(Request $request)
    {
        $authUser = Auth::user();

        //validate form
        $this->validate($request, [
            'name' => 'required',
        ]);

        $authUser->update([
            'name' => $request->input('name'), // perbaiki pengambilan data dari request
            'email' => $request->input('email'), // perbaiki pengambilan data dari request
            'password' => bcrypt($request->input('password')), // enkripsi password sebelum menyimpan
        ]);

        //redirect to index
        return back()->with('success', 'Berhasil edit profile.');
    }



}
