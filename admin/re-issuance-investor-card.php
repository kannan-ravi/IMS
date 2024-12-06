<?php
include('db_connect.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS Re-Issuance Investor Card</title>

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

      <h1 class="heading fw-bold">Re-Issuance Investor Card</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="d-flex align-items-center gap-3 w-100">
          <div class="search-container position-relative d-flex align-items-center border w-100">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" placeholder="Search" class="search-input rounded-1 outline-0 w-100" />
          </div>
          <i class="fa-solid fa-filter filter-icon d-md-none"></i>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-md-4">
          <a href="./create-investor-card.php" class="search-link">Create Card +</a>
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
                <th>Mobile No</th>
                <th>Email</th>
                <th>Reason</th>
                <th>Card</th>
              </tr>
            </thead>
            <tbody id="output">
			 <?php
            $query = "SELECT * FROM apply_invcard ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                ?>
              <tr>
                <td><?php echo date("d/m/y", strtotime($row['updated_on'])); ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['investor_id']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
				      <td><?php echo $row['reasons']; ?></td>
                <td><?php echo $row['card_type']; ?></td>
              </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div>
  </div>
       <div class="mt-4 d-md-flex align-items-md-center justify-content-md-center gap-md-4 gap-lg-5">
  <div class="d-flex align-items-center justify-content-between gap-md-3 gap-lg-4">
    <p class="mb-0">Items per page:</p>
    <select class="form-select table-form-select" id="maxRows" aria-label="Items per page">
      <option value="5" selected>5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
    </select>
  </div>

  <div class="d-flex align-items-center justify-content-between mt-3 mt-md-0 gap-md-3 gap-lg-4">
    <p class="mb-0 pagination-info">1-5 of 10</p>
    <div class="d-flex">
      <button class="btn custom-table-prev" disabled>
        <i class="fa-solid fa-arrow-left"></i>
      </button>
      <button class="btn custom-table-next">
        <i class="fa-solid fa-arrow-right"></i>
      </button>
    </div>
  </div>
</div>

    </div>

    <!-- Delete Modal -->
   

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/sidebar.js"></script>
</body>

</html>
<script>
  document.addEventListener('DOMContentLoaded', () => {
  const table = document.querySelector('.custom-table');
  const maxRowsDropdown = document.getElementById('maxRows');
  const prevButton = document.querySelector('.custom-table-prev');
  const nextButton = document.querySelector('.custom-table-next');
  const paginationInfo = document.querySelector('.pagination-info');

  let currentPage = 1;
  let rowsPerPage = parseInt(maxRowsDropdown.value);
  const rows = table.querySelectorAll('tbody tr');
  const totalRows = rows.length;

  function updateTable() {
    const startRow = (currentPage - 1) * rowsPerPage;
    const endRow = currentPage * rowsPerPage;

    rows.forEach((row, index) => {
      if (index >= startRow && index < endRow) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });

    paginationInfo.textContent = `${startRow + 1}-${Math.min(endRow, totalRows)} of ${totalRows}`;
    prevButton.disabled = currentPage === 1;
    nextButton.disabled = currentPage * rowsPerPage >= totalRows;
  }

  maxRowsDropdown.addEventListener('change', () => {
    rowsPerPage = parseInt(maxRowsDropdown.value);
    currentPage = 1; // Reset to first page
    updateTable();
  });

  prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      updateTable();
    }
  });

  nextButton.addEventListener('click', () => {
    if (currentPage * rowsPerPage < totalRows) {
      currentPage++;
      updateTable();
    }
  });

  // Initialize table on page load
  updateTable();
});

  </script>