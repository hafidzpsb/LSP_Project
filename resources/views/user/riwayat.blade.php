<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telkom Travel</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container-fluid">
          <a href="#">
              <img src="../assets/Telkom Travel.png" style="width: 100px; margin: 10px">
          </a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/#ourcar">Our Car</a>
            <a class="nav-link" href="/#lokasikami">Our Location</a>
            <a class="nav-link" href="/services">Our Services</a>
            <a class="nav-link" href="/about.html">About Us</a>
          </div>
        </div>
        <div style="width: 300px;" class="container text-end">
          <div class="user dropdown">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
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
                @endguest
            </ul>
          </div>
        </div>
      </div>
    </nav>
<!-- Modal -->
<section class="page-section bg-primary text-dark mb-0" id="ticket">
    <div class="container">
      <h2 class="page-section-heading text-center text-dark">Buy Ticket</h2>
      <div class="container" style="max-width: 800px;">
        <div class="container">
          <center>
          <table class="table">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama Mobil</th>
                    <th>Foto</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Harga Sewa</th>
                    <th>Nama Peminjam</th>
                    <th>Status</th>
                    <th colspan="2" scope="colgroup"><center>Aksi</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat as $carter)
                <tr>
                    <td>{{$carter->id_carter}}</td>
                    <td>{{$carter->car->nama_mobil}}</td>
                    <td>
                    <img src="{{ $carter->car->foto }}" height="150px" width="300px" alt="No Image">
                    </td>
                    <td>{{$carter->tanggal_sewa}}</td>
                    <td>{{$carter->tanggal_pengembalian}}</td>
                    <td>{{$carter->car->harga_mobil}}</td>
                    <td>{{$carter->car->use_for}}</td>
                    <td>{{$carter->status}}</td>
                    <form action="/user/pengembalian/{{ $carter->id_carter }}" method="POST">
                        @csrf
                        <td width="100px" center><center><button type="submit" class="btn btn-warning mb-3 mt-3 w-100" {{ $carter->status === 'menunggu' || $carter->status === 'dikembalikan'? 'disabled' : null}}>Konfirmasi Pengembalian</button></center></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
          </center>
          <!-- <center>
            <h6>You must be logged in to be able to book your ticket</h6>
            <button style="margin-bottom: 50px;" type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#modallogin">Login</button>
          </center> -->
        </div>
      </div>
    </div>
  </section>
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
            <h6 class="text-white">Copyright 2022</h6>
          </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
