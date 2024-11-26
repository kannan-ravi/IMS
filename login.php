
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container-fluid d-flex align-items-center justify-content-center vh-100 bg-black">
    <div class="row w-75">

    
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="text-center p-xl-5 bg-white shadow rounded">
          <img src="./assests/toppiVappaProfilePic.png" alt="Logo">
          <h4 class="fw-bold">Vappa's Capital & Marketing Pvt Ltd</h4>
          <p class="text-muted">(A Part of Topi Vappa Groups)</p>
        </div>
      </div>
    

      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="text-white shadow rounded">
          <h4 class="text-center mb-4">Welcome To Topi Vappa</h4>
          <form method="POST" action="login_process.php">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email"  required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div><br/>
           <button type="submit" style="border:none;background-color:green;color:white;">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
