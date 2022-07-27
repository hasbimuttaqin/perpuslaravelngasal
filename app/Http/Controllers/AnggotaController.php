<?php

namespace App\Http\Controllers;

use App\Models\Anggota;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $data = Anggota::all();

        return view('anggota.dataanggota', compact('data'));
    }

    public function tambahdata()
    {
        return view('anggota.tambahdata');
    }

    public function insertdata(Request $request)
    {
        Anggota::create($request->all());

        return redirect('anggota');
    }


    public function tampildata($id)
    {
       $data = Anggota::find($id);

       return view('anggota.tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Anggota::find($id)->update([

            'nama' => $request->input("nama"),
            'email' => $request->input("email"),
        ]);

        return redirect('anggota');
    }


    public function deletedata($id)
    {
       $data = Anggota::find($id)->delete();

       return redirect('anggota');
    }
}
