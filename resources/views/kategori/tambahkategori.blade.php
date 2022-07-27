

<x-aps title="Tambah Data Kategori">

    <h1 class="text-center mb-4 p-3">Tambah Data Kategori</h1>

    <div class="container">

        <div class="row">

            <div class="card">

                <form action="/insertkategori" method="POST">
                     @csrf
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Nama Kategori</label>
                      <input type="text" name="categori" class="form-control" id="exampleInputText">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/kategori" class="btn btn-warning">Batal</a>
                  </form>

            </div>

        </div>

    </div>

</x-aps>
