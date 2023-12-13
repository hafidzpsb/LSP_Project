<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telkom Travel</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
      <div class="container-fluid">
          <a href="#">
              <img src="/assets/Telkom Travel.png" style="width: 100px; margin: 10px">
          </a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/admin">Home</a>
            <a class="nav-link" href="/admin/car">Mobil</a>
            <a class="nav-link active" href="/admin/type">Kategori</a>
            <a class="nav-link" href="/admin/user">User</a>
          </div>
        </div>
        <div style="width: 300px;" class="container text-end">
          <div class="user dropdown">
            <a href="index.html">
                <button type="button" class="btn btn-outline-secondary">Logout</button>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <center>
        <h1 style="margin: 50px;"><u>Kategori Mobil</u></h1>
    </center>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Kategori</th>
            <th scope="col">ID Mobil</th>
            <th scope="col">Nama Mobil</th>
            <th scope="col">Kode Mobil</th>
            <th scope="col">Tipe Mobil</th>
            <th scope="col">Brand Mobil</th>
            <th colspan="2" scope="colgroup"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($type_index as $type)
          <tr>
            <td>{{ $type->id_kategori }}</td>
            <td>{{ $type->id_mobil }}</td>
            @if ($type->car)
            <td>{{ $type->car->nama_mobil }}</td>
            @endif
            <td>{{ $type->kode_mobil }}</td>
            <td>{{ $type->tipe_mobil }}</td>
            <td>{{ $type->brand_mobil }}</td>
            <td width="100px" center><center><a name="update" id="update" href="/admin/type/edit/{{ $type->id_kategori }}" class="btn btn-warning mb-3 mt-3 w-100">Edit</a></center></td>
            <td width="100px" center><center><a name="delete" id="delete" href="/admin/type/delete/{{ $type->id_kategori }}" class="btn btn-danger mb-3 mt-3 w-100">Delete</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <center><button style="margin-bottom: 50px;" type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalstore">Tambah +</button></center>
    </div>
    <!-- Modal store data-->
    <div class="modal fade" id="modalstore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/admin/type" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="input-group mb-3">
                <select class="custom-select form-control" name="id_mobil" id="id_mobil">
                  @foreach ($type_index->unique('id_mobil') as $type)
                    @if ($type->car)
                      <option value="{{ $type->id_mobil }}">{{ $type->car->nama_mobil }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="kode_mobil" class="form-label">Kode Mobil</label>
                <input type="text" class="form-control" id="kode_mobil" name="kode_mobil">
              </div>
              <div class="mb-3">
                <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
                <input type="text" class="form-control" id="tipe_mobil" name="tipe_mobil">
              </div>
              <div class="mb-3">
                <label for="brand_mobil" class="form-label">Brand Mobil</label>
                <input type="text" class="form-control" id="brand_mobil" name="brand_mobil">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-warning">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>
        <div class="container-fluid" style="background-color: rgb(96, 96, 96);">
          <div class="container text-center">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
              <div class="col-md-6">
                <h2 class="mt-5 text-white">
                  Contact Us
                </h2>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px; align-items: flex-start;" src="assets/location-pin.png">
                  Jl. Puri Kembangan 21, RT.6/RW.5, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610
                </p>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px;" src="assets/phone-call.png" alt="">
                  085156558787
                </p>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px;" src="assets/email.png" alt="">
                  admin@teltrav.co.id
                </p>
              </div>
              <div style="margin-left:150px;" class="col-8 col-md-4">
                <img style="width: 300px; margin-top:50px;" src="assets/Telkom Travel-fullwhite.png" alt="">
                <h6 class="text-white">Copyright 2023</h6>
              </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>