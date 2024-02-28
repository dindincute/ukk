<?php

namespace App\Http\Controllers;


use App\Models\Pelatih;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
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
        $kelas = Kelas::all();
        $pelatih = Pelatih::get();
        return view('admin.tambah-kelas', compact('pelatih', 'kelas'), ['pelatih' => $pelatih]);
    }

    /**
     * Store a newly created resource in storage.
     */

    // fungsi menambhakan data
    public function store(Request $request)
    {
       //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_kelas' => 'required',
            'id_pelatih' => 'required',
            'deskripsi' => 'required',
            'manfaat' => 'required',
            'durasi' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Kelas::create([
            'image' => $image->hashName(),
            'nama_kelas' => $request->nama_kelas,
            'id_pelatih' => $request->id_pelatih,
            'deskripsi' => $request->deskripsi,
            'manfaat' => $request->manfaat,
            'durasi' => $request->durasi
        ]);

        //redirect to index
        return redirect('kelas')->with('success', 'Berhasil tambah data kelas.');

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
    // fungsi menambilkan data di edit
        public function edit(string $id)
    {
        //get post by ID
        $kelas = Kelas::findOrFail($id);
        $pelatih = Pelatih::get();
        return view('admin.edit-kelas', compact('kelas', 'pelatih'), ['pelatih' => $pelatih]);
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
            'id_pelatih' => 'required',
            'deskripsi' => 'required',
            'manfaat' => 'required',
            'durasi' => 'required'
        ]);

        //get post by ID
        $kelas = Kelas::findOrFail($id);
        $pelatih = Pelatih::get();
        //update nama_kelas and nama_pelatih
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->deskripsi = $request->deskripsi;
        $kelas->id_pelatih = $request->id_pelatih;
        $kelas->manfaat = $request->manfaat;
        $kelas->durasi = $request->durasi;

        //check apakah image diupload
        if ($request->hasFile('image')) {
            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete image lama
            Storage::delete('public/posts/' . $kelas->image);

            //update image
            $kelas->image = $image->hashName();
        }

        //save data
        $kelas->save();

        //redirect to index

        return redirect('kelas')->with('success', 'Berhasil edit data kelas.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $kelas = Kelas::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $kelas->image);

        //delete post
        $kelas->delete();

        //redirect to index
        return redirect('kelas')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
