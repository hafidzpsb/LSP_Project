<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telkom Travel Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <!-- Custom CSS -->
  <style>
     .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 0 0;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      background-color: rgb(194, 194, 194)
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .nav-link {
      color: #333;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #007bff;
    }

    .active {
      color: #007bff !important;
    }

    .container {
      margin-left: 125px;
    }
  </style>
  <!-- Sidebar -->
    <div class="sidebar">
      <a href="#">
          <img src="/assets/Telkom Travel.png" style="width: 100px; margin: 10px">
      </a>
      <nav class="sidebar-sticky">
        <ul class="nav flex-column">
          <!-- Cashier menu -->
          <li class="nav-item">
            <a class="nav-link active" href="#" data-menu="home">
              Home
            </a>
          </li>
          <!-- View Stock menu -->
          <li class="nav-item">
              <a class="nav-link" href="#" data-menu="view-add-route">
                Add Travel Route
              </a>
            </li>
          <!-- Add Stock menu -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-menu="add-add-car">
              Add Car
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-menu="userMNG">
              User Management
            </a>
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
        </ul>
      </nav>
    </div>
    <center>
        <h1 style="margin: 50px;"><u>List Mobil</u></h1>
    </center>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Mobil</th>
                <th scope="col">Foto</th>
                <th scope="col">Kode Mobil</th>
                <th scope="col">Nama Mobil</th>
                <th scope="col">Harga Mobil</th>
                <th scope="col">Kategori Mobil</th>
                <th colspan="2" scope="colgroup"><center>Aksi</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($car_index as $car)
              <tr>
                <td>{{ $car->id_mobil }}</td>
                <td>
                  <img src="{{ $car->foto }}" height="150px" width="300px" alt="No Image">
                </td>
                <td>{{ $car->kode_mobil }}</td>
                <td>{{ $car->nama_mobil }}</td>
                <td>{{ $car->harga_mobil }}</td>
                <td>
                  @foreach ($car->type as $kategori)
                    {{ $kategori->nama_kategori }},
                  @endforeach
                </td>
                <td width="100px" center><center><a href="/admin/car/edit/{{ $car->id_mobil }}" class="btn btn-warning mb-3 mt-3 w-100">Ubah</a></center></td>
                <td width="100px" center><center><a href="/admin/car/delete/{{ $car->id_mobil }}" class="btn btn-danger mb-3 mt-3 w-100">Hapus</a></center></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <center><a style="margin-bottom: 50px;" class="btn btn-success" href="/admin/car/create">Tambah +</a></center>
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