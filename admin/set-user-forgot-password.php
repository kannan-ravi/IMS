<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS User Forgot Password List</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/sidebar.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/ui/search-header.css" />
  <link rel="stylesheet" href="./css/user-forgot-password/user-forgot-password.css">
</head>

<body>
  <!-- Sidebar -->
  <nav class="sidebar d-none d-lg-block bg-white">
    <div class="p-3">
      <img src="../assests/toppiVappaProfilePic.png" alt="Topi Vappa Biryani" class="logo mb-4">
      <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="../adminComponents/adminDashboard.html" class="nav-link active">
            <i class="fas fa-tachometer-alt me-2"></i><b>Dashboard</b>
          </a>
        </li>
        <!-- Users -->
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#usersMenu" role="button">
            <i class="fas fa-chart-bar me-2"></i><b>Users</b>
          </a>
          <ul class="collapse ps-3 mt-1" id="usersMenu">
            <li class="nav-item"><a href="#" class="nav-link">Create Investor</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Set User Forgot Password</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Best Inv Plan</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Create Investor Card</a></li>
          </ul>
        </li>
        <!-- Documents -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-file-alt me-2"></i><b>Documents</b>
          </a>
        </li>
      </ul>
    </div>
  </nav>



  <div class="offcanvas offcanvas-start d-lg-none" data-bs-scroll="true" tabindex="-1" id="mobileSidebar"
    aria-labelledby="mobileSidebarLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <img src="../assests/toppiVappaProfilePic.png" alt="Topi Vappa Biryani" class="logo mb-4">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#mobileUsersMenu" role="button">Users</a>
          <ul class="collapse ps-3" id="mobileUsersMenu">
            <li class="nav-item"><a href="./bestInvPlan.html" class="nav-link">Create Investor</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Set User Forgot Password</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Best Inv Plan</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Create Investor Card</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Documents</a></li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content flex grow-1">
    <!-- Navbar -->
    <nav class="navbar navbar-light px-4">
      <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
        ☰
      </button>
      <span class="navbar-brand"><i class="fas fa-user-circle me-2"></i>Hello, Des</span>
      <div class="d-flex align-items-center">
        <span class="me-3"><i class="fas fa-user-shield me-2"></i>Des Admin</span>
        <div class="rounded-circle bg-secondary text-white p-2" style="width: 40px; height: 40px;"></div>
      </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mt-4">
      <p class="d-lg-none">Hello, Des</p>

      <h1 class="heading fw-bold">Set Forgot Password</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="bg-white px-3 py-4 rounded w-100">
          <div class="row">
            <div class="col-sm-6"> <input type="text" class="form-control" placeholder="Investor Email ID"
                aria-label="Investor Email ID" /></div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Username"
                aria-label="Username" /></div>
            <div class="col-sm-6 mt-3"> <input type="email" class="form-control" placeholder="Email"
                aria-label="Email" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="password" class="form-control" placeholder="New Password"
                aria-label="New Password" /></div>
            <div class="col-sm-6 mt-3"><input type="password" class="form-control" placeholder="Confirm Password"
                aria-label="Confirm Password" /></div>
          </div>
          <div class="d-flex flex-column flex-md-row justify-content-md-end mt-4 px-2 mx-0 gap-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change
              Password</button>
            <a href="./user-forgot-password-list.php" class="btn text-decoration-none">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>