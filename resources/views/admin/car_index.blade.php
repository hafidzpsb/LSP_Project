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
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container-fluid">
          <a href="#">
              <img src="assets/Telkom Travel.png" style="width: 100px; margin: 10px">
          </a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/admin">Home</a>
            <a class="nav-link active" href="/admin/car">Mobil</a>
            <a class="nav-link" href="/admin/type">Kategori</a>
            <a class="nav-link" href="/admin">User</a>
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
        <h1 style="margin-top: 100px;">List Mobil</h1>
    </center>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Mobil</th>
                <th scope="col">Nama Mobil</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($car_index as $car)
              <tr>
                <td>{{ $car->id_mobil }}</td>
                <td>{{ $car->nama_mobil }}</td>
                <td>{{ $car->jumlah }}</td>
                <td><img style="width: 20px;" src="assets/close.png" alt=""></td>
                <td><img style="width: 20px;" src="assets/check.png" alt=""></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <footer>
        <div class="container-fluid fixed-bottom" style="background-color: rgb(96, 96, 96);">
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
                <h6 class="text-white">Copyright 2022</h6>
              </div>
      </footer>
</body>