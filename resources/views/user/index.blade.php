@extends('navbarfooter')
@section('body')

    <header>
    <section>
        <center><img class="logoTelTrav" src="assets/Telkom Travel.png" alt=""></center>

      </section>
      <section class="page-section bg-primary text-dark mb-0" id="ourcar">
        <div class="container">
            <div class="container">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <center>
                    <h1 style=" margin-top: 50px;">Our Car</h1>
                    <div class="carousel-item active">
                      <img src="assets/hiace.png" class="d-block w-90" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img class="canter" src="assets/canter.png" class="d-block w-90" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/elf.png" class="d-block w-90" alt="...">
                    </div>
                  </center>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-dark mb-0" id="head">
      <div class="container">
        <center><img style="width: 400px; margin-top: 70px;" src="assets/Telkom Travel.png" alt=""></center>
        <div style="margin-top: 30px;" class="container text-center">
          <div class="row">
            <div class="row" id="tenkam">
              <div class="col-lg-4 ms-auto"><p class="lead">Telkom Travel adalah sebuah jasa travel yang berousat di jakarta dan memiliki cabang di beberapa kota besar yang ada di pulau jawa. Telkom Travel memiliki beberapa layangan yang dapat dipilih oleh pelanggan sesuai dengan keinginan.</p></div>
              <div class="col-lg-4 me-auto"><p class="lead">Kami memiliki tiga layanan diantara nya adalah Ekonomi, Bisnis, dan VIP. Setiap layanan memiliki fasilitas yang berbeda, mulai dari Snack Box, Ruang Tunggu, dan Kendaraan yang akan digunakan.</p></div>
          </div>
          </div>
        </div>
      </div>
    </section>
    </header>
    <section class="page-section bg-primary text-dark mb-0" id="lokasikami">
      <div class="container">
        <h2 style="margin-bottom: -50px;" class="page-section-heading text-center text-dark">Lokasi Kami</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <center>
                <h3>Jakarta</h3>
                  <iframe style="width: 900px; margin-bottom: 15px" class="d-block w-90" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.618075628347!2d106.74918721468!3d-6.181843762293154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70821e9e767%3A0xfffb9e5678a49d27!2sJl.%20Puri%20Kembangan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1667372145697!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <center>
            </div>
            <div class="carousel-item">
              <center>
                <h3>Tangerang</h3>
                <iframe style="width: 900px; margin-bottom: 15px" class="d-block w-90" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5751951198754!2d106.67410461468003!3d-6.187559562346724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f90760019361%3A0x63a28fed43ade749!2sTangerang!5e0!3m2!1sid!2sid!4v1667372611292!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </center>
            </div>
            <div class="carousel-item">
              <center>
                <h3>Bandung</h3>
                <iframe style="width: 900px; margin-bottom: 15px" class="d-block w-90" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7537797673003!2d107.60668381468679!3d-6.920011169653373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62570676669%3A0xf4d6d436be0d8241!2sAsia%20Afrika%20Fountain!5e0!3m2!1sid!2sid!4v1667372688104!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </center>
            </div>
            <div class="carousel-item">
              <center>
                <h3>Semarang</h3>
                <iframe style="width: 900px; margin-bottom: 15px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0919954158903!2d110.42946852265132!3d-6.9984472542958445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c99173c1c01%3A0x3774a9d820fead18!2sJl.%20Kompol%20Maksum%20No.292%2C%20Peterongan%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050242!5e0!3m2!1sid!2sid!4v1667380980966!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </center>
            </div>
            <div class="carousel-item">
              <center>
                <h3>Surabaya</h3>
                <iframe style="width: 900px; margin-bottom: 15px" class="d-block w-90" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6222716606735!2d112.73039172266834!3d-7.283746756769536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbebc0aa9c93%3A0xd149c6d43a257607!2sJl.%20Dr.%20Soetomo%2C%20DR.%20Soetomo%2C%20Kec.%20Tegalsari%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060264!5e0!3m2!1sid!2sid!4v1667381046780!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </center>
            </div>
            <div class="carousel-item">
              <center>
                <h3>Malang</h3>
                <iframe style="width: 900px; margin-bottom: 15px" class="d-block w-90" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2719726730656!2d112.6222817563508!3d-7.970819194153493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628286f36cd07%3A0xd27c205a000de510!2sJl.%20Besar%20Ijen%2C%20Oro-oro%20Dowo%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065119!5e0!3m2!1sid!2sid!4v1667381116455!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </center>
            </div>
          </div>
          <button class="carousel-control-prev btn-secondary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
