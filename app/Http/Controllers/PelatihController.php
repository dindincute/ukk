<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatih = Pelatih::all(); // untuk mengambil semua data pelatih dari model Pelatih
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-pelatih');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_pelatih' => 'required',
            'deskripsi' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Pelatih::create([
            'image' => $image->hashName(),
            'nama_pelatih' => $request->nama_pelatih,
            'deskripsi' => 'required',

        ]);

        //redirect to index
        return redirect('pelatih-kelas')->with('success', 'Berhasil tambah pelatih.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            //get post by ID
            $pelatih = Pelatih::findOrFail($id);

            return view('admin.edit-pelatih', compact('pelatih'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_pelatih' => 'required',
            'deskripsi' => 'required'
        ]);

        //get post by ID
        $pelatih = Pelatih::findOrFail($id);

        //update nama_kelas and nama_pelatih
        $pelatih->nama_pelatih = $request->nama_pelatih;
        $pelatih->deskripsi = $request->deskripsi;


        //check apakah image diupload
        if ($request->hasFile('image')) {
            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete image lama
            Storage::delete('public/posts/' . $pelatih->image);

            //update image
            $pelatih->image = $image->hashName();
    }
     //save data
     $pelatih->save();

     //redirect to index

     return redirect('pelatih-kelas')->with('success', 'Berhasil edit data pelatih.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          //get post by ID
          $pelatih= Pelatih::findOrFail($id);

          //delete image
          Storage::delete('public/posts/' . $pelatih->image);

          //delete post
          $pelatih->delete();

          //redirect to index
          return redirect('pelatih-kelas')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
