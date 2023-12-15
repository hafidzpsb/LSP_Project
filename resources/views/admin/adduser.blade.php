<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add User</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 w-50">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Add User</h3>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <form action="addusr" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="nama">Name</label>
                    <input class="form-control" id="nama" name="name" placeholder="Name" >
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="Email" >
                </div>

                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input class="form-control" id="phone" name="phone" placeholder="Phone" >
                </div>
                <div class="mb-3">
                    <label for="phone">Password</label>
                    <input class="form-control" type="password" id="phone" name="password" placeholder="Password" >
                </div>
                <label for="role">Role</label>
                <select class="form-select" name="level" aria-label="Default select example">
                    <option selected>Select Role</option>
                    <option value="0">Admin</option>
                    <option value="1">Normal User</option>
                  </select>
                <button type="submit" class="btn btn-danger mt-3">Save</button>
            </form>

          <br>
          <a href="/admin">
            <button type="button" class="btn btn-secondary mt-2">back</button>
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
