<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS Add Best Plan</title>

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

      <h1 class="heading fw-bold">Add Best Plan</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="bg-white px-3 py-4 rounded w-100">
          <div class="row">
            <div class="col-sm-12"> <input type="text" class="form-control" placeholder="Enter Plan"
                aria-label="Enter Plan" /></div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Enter Payment Method"
                aria-label="Enter Payment Method" /></div>
            <div class="col-sm-6 mt-3"> <input type="text" class="form-control" placeholder="Enter Year"
                aria-label="Enter Year" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Enter Amt"
                aria-label="Enter Amt" /></div>
            <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Interest"
                aria-label="Interest" /></div>
          </div>
          <div class="row">
            <div class="col-sm-6 mt-3"><input type="password" class="form-control" placeholder="Get Amt"
                aria-label="Get Amt" /></div>
            <div class="col-sm-6 mt-3">
              <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-2">
                <label class="text-nowrap">Get Details:</label>
                <input type="file" class="form-control" placeholder="Get Details" aria-label="Get Details" />
              </div>
            </div>
          </div>
          <div class="d-flex flex-column flex-md-row justify-content-md-end mt-4 px-2 mx-0 gap-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change
              Password</button>
            <a href="./best-investment-plan.php" class="btn text-decoration-none">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>