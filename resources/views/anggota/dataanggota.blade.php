

 <x-aps title="Data Anggota">

    <h1 class="text-center mb-3 p-3">Data Anggota</h1>

 <div class="container">

     <a href="/tambahdata" class="btn btn-primary mb-4">Tambah Data Anggota</a>

     <div class="row">

         <table class="table">
             <thead>
               <tr>
                 <th scope="col" style="font-size: 18px">No</th>
                 <th scope="col" style="font-size: 18px">Nama Anggota</th>
                 <th scope="col" style="font-size: 18px">Email</th>
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
                 <td>{{ $item->nama }}</td>
                 <td>{{ $item->email }}</td>
                 <td>
                     <a href="/tampildata/{{ $item->id }}" class="btn btn-success">Edit</a>
                     <a href="/deletedata/{{ $item->id }}" class="btn btn-danger">Delet</a>
                 </td>
               </tr>

               @endforeach

             </tbody>
           </table>
     </div>

 </div>

</x-aps>

























