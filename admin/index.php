<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/sidebar.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/ui/search-header.css" />
  <link rel="stylesheet" href="./css/ui/table.css" />
  <link rel="stylesheet" href="./css/dashboard.css" />
</head>

<body>

  <!-- Sidebar -->
  <?php include './sidebar.php' ?>

  <!-- Main Content -->
  <div class="main-container flex-grow-1">
    <!-- Navbar -->
    <?php include './header.php' ?>

    <!-- Dashboard Content -->
    <div class="container mt-4">
      <p class="d-lg-none">Hello, Des</p>

      <h1 class="heading fw-bold">Documents</h1>
      <div class="row my-4 row-gap-4">
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">Total Invested Amount</p>
              <p class="mb-0 card-number">0000</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">Total Investor</p>
              <p class="mb-0 card-number">000</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">Active Investors</p>
              <p class="mb-0 card-number">000</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">New Investor</p>
              <p class="mb-0 card-number">000</p>
            </div>
          </div>
        </div>
      </div>
      <!-- User Table -->
      <div class="table-wrapper">
        <p class="px-3">List Users</p>
        <div class="table-responsive custom-table-responsive" id="table-id">
          <table class="table custom-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Investor ID</th>
                <th>Email</th>
                <th>Document Title</th>
                <th>Validity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="output">
              <tr>
                <td>Des</td>
                <td>LA-0234</td>
                <td>mail@gmail.com</td>
                <td>Title</td>
                <td>1/01/24 to 1/02/24</td>
                <td>
                  <div class="custom-table-action">
                    <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"></i>
                    <i class="fa-solid fa-trash custom-table-icon text-danger" data-bs-toggle="modal"
                      data-bs-target="#deleteInvestmentPlan"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Des</td>
                <td>LA-0234</td>
                <td>mail@gmail.com</td>
                <td>Title</td>
                <td>1/01/24 to 1/02/24</td>
                <td>
                  <div class="custom-table-action">
                    <i class="fa-solid fa-pen custom-table-icon" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"></i>
                    <i class="fa-solid fa-trash custom-table-icon text-danger" data-bs-toggle="modal"
                      data-bs-target="#deleteInvestmentPlan"></i>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>