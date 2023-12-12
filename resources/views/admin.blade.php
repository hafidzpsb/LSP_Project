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
            <a class="nav-link active" href="#">Accept</a>
            <a class="nav-link" href="admin2.html">Request Order</a>
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
        <h1 style="margin-top: 100px;">Accepted Order</h1>
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
                <th scope="col">Status</th>
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
                <td style="color: red;">Belum Cetak Ticket</td>
                <td style="color:red;">Edit</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th scope="row">0000321564</th>
                <td>Ismail Ahmad Kanabawy</td>
                <td>Ekonomi</td>
                <td>Bandung</td>
                <td>Jakarta</td>
                <td>03-11-2022</td>
                <td>1A</td>
                <td>Rp 70.000</td>
                <td style="color:blue;">Dalam Perjalanan</td>
                <td style="color:red;">Edit</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th scope="row">0000798645</th>
                <td>Khalid Kasymiri</td>
                <td>Business</td>
                <td>Tangerang</td>
                <td>Semarang</td>
                <td>02-11-2022</td>
                <td>3B</td>
                <td>Rp 85.000</td>
                <td style="color: green;">Selesai</td>
                <td style="color:red;">Edit</td>
              </tr>
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