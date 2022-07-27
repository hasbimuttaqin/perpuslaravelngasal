
 <x-aps title="Data Buku">

    <h1 class="text-center mb-3 p-3">Data Buku</h1>

 <div class="container">

     <a href="/tambahbuku" class="btn btn-primary mb-4">Tambah Data Buku</a>

     <div class="row">

         <table class="table">
             <thead>
               <tr>
                 <th scope="col" style="font-size: 18px">No</th>
                 <th scope="col" style="font-size: 18px">Judul Buku</th>
                 <th scope="col" style="font-size: 18px">Penulis</th>
                 <th scope="col" style="font-size: 18px">Penerbit</th>
                 <th scope="col" style="font-size: 18px">Kategori Buku</th>
                 <th scope="col" style="font-size: 18px">Jumlah Halaman</th>
                 <th scope="col" style="font-size: 18px">Kelola</th>
               </tr>
             </thead>
             <tbody>

                @php
                    $no = 1;
                @endphp

                 @foreach ($data as $item)

               <tr>
                 <th scope="row">{{ $no++ }}</th>
                 <td>{{ $item->judul }}</td>
                 <td>{{ $item->penulis }}</td>
                 <td>{{ $item->penerbit }}</td>
                 <td>{{ $item->kategori }}</td>
                 <td>{{ $item->halaman }}</td>
                 <td>
                     <a href="/tampilbuku/{{ $item->id }}" class="btn btn-success">Edit</a>
                     <a href="/deletebuku/{{ $item->id }}" class="btn btn-danger">Delet</a>
                 </td>
               </tr>

               @endforeach

             </tbody>
           </table>
     </div>

 </div>

</x-aps>

























