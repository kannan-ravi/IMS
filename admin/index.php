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
  <link rel="stylesheet" href="./css/ui/modal.css" />
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

      <h1 class="heading fw-bold">Dashboard</h1>
      <div class="row my-4 row-gap-4">
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">Total Invested Amount</p>
              <p class="mb-0 card-number">0000</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-body dashboard-card">
              <p class="mb-0 card-desc">Total Investor</p>
              <p class="mb-0 card-number">000</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
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
                <th></th>
                <th>Closure Date</th>
                <th>Comments</th>
              </tr>
            </thead>
            <tbody id="output">
              <tr>
                <td class="d-flex flex-column align-items-start">
                  <span class="text-secondary">Name</span>
                  <span>mail@gmail.com</span>
                </td>
                <td>
                  <span class="bg-primary text-white px-3 py-1 rounded">1 day left</span>
                </td>
                <td>26 Oct, 2024</td>
                <td data-bs-toggle="modal" data-bs-target="#editComment">Lorem Ipsum</td>
              </tr>
              <tr>
                <td class="d-flex flex-column align-items-start">
                  <span class="text-secondary">Name</span>
                  <span>mail@gmail.com</span>
                </td>
                <td>
                  <span class="bg-primary text-white px-3 py-1 rounded">1 day left</span>
                </td>
                <td>26 Oct, 2024</td>
                <td data-bs-toggle="modal" data-bs-target="#editComment">Lorem Ipsum</td>
              </tr>
              <tr>
                <td class="d-flex flex-column align-items-start">
                  <span class="text-secondary">Name</span>
                  <span>mail@gmail.com</span>
                </td>
                <td>
                  <span class="bg-secondary text-white px-3 py-1 rounded">Expired</span>
                </td>
                <td>26 Oct, 2024</td>
                <td data-bs-toggle="modal" data-bs-target="#editComment">Lorem Ipsum</td>
              </tr>
              <tr>
                <td class="d-flex flex-column align-items-start">
                  <span class="text-secondary">Name</span>
                  <span>mail@gmail.com</span>
                </td>
                <td>
                  <span class="bg-secondary text-white px-3 py-1 rounded">Expired</span>
                </td>
                <td>26 Oct, 2024</td>
                <td data-bs-toggle="modal" data-bs-target="#editComment">Lorem Ipsum</td>
              </tr>
              <tr>
                <td class="d-flex flex-column align-items-start">
                  <span class="text-secondary">Name</span>
                  <span>mail@gmail.com</span>
                </td>
                <td>
                  <span class="bg-primary text-white px-3 py-1 rounded">1 day left</span>
                </td>
                <td>26 Oct, 2024</td>
                <td data-bs-toggle="modal" data-bs-target="#editComment">Lorem Ipsum</td>
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

  <!-- Edit Comments Modal -->
  <div class="modal fade" id="editComment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editCommentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content px-3 py-4">

        <div class="modal-body">
          <h5 class="mb-0 text-center fw-semibold">Comment</h5>
          <input type="text" class="form-control mt-4" placeholder="Enter your comment" aria-label="Comment" />
        </div>
        <div class="d-flex justify-content-center gap-5 mt-2">
          <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn custom-modal-button agree fw-semibold" data-bs-target="#approvedToEdit"
            data-bs-toggle="modal">Yes</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>