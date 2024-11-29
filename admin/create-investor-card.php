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
  <?php include './sidebar.php' ?>

  <!-- Main Content -->
  <div class="main-container flex grow-1">
    <!-- Navbar -->
    <?php include './header.php' ?>

    <!-- Dashboard Content -->
    <div class="container mt-4">
      <p class="d-lg-none">Hello, Des</p>

      <h1 class="heading fw-bold">Create Card</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="bg-white px-3 py-4 rounded w-100">
          <div class="row">
            <div class="col-sm-12"> <input type="text" class="form-control" placeholder="Investor ID"
                aria-label="Investor ID" /></div>
          </div>
          <div class="row">
            <div class="col-sm-12 mt-3"><input type="text" class="form-control" placeholder="Full Name"
                aria-label="Full Name" /></div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Mobile No"
                aria-label="Mobile No" /></div>
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Email Address"
                aria-label="Email Address" /></div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3">
              <select class="form-select" aria-label="Reason for Re-Issuance">
                <option selected>Reason for Re-Issuance</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-sm-6 mt-3">
              <select class="form-select" aria-label="Preferred Card Type">
                <option selected>Preferred Card Type</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="d-flex flex-column flex-md-row justify-content-md-end mt-4 px-2 mx-0 gap-3">
            <button class="btn btn-primary">Generate Card</button>
            <a href="./re-issuance-investor-card.php" class="btn text-decoration-none">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>