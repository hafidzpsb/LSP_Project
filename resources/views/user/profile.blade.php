<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profil Saya</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 w-50">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">My Profile</h3>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label for="nama">Name</label>
            <input class="form-control" id="nama" value="{{ Auth::user()->name }}" disabled>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
          </div>
          <div class="mb-3">
            <label for="phone">Phone</label>
            <input class="form-control" id="phone" value="{{ Auth::user()->phone }}" disabled>
          </div>
          <div class="mb-3">
            <label for="registeredAt">Registered At</label>
            <input class="form-control" id="registeredAt" value="{{ Auth::user()->created_at->format('d F Y') }}"disabled>

          </div>
          <p>Update Password? <a href="updatepw">Click Here</a></p>
          <a href="updateprofile">
            <button type="button" class="btn btn-danger">Update Profile</button>
          </a>
          <br>
          <a href="/">
            <button type="button" class="btn btn-secondary mt-2">Cancel</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
