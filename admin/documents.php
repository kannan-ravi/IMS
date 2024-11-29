<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS Documents</title>

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
  <?php include './sidebar.php' ?>

  <!-- Main Content -->
  <div class="main-container flex grow-1">
    <!-- Navbar -->
    <?php include './header.php' ?>

    <!-- Dashboard Content -->
    <div class="container mt-4">
      <p class="d-lg-none">Hello, Des</p>

      <h1 class="heading fw-bold">Documents</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="d-flex align-items-center gap-3 w-100">
          <div class="search-container position-relative d-flex align-items-center border w-100">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" placeholder="Search" class="search-input rounded-1 outline-0 w-100" />
          </div>
          <i class="fa-solid fa-filter filter-icon d-md-none"></i>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-md-4">
          <a href="./add-documents.php" class="search-link">Add Documents +</a>
          <i class="fa-solid fa-filter filter-icon d-none d-md-block"></i>
        </div>
      </div>


      <div class="table-wrapper">
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

    <!-- Edit Modal -->
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
    <!-- Edit Modal After Approval -->
    <div class="modal fade" id="approvedToEdit" data-bs-backdrop="static" aria-hidden="true"
      aria-labelledby="approvedToEdit" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered custom-modal-dialog">
        <div class="modal-content px-3 py-4">

          <div class="modal-body">
            <h5 class="mb-0 text-center fw-semibold">Edit Form</h5>.


            <div class="row">
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Plan Title"
                  aria-label="Plan Title" />
              </div>
              <div class="col-sm-6 mt-3"> <input type="text" class="form-control" placeholder="Payment Method"
                  aria-label="Payment Method" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="You will give"
                  aria-label="You will give" /></div>
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Interest"
                  aria-label="Interest" /></div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Year" aria-label="Year" />
              </div>
              <div class="col-sm-6 mt-3"><input type="text" class="form-control" placeholder="Get Amt"
                  aria-label="Get Amt" /></div>
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

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteInvestmentPlan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="deleteInvestmentPlan" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3 py-4">

          <div class="modal-body">
            <h5 class="mb-0 text-center fw-semibold">Are you sure want to Delete?</h5>
          </div>
          <div class="d-flex justify-content-center gap-5 mt-2">
            <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn custom-modal-button agree fw-semibold" data-bs-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>