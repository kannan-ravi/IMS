<?php
include('db_connect.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMS User Investor List</title>

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
            <li class="nav-item"><a href="./investor-list.php" class="nav-link">Create Investor</a></li>
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
            <li class="nav-item"><a href="./investor-list.php" class="nav-link">Create Investor</a></li>
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

      <h1 class="heading fw-bold">Investor List</h1>
      <div class="d-flex gap-4 flex-column flex-md-row mt-4">
        <div class="d-flex align-items-center gap-3 w-100">
          <div class="search-container position-relative d-flex align-items-center border w-100">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" placeholder="Search" class="search-input rounded-1 outline-0 w-100" />
          </div>
          <i class="fa-solid fa-filter filter-icon d-md-none"></i>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-md-4">
          <a href="./add-investor.php" class="search-link">Add Investor +</a>
          <i class="fa-solid fa-filter filter-icon d-none d-md-block"></i>
        </div>
      </div>


      <div class="table-wrapper">
        <div class="table-responsive custom-table-responsive" id="table-id">
          <table class="table custom-table">
            <thead>
              <tr>
                <th>Created Date</th>
                <th>Name</th>
                <th>Investor ID</th>
                <th>Email</th>
                <th>Mobile Number</th>
				<th>Inv. Amount</th>
				<th>ROI</th>
				<th>Nominee Name</th>
				<th>Action</th>
              </tr>
            </thead>
            <tbody id="output">
			 <?php
            $query = "SELECT * FROM users ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                ?>
              <tr>
                <td><?php echo date("d/m/y", strtotime($row['updated_on'])); ?></td>
                <td><?php echo $row['f_name']; ?></td>
                <td><?php echo $row['investor_id']; ?></td>
                <td><?php echo $row['email']; ?></td>
				 <td><?php echo $row['phone_number']; ?></td>
				 <td><?php echo $row['total_invest']; ?></td>
                <td><?php echo $row['roi']; ?></td>
				<td><?php echo $row['nominee_name']; ?></td>
                <td>
  <div class="custom-table-action">
  <i class="fas fa-edit custom-table-icon" data-bs-toggle="modal" 
   data-bs-target="#staticBackdrop" data-id="<?php echo $row['id']; ?>"></i>
    <i class="fa fa-trash custom-table-icon" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal"
      data-bs-target="#delete"></i>
  </div>
</td>
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

    <!-- Modal -->
	  <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="deleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content px-3 py-4">

          <div class="modal-body">
            <h5 class="mb-0 text-center fw-semibold">Are you sure want to Delete?</h5>
          </div>
          <div class="d-flex justify-content-center gap-5 mt-2">
            <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn custom-modal-button agree fw-semibold" data-bs-target="#approvedTodelete"
              data-bs-toggle="modal"><a href="investor-delete.php?id=<?php echo $row['id']; ?>">Yes</a></button>
          </div>
        </div>
      </div>
    </div>
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
  <form id="editForm" action="update-user.php" method="POST">
            <input type="hidden" name="id" id="editId"/>
            <div class="row">
              <div class="col-sm-6 mt-3">
                <input type="text" class="form-control" placeholder="Name" name="f_name" id="editFName" aria-label="Name" />
              </div>
              <div class="col-sm-6 mt-3">
                <input type="text" class="form-control" name="investor_id" id="editInvestorId" placeholder="Investor ID" aria-label="Investor ID" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-3">
                <input type="email" name="email" class="form-control" id="editEmail" placeholder="Email" aria-label="Email" />
              </div>
              <div class="col-sm-6 mt-3">
                <input type="text" class="form-control" name="phone_number" id="editPhoneNumber" placeholder="Mobile No" aria-label="Mobile no" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-3">
                <input type="text" name="total_invest" class="form-control" id="editTotalInvest" placeholder="Total Investment" aria-label="Total Investment" />
              </div>
              <div class="col-sm-6 mt-3">
                <input type="text" class="form-control" name="roi" id="editRoi" placeholder="ROI" aria-label="ROI" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 mt-3">
                <input type="text" name="nominee_name" class="form-control" id="editNomineeName" placeholder="Nominee Name" aria-label="Nominee Name" />
              </div>
            </div>
            <div class="d-flex justify-content-end gap-5 mt-4 pt-2">
              <button type="button" class="btn custom-modal-button disagree" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn custom-modal-button agree fw-semibold">Change</button>
            </div>
          </form>
			
          </div>
		  

        </div>
      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script>
 document.getElementById('editForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Prevent default form submission

  const formData = new FormData(this); // Collect form data

  fetch('update-user.php', {
    method: 'POST',
    body: formData,
  })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
        return;
      }
      alert('User updated successfully');
      location.reload(); // Reload the page to reflect updates
    })
    .catch(error => {
      console.error('Error updating user:', error);
      alert('Error updating user');
    });
});

 </script>
 
 <script>
 function populateEditForm(userId) {
  fetch(`get_user.php?id=${userId}`) // Ensure the URL is correct relative to your PHP file location
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        console.error('Error:', data.error);
        alert('Error fetching user data');
        return;
      }
      // Populate modal fields
      document.getElementById('editId').value = data.id;
      document.getElementById('editFName').value = data.f_name;
      document.getElementById('editInvestorId').value = data.investor_id;
      document.getElementById('editEmail').value = data.email;
      document.getElementById('editPhoneNumber').value = data.phone_number;
      document.getElementById('editTotalInvest').value = data.total_invest;
      document.getElementById('editRoi').value = data.roi;
      document.getElementById('editNomineeName').value = data.nominee_name;
    })
    .catch(error => {
      console.error('Error fetching user data:', error);
      alert('Error loading user data');
    });
}

// Attach click event to the edit icons
document.querySelectorAll('.custom-table-icon.fa-edit').forEach(editIcon => {
  editIcon.addEventListener('click', () => {
    const userId = editIcon.dataset.id;
    populateEditForm(userId);
  });
});


 </script>

</body>

</html>
