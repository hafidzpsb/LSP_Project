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
        <img src="assets/Telkom Travel.png" style="width: 100px; margin: 10px">
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

  <!-- Content -->
    <div class="container mt-4">
        <div id="home-content" style="display: none;">
            <div class="container">
                <h1>Product List</h1>
                <form action="admin/find" method="get">
                    @method('get')
                        <input name="search" type="text" class="form-control-sm" placeholder="Search">
                        <button type="submit" class="btn btn-primary">Find</button>
                    </form>

                <table class="table mt-3">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>Exp Date</th>
                        <th>Price</th>
                        <th>Qty</th>
                    </tr>
                    </thead>
                <tbody>
                    {{-- @foreach ($products as $value) --}}
                  <tr>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>
                     x
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
    </div>

    <div id="view-add-route-content" style="display: none;">
        <div class="container">
            <h1>Add Route</h1>
dasd

        </div>
    </div>

    <div id="add-add-car-content" style="display: none;">
        <div class="container">
            <h1>Add Car</h1>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID Mobil</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Jumlah</th>
                        <th colspan="2" scope="colgroup"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                     {{-- @foreach ($carData as $car)
                      <tr>
                        <td>{{ $car->id_mobil }}</td>
                        <td>{{ $car->nama_mobil }}</td>
                        <td>{{ $car->jumlah }}</td>
                        <td width="100px" center><center><a href="/admin/car/edit/{{ $car->id_mobil }}" class="btn btn-warning mb-3 mt-3 w-100">Ubah</a></center></td>
                        <td width="100px" center><center><a href="/admin/car/delete/{{ $car->id_mobil }}" class="btn btn-danger mb-3 mt-3 w-100">Hapus</a></center></td>
                      </tr>
                      @endforeach --}}
                    </tbody>
                  </table>
                  <center><button style="margin-bottom: 50px;" type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalstore">Tambah +</button></center>
            </div><!-- Modal store data-->
            <div class="modal fade" id="modalstore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="/admin/car" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="nama_mobil" name="nama_mobil">
                      </div>
                      <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
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
        </div>
    </div>
  </div>
  <div class="container mt-4">
    <div id="userMNG-content" style="display: none;">
        <div class="container">
            <h1>User Management</h1>
            <a href="admin/adduser">
                <button class="btn btn-danger">Add User</button>
            </a>
            <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipe</th>
                    <th colspan="2" scope="colgroup"><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($user_index as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <?php if ($user -> level == 0)
                    { ?>
                      <td> Admin </td>
                    <?php } else { ?>
                      <td> User</td>
                    <?php } ?>
                    <td>
                        <form action="/admin/updateuser/{{ $user->id }}" method="post">
                        @csrf
                        @method('post')
                        <input class="btn btn-warning" type="submit" value="Edit Data">
                    </form>
                    <form action="/admin/deleteuser/{{ $user->id }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
                    </td>
                    <td>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>

</div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script>
      $(document).ready(function() {
      // Show Cashier content by default
      $('#home-content').show();

      $('.nav-link').click(function(e) {
        e.preventDefault();
        var menu = $(this).data('menu');
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        $('.container > div').hide();
        $('#' + menu + '-content').show();
      });
    });
  </script>
</body>
</html>
