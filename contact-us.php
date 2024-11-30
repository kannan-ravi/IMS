<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./assets/styles/global.css" />
  <link rel="stylesheet" href="./assets/styles/header.css" />
  <link rel="stylesheet" href="./assets/styles/sidebar.css" />
  <link rel="stylesheet" href="./assets/styles/contactUs.css" />
</head>

<body>
  <!-- Sidebar -->
  <?php include './sidebar.php'; ?>

  <!-- Page Content -->
  <div class="main-container" id="page-content-wrapper">
    <?php include './header.php'; ?>

    <!-- Main Content - Contact Us -->
    <h4 class="text-contactUs">Contact</h4>
    <div class="mainContent-contactUs">
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card text-center p-3">
            <p class="info-item"><b>Email</b></p>
            <p class="data-value">vignesh@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card text-center p-3">
            <p class="info-item"><b>Phone</b></p>
            <p class="data-value">9791413276</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>