

<x-aps title="Tambah Data Anggota">

    <h1 class="text-center mb-4 p-3">Tambah Data Anggota</h1>

    <div class="container">

        <div class="row">

            <div class="card">

                <form action="/insertdata" method="post">
                     @csrf
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label">Nama Anggota</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputText">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/anggota" class="btn btn-warning">Batal</a>
                  </form>

            </div>

        </div>

    </div>

</x-aps>
