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
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#lokasikami">Our Location</a>
            <a class="nav-link" href="#ourcar">Buy Ticket</a>
            <a class="nav-link" href="#ticket">Buy Ticket</a>
            <a class="nav-link" href="about.html">About Us</a>
          </div>
        </div>
        <div style="width: 300px;" class="container text-end">
          <div class="user dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img style="width: 30px;" src="assets/user.png">
              Achmad Rozan
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="index.html">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <center>
        <h1 style="margin-top: 100px;">Detail Order</h1>
    </center>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Order</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Your Location</th>
                <th scope="col">Your Destination</th>
                <th scope="col">Book Date</th>
                <th scope="col">Seat</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">0000112245</th>
                <td>Achmad Rozan</td>
                <td>VIP</td>
                <td>Jakarta</td>
                <td>Bandung</td>
                <td>03-11-2022</td>
                <td>2B</td>
                <td>Rp 100.000</td>
              </tr>
            </tbody>
          </table>
            <div style="margin-top: 50px;">
              <center>
                  <a href="user_index.html">
                      <button type="button" class="btn btn-secondary">Cancel</button>
                    </a>
                    <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#checkout">Select Payment method</button>
                </center>
            </div>
    </div>
    <div class="modal fade " id="checkout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="  modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <button type="button" class="btn btn-danger">Cash</button>
                    <button type="button" class="btn btn-primary">Debit</button>
                </center>
            </div>
          </div>
        </div>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
