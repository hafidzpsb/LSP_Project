<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="icon" href="assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a href="index.html">
                <img src="assets/Telkom Travel.png" style="width: 100px; margin: 10px">
            </a>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Home</a>
                <a class="nav-link" href="index.html">Our Location</a>
                <a class="nav-link" href="index.html">Our Car</a>
                <a class="nav-link" href="index.html">Buy Ticket</a>
                <a class="nav-link" href="about.html">About Us</a>
            </div>
          </div>
          <div style="width: 300px;" class="container text-end">
            <div class="user dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="modal" data-bs-target="#modallogin">
                <img style="width: 30px;" src="assets/user.png">
                Login
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    <div class="container">
        <center><img class="logoTelTrav" src="assets/Telkom Travel.png" alt="" srcset=""></center>
    </div>
    <div class="container-body">
        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/wnil6K2TRWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
        <h1 class="heading">Telkom Travel</h1>
        <p>Telkom travel adalah anak perusahaan dari PT Telkom Indonesia yang bergerak pada bidang transportasi. Telkom Travel bermarkas di jakarta, dan memiliki beberapa cabang yang tersebar di pulau jawa. Telkom travel memiliki beberapa layanan travel mulai dari kelas ekonomi, bisnis, dan VIP. Setiap layanan memiliki mobil yang berbeda.</p>
        
    </div>
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
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Login</button>
            </div>
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
                <h6 class="text-white">Copyright 2022</h6>
              </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
