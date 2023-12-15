<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telkom Travel</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
<div class="modal fade " id="modallogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="  modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div>
            <p>don't have an account yet? <a href="">CLick Here</a></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="user_index.html">
          <button type="button" class="btn btn-danger">Login</button>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container text-center" style="margin-top: 100px;">
    <h1 class="">Our Services</h1>
    <section class="mb-5">
        <h3 class="mt-3">Car Travel</h3>
        <p>
          Dengan layanan Car Travel kami, Anda dapat menikmati perjalanan yang nyaman dan aman ke destinasi pilihan Anda. Kendaraan kami dilengkapi dengan fasilitas yang modern dan sopir berpengalaman untuk memastikan perjalanan Anda berjalan lancar.
        </p>
        <p>
          <strong>Keunggulan Car Travel:</strong>
        </p>
        <ul>
          <li>Kenyamanan Utama: Kendaraan kami dirancang untuk memberikan kenyamanan tertinggi selama perjalanan.</li>
          <li>Fleksibilitas Jadwal: Sesuaikan waktu perjalanan Anda sesuai kebutuhan, tanpa harus mengikuti jadwal transportasi umum.</li>
          <li>Sopir Berpengalaman: Sopir kami terlatih dan berpengalaman, memastikan keamanan dan keamanan selama perjalanan.</li>
        </ul>
        <a href="user/booktravel">
            <button style="margin-bottom: 50px;" type="button" class="btn btn-danger">Book Travel</button>
          </a>
      </section>
      <section>
        <h2>Car Charter</h2>
        <p>
          Layanan Car Charter kami memberikan fleksibilitas penuh kepada Anda. Anda dapat menyewa kendaraan kami untuk keperluan khusus, seperti perjalanan bisnis, wisata pribadi, atau acara khusus. Dengan Car Charter, Anda memiliki kendali penuh atas rute perjalanan dan jadwal, memberikan kebebasan dan kenyamanan tanpa batasan.
        </p>
        <p>
          <strong>Keunggulan Car Charter:</strong>
        </p>
        <ul>
          <li>Kendali Penuh: Tentukan sendiri rute perjalanan dan jadwal sesuai keinginan Anda.</li>
          <li>Privasi dan Eksklusivitas: Nikmati perjalanan tanpa gangguan, dengan kendaraan eksklusif untuk keperluan Anda.</li>
          <li>Pilihan Kendaraan: Pilih kendaraan sesuai dengan kebutuhan, mulai dari mobil mewah hingga van besar untuk kelompok besar.</li>
        </ul>
        <a href="user/bookcarter">
            <button style="margin-bottom: 50px;" type="button" class="btn btn-danger">Book The Car</button>
          </a>
      </section>
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
            <h6 class="text-white">Copyright 2022</h6>
          </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
