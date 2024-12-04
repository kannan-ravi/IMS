<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - My Investment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./assets/styles/global.css" />
  <link rel="stylesheet" href="./assets/styles/header.css" />
  <link rel="stylesheet" href="./assets/styles/sidebar.css" />
  <link rel="stylesheet" href="./assets/styles/myInvestment.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
</head>

<body>
  <!-- Sidebar for Large Screens -->
  <?php include './sidebar.php'; ?>

  <!-- Page Content -->
  <div class="main-container" id="page-content-wrapper">
    <?php include './header.php'; ?>

    <div class="mainContent-myInvestment">
      <div class="container my-5">
        <!-- Investment Summary Section -->
        <div class="row text-center mb-5">
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-4">
              <p><b>Total Investment Amount</b></p>
              <h2 class="text-success">25,00,000</h2>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-4">
              <p><b>Return Amount</b></p>
              <h2 class="text-success">25,00,000</h2>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-4">
              <p><b>Duration</b></p>
              <h2 class="text-success">3 years</h2>
            </div>
          </div>
        </div>

        <!-- My Investment Section -->
        <h3 class="mb-4">My Investment</h3>
        <div class="row gy-4">
          <!-- Monthly Investment Card -->
          <div class="col-lg-6">
            <div class="card shadow p-4">
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Monthly</span>
                <span class="text-muted">07-11-2024</span>
              </div>
              <h2 class="text-success my-3">000.00 /mon.</h2>
              <p class="text-success fw-bold">ROI + 12%</p>
              <div class="d-flex justify-content-between">
                <span class="fs-5"><b>000</b></span>
                <span class="fs-5"><b>24 months</b></span>
              </div>
              <div class="d-flex justify-content-between text-muted mt-2">
                <span class="text-muted">Invested Amount</span>
                <span class="text-muted">Tenure</span>
              </div>
              <p class="mt-3">2 years and 4 months remaining for maturity</p>
            </div>
          </div>

          <!-- Yearly Investment Card -->
          <div class="col-lg-6">
            <div class="card shadow p-4">
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Yearly</span>
                <span class="text-muted">07-11-2024</span>
              </div>
              <h2 class="text-success my-3">000.00 /mon.</h2>
              <p class="text-success fw-bold">ROI + 12%</p>
              <div class="d-flex justify-content-between">
                <span class="fs-5"><b>000</b></span>
                <span class="fs-5"><b>24 months</b></span>
              </div>
              <div class="d-flex justify-content-between text-muted mt-2">
                <span class="text-muted">Invested Amount</span>
                <span class="text-muted">Tenure</span>
              </div>
              <p class="mt-3">2 years and 4 months remaining for maturity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebar.js"></script>
</body>

</html>