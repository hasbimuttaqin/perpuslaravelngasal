
<x-aps title="Tambah Data Buku">

    <h1 class="text-center mb-4 p-3">Tambah Data Buku</h1>

    <div class="container">

        <div class="row">

            <div class="card">

                <form action="/insertbuku" method="POST" >
                     @csrf
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Judul Buku</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputText">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Penulis</label>
                      <input type="text" name="penulis" class="form-control" id="exampleInputText">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Penerbit</label>
                      <input type="text" name="penerbit" class="form-control" id="exampleInputText">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Kategori Buku</label>
                      <input type="text" name="kategori" class="form-control" id="exampleInputText">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputNumber" class="form-label">Jumlah Halaman</label>
                      <input type="number" name="halaman" class="form-control" id="exampleInputNumber">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/buku" class="btn btn-warning">Batal</a>
                  </form>

            </div>

        </div>

    </div>

</x-aps>
