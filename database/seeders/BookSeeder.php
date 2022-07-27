<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'judul' => "Matematika",

            'penulis' => "WandiRst",

            'penerbit' => "Cvkencana",

            'kategori' => "Perhitungan",

            'halaman' => "50"
        ]);
    }
}
