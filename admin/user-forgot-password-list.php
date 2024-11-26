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
  <link rel="stylesheet" href="./css/ui/table.css" />
  <link rel="stylesheet" href="./css/ui/modal.css" />
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

      <h1 class="heading fw-bold">User Forgot Password</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="d-flex align-items-center gap-3 w-100">
          <div class="search-container position-relative d-flex align-items-center border w-100">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" placeholder="Search" class="search-input rounded-1 outline-0 w-100" />
          </div>
          <i class="fa-solid fa-filter filter-icon d-md-none"></i>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-md-4">
          <a href="./set-user-forgot-password.php" class="search-link">Set Forgot Password +</a>
          <i class="fa-solid fa-filter filter-icon d-none d-md-block"></i>
        </div>
      </div>


      <div class="table-wrapper">
        <div class="table-responsive custom-table-responsive" id="table-id">
          <table class="table custom-table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Investor ID</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="output">
              <tr>
                <td>21-Oct-2024</td>
                <td>Des</td>
                <td>LA-0234</td>
                <td>mail@gmail.com</td>
                <td>
                  <div class="custom-table-action">
                    <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td>21-Oct-2024</td>
                <td>Des</td>
                <td>LA-0234</td>
                <td>mail@gmail.com</td>
                <td>
                  <div class="custom-table-action">
                    <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mt-5">
        <h3>Updated List</h3>

        <div class="table-wrapper">
          <div class="table-responsive custom-table-responsive" id="table-id">
            <table class="table custom-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Investor ID</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Sended</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="output">
                <tr>
                  <td>21-Oct-2024</td>
                  <td>Des</td>
                  <td>LA-0234</td>
                  <td>mail@gmail.com</td>
                  <td>Des123</td>
                  <td><i class="fa-regular fa-envelope custom-table-icon"></i></td>
                  <td>
                    <div class="custom-table-action">
                      <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>21-Oct-2024</td>
                  <td>Des</td>
                  <td>LA-0234</td>
                  <td>mail@gmail.com</td>
                  <td>Des123</td>
                  <td><i class="fa-regular fa-envelope custom-table-icon"></i></td>
                  <td>
                    <div class="custom-table-action">
                      <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"></i>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <div class="mt-4 d-md-flex align-items-md-center justify-content-md-center gap-md-4 gap-lg-5">
            <div class="d-flex align-items-center justify-content-between gap-md-3 gap-lg-4">
              <p class="mb-0">Items per page:</p>
              <select class="form-select table-form-select" aria-label="Items per page">
                <option selected value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
              </select>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3 mt-md-0 gap-md-3 gap-lg-4">
              <p class="mb-0">1-2 of 10</p>
              <div class="d-flex">
                <button class="btn"><i class="fa-solid fa-arrow-left custom-table-prev"></i></button>
                <button class="btn"><i class="fa-solid fa-arrow-right custom-table-next"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3 py-4">

          <div class="modal-body">
            <h5 class="mb-0 text-center fw-semibold">Are you sure want to Edit?</h5>
          </div>
          <div class="d-flex justify-content-center gap-5 mt-2">
            <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn custom-modal-button agree fw-semibold" data-bs-target="#approvedToEdit"
              data-bs-toggle="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="approvedToEdit" data-bs-backdrop="static" aria-hidden="true"
      aria-labelledby="approvedToEdit" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered custom-modal-dialog">
        <div class="modal-content px-3 py-4">

          <div class="modal-body">
            <h5 class="mb-0 text-center fw-semibold">Edit Form</h5>.


            <div class="row">
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Name" aria-label="Name" />
              </div>
              <div class="col-sm-6 mt-3"> <input type="text" class="form-control" placeholder="Investor ID"
                  aria-label="Investor ID" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-3"><input type="email" class="form-control" placeholder="Email"
                  aria-label="Email" /></div>
              <div class="col-sm-6 mt-3"><input type="password" class="form-control" placeholder="Password"
                  aria-label="Password" /></div>
            </div>
            <div class="d-flex justify-content-end gap-5 mt-4 pt-2">
              <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn custom-modal-button agree fw-semibold"
                data-bs-toggle="modal">Change</button>
            </div>
          </div>

        </div>
      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>