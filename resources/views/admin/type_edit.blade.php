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
        <h1 style="margin: 50px;"><u>Edit Kategori</u></h1>
    </center>
    <div class="container" style="margin: 50px;">
        <form action="/admin/type/update/{{ $type_edit->id_kategori }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_mobil">Nama Mobil</label>
                @if($type_edit->car)
                <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="{{ $type_edit->car->nama_mobil }}" disabled>
                @endif
            </div>
            <div class="mb-3">
                <label for="kode_mobil">Kode Mobil</label>
                <input type="text" class="form-control" name="kode_mobil" id="kode_mobil" value="{{ $type_edit->kode_mobil }}">
            </div>
            <div class="mb-3">
                <label for="tipe_mobil">Tipe Mobil</label>
                <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" value="{{ $type_edit->tipe_mobil }}">
            </div>
            <div class="mb-3">
                <label for="brand_mobil">Brand Mobil</label>
                <input type="text" class="form-control" name="brand_mobil" id="brand_mobil" value="{{ $type_edit->brand_mobil }}">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <center><a href="/admin/car" class="btn btn-danger">Cancel</a></center>
                    </div>
                    <div class="col-6">
                        <center><button type="submit" class="btn btn-warning">Ubah</button></center>
                    </div>
                </div>
            </div>
        </form>
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