

 <x-aps title="Data Kategori">

    <h1 class="text-center mb-3 p-3">Data Kategori Buku</h1>

 <div class="container">

     <a href="/tambahkategori" class="btn btn-primary mb-4">Tambah Data Kategori</a>

     <div class="row">

         <table class="table">
             <thead>
               <tr>
                 <th scope="col" style="font-size: 18px">No</th>
                 <th scope="col" style="font-size: 18px">Nama Kategori Buku</th>
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
                 <td>{{ $item->categori }}</td>
                 <td>
                     <a href="/tampilkategori/{{ $item->id }}" class="btn btn-success">Edit</a>
                     <a href="delete/{{ $item->id }}" class="btn btn-danger">Delet</a>
                 </td>
               </tr>

               @endforeach

             </tbody>
           </table>
     </div>

 </div>

</x-aps>

























