<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function edit(string $id){
        $user = Auth::user();

        return view('admin.edit-profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        //get post by ID
        $ubahprofile = AdminProfileController::findOrFail($id);
        //update nama_kelas and nama_pelatih
        $ubahprofile->name = $request->name;
        $ubahprofile->email = $request->deskripsi;
        $ubahprofile->password = $request->password;


        //save data
        $ubahprofile->save();

        //redirect to index

        return redirect('admin.dashboard')->with('success', 'Berhasil edit profile.');
    }

    /**
     * Remove the specified resource from storage.
     */

}
