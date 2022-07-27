<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();

        return view('books.databuku',compact('data'));
    }

          //INSERT DATA BUKU

    public function tambahbuku()
    {
        return view('books.tambahdata');
    }

    public function insertbuku(Request $request)
    {
        Book::create($request->all());

        return redirect('buku');
    }

        //UPDATE atau EDIT DATA BUKU

    public function tampilbuku($id)
    {
         $data = Book::find($id);

         return view('books.tampilbuku',compact('data'));
    }

    public function updatebuku(Request $request, $id)
    {
        $data = Book::find($id);

        $data->update($request->all());

        return redirect('buku');
    }

         //HAPUS DATA BUKU

    public function deletebuku($id)
    {
             $data = Book::find($id)->delete();

             return redirect('buku');
    }
}
