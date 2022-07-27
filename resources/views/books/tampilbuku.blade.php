
<x-aps title="Edit Data">
    
    <h1 class="text-center mb-4 p-3">Edit Data Buku</h1>

    <div class="container">

        <div class="row">

            <div class="card">

                <form action="/updatebuku/{{ $data->id }}" method="POST" >
                     @csrf
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Judul Buku</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputText" value="{{ $data->judul }}">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Penulis</label>
                      <input type="text" name="penulis" class="form-control" id="exampleInputText" value="{{ $data->penulis }}">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Penerbit</label>
                      <input type="text" name="penerbit" class="form-control" id="exampleInputText" value="{{ $data->penerbit }}">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Kategori Buku</label>
                      <input type="text" name="kategori" class="form-control" id="exampleInputText" value="{{ $data->kategori }}">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputNumber" class="form-label">Jumlah Halaman</label>
                      <input type="number" name="halaman" class="form-control" id="exampleInputNumber" value="{{ $data->halaman }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/buku" class="btn btn-warning">Batal</a>
                  </form>

            </div>

        </div>

    </div>

</x-aps>
