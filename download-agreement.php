<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - Download Agreement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./assets/styles/global.css" />
  <link rel="stylesheet" href="./assets/styles/header.css" />
  <link rel="stylesheet" href="./assets/styles/sidebar.css" />
  <link rel="stylesheet" href="./assets/styles/downloadAgreement.css" />
</head>

<body>
  <!-- Sidebar for Large Screens -->
  <?php include './sidebar.php'; ?>

  <!-- Page Content -->
  <div class="main-container" id="page-content-wrapper">
    <?php include './header.php'; ?>

    <!-- Main Content - Download Agreement -->
    <h4 class="text-agreements">Agreements</h4>
    <div class="mainContent-downloadAgreement">
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card text-left p-3">
            <div class="card-content">
              <p class="info-item"><b>Agreement Title</b></p>
              <p class="data-value">
                <i>Valid Till: 05-06-2024 to 10-06-2024</i>
              </p>
            </div>
            <button class="btn btn-download">
              <i class="fas fa-download"></i>
            </button>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card text-left p-3">
            <div class="card-content">
              <p class="info-item"><b>Agreement Title</b></p>
              <p class="data-value">
                <i>Valid Till: 05-06-2024 to 10-06-2024</i>
              </p>
            </div>
            <button class="btn btn-download">
              <i class="fas fa-download"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebar.js"></script>
</body>

</html>