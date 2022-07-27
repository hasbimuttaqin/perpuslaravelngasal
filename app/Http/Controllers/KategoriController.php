<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();

        return view('kategori.datakategori', compact('data'));
    }

        // TAMBAH DATA KATEGORI

    public function tambahkategori()
    {
        return view('kategori.tambahkategori');
    }

    public function insertkategori(Request $request)
    {
        Kategori::create($request->all());

        return redirect('kategori');
    }

       //UPDATE ATAU DATA KATEGORI

    public function tampilkategori($id)
    {
        $data = Kategori::find($id);

        return view('kategori.tampilkategori', compact('data'));
    }

    public function updatekategori(Request $request, $id)
    {
       $data = Kategori::find($id)->update([

           'categori' => $request->input("categori")
       ]);

        return redirect('kategori');
    }

     //HAPUS DATA KATEGORI

    public function delete($id)
    {
        $data = Kategori::find($id)->delete();  //INI CARA YANG SIMPLE

            // ATAU BISA JUGA SEPERTI INI $data->delete();

        return redirect('kategori');
    }

}
