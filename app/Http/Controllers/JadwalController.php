<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-jadwal');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_kelas' => 'required',
            'nama_pelatih' => 'required',
            'jam' => 'required',
            'kategori' => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //menambhakan data
        Jadwal::create([
            'image' => $image->hashName(),
            'nama_kelas' => $request->nama_kelas,
            'nama_pelatih' => $request->nama_pelatih,
            'jam' => $request->jam,
            'kategori' => $request->kategori
        ]);
        //redirect to index
        return redirect('jadwal-kelas')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    // fungsi menambilkan data setelah di edit
    public function edit(string $id)
    {
        //get post by ID
        $jadwal = Jadwal::findOrFail($id);

        return view('admin.edit-jadwal', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_kelas' => 'required',
            'nama_pelatih' => 'required',
            'jam' => 'required',
            'kategori' => 'required'
        ]);

        //get post by ID
        $jadwal = Jadwal::findOrFail($id);

        //update nama_kelas and nama_pelatih
        $jadwal->nama_kelas = $request->nama_kelas;
        $jadwal->nama_pelatih = $request->nama_pelatih;
        $jadwal->jam = $request->jam;
        $jadwal->kategori = $request->kategori;

        //check apakah image diupload
        if ($request->hasFile('image')) {
            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete image lama
            Storage::delete('public/posts/' . $jadwal->image);

            //update image
            $jadwal->image = $image->hashName();
        }

        //save data
        $jadwal->save();

        //redirect to index

        return redirect('jadwal-kelas')->with('success', 'Berhasil edit jadwal kelas.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $jadwal = Jadwal::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $jadwal->image);

        //delete post
        $jadwal->delete();

        //redirect to index
        return redirect('jadwal-kelas')->with('success', 'Berhasil hapus jadwal kelas.');
    }
}
