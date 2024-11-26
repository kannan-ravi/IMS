<?php
include('db_connect.php'); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./admin/css/dashboard.css">
	
	  <!-- ---- DATATABLE ---- -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<style>
	 .search-container {
            display: flex;
            align-items: center;
           
           
            padding: 5px;
        }
        .search-container input {
            border: none;
            outline: none;
            padding: 10px;
            flex: 1;
            border-radius: 5px;
        }
        .search-container input::placeholder {
            color: #aaa;
        }
        .search-container button {
            background-color: #4285F4;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 5px;
        }
        .search-container button:hover {
            background-color: #357ae8;
        }
        .search-container .filter-icon {
            margin-left: 10px;
            color: #666;
            cursor: pointer;
            font-size: 16px;
        }
		.pagination-container {
    text-align: center;
    margin-top: 20px;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
}

.pagination li {
    margin: 0 5px;
    cursor: pointer;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    color: #007bff;
}

.pagination li.active {
    background-color: #007bff;
    color: white;
}

.pagination li.disabled {
    cursor: not-allowed;
    color: #ccc;
}

.pagination li a {
    text-decoration: none;
    color: inherit;
}

	</style>
</head>

<body>
    <div class="d-flex">
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
                            <li class="nav-item"><a href="#" class="nav-link">Create Investor</a></li>
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
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#mobileUsersMenu"
                            role="button">Users</a>
                        <ul class="collapse ps-3" id="mobileUsersMenu">
                            <li class="nav-item"><a href="./bestInvPlan.html" class="nav-link">Create Investor</a></li>
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
        <div class="content flex-grow-1">
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
                <h2 class="mb-4">Investor List</h2>
                
                <!-- User Table -->
                 <div class="col-md-12">
							<Span class="text-primary "><b>Users</b></span>
                                 <div class="search-container">
        <input type="text" placeholder="Search">
        <button ><a href="./addinvestor.php" class="text-decoration-none text-light">Add Investor +</a></button>
        <div class="filter-icon">&#9881;</div>
    </div>
                            </div>
  <div class="table-responsive" id="table-id">
    <table class="table" id="investorTable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Investor ID</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Created Date</th>
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
                    <td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['total_invest']; ?></td>
					<td><?php echo $row['roi']; ?></td>
					<td><?php echo $row['nominee_name']; ?></td>
                    <td>
                        <a href="investlist_edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                        <a href="investlist_delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Pagination Controls -->
<div class="pagination-container">
    <ul class="pagination" id="pagination">
        <!-- Pagination buttons will be added here by JavaScript -->
    </ul>
</div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const rowsPerPage = 5; // Number of rows per page
    const table = document.getElementById("investorTable");
    const pagination = document.getElementById("pagination");
    const rows = table.querySelectorAll("tbody tr");

    let currentPage = 1;
    const totalPages = Math.ceil(rows.length / rowsPerPage);

    // Function to display rows for the current page
    function displayRows() {
        rows.forEach((row, index) => {
            if (
                index >= (currentPage - 1) * rowsPerPage &&
                index < currentPage * rowsPerPage
            ) {
                row.style.display = ""; // Show row
            } else {
                row.style.display = "none"; // Hide row
            }
        });
    }

    // Function to set up pagination buttons
    function setupPagination() {
        pagination.innerHTML = ""; // Clear existing buttons

        // Previous Button
        const prevButton = document.createElement("li");
        prevButton.innerHTML = `<a href="#">&laquo;</a>`;
        prevButton.classList.add("page-item");
        if (currentPage === 1) prevButton.classList.add("disabled");
        prevButton.addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        });
        pagination.appendChild(prevButton);

        // Page Number Buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement("li");
            pageButton.innerHTML = `<a href="#">${i}</a>`;
            pageButton.classList.add("page-item");
            if (i === currentPage) pageButton.classList.add("active");
            pageButton.addEventListener("click", () => {
                currentPage = i;
                updatePagination();
            });
            pagination.appendChild(pageButton);
        }

        // Next Button
        const nextButton = document.createElement("li");
        nextButton.innerHTML = `<a href="#">&raquo;</a>`;
        nextButton.classList.add("page-item");
        if (currentPage === totalPages) nextButton.classList.add("disabled");
        nextButton.addEventListener("click", () => {
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        });
        pagination.appendChild(nextButton);
    }

    // Update table and pagination
    function updatePagination() {
        displayRows();
        setupPagination();
    }

    // Initialize
    updatePagination();
});

</script>