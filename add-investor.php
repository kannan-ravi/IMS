<?php 
include('./db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/sidebar.css" />
    <link rel="stylesheet" href="./css/dashboard.css">
	
	<style>
	
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .form-row input {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .form-row input:focus {
            border-color: #4285f4;
        }

        .button-container {
            text-align: left;
        }

 .button-container1{
            text-align: right;
        }
        .btn {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #357ae8;
        }

        .dummy-form {
            display: none;
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f1f3f5;
        }
    .container{
	background-color:white;
	}
	</style>
</head>

<body>
<!-- Success Popup Modal -->
<div id="successModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
    <div style="position: relative; margin: 15% auto; padding: 20px; background: #fff; width: 300px; border-radius: 8px; text-align: center;">
        <div style="font-size: 50px; color: green;">✔</div>
        <h3>Well Done!</h3>
        <p>The investor has been successfully added to the system.</p>
        <button onclick="location.href='investor-list.php'" style="padding: 10px 20px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
            Back To Dashboard
        </button>
    </div>
</div>

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
  <div class="container p-4">
        <h2 class="mb-4">Investor List</h2>

  <!-- Primary Form Fields -->
<form action="add_user.php" method="POST">
    <div class="form-row">
        <input type="text" name="investor_id" placeholder="Investor ID" required>
    </div>
    <div class="form-row">
        <input type="text" name="f_name" placeholder="First name" required>
        <input type="text" name="l_name" placeholder="Last name" required>
    </div>
    <div class="form-row">
        <input type="number" placeholder="Age" name="age" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="tel" name="phone_number" placeholder="Mobile Number" required>
    </div>
    <div class="form-row">
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="form-row">
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    </div>

    <!-- Button to show nominee form -->
    <div class="button-container">
        <button type="button" class="btn" id="showDummyForm">Update Nominee +</button>
    </div>

    <!-- Dummy Form (Initially Hidden) -->
    <div id="nomineeForm" class="dummy-form">
        <h3>Nominee Details</h3>
        <div class="form-row">
            <input type="text" placeholder="Nominee Name" name="nominee_name">
        </div>
        <div class="form-row">
            <input type="text" placeholder="Percentage of Share" name="per_share">
            <input type="text" placeholder="Relationship" name="relationship">
        </div>
        <div class="form-row">
            <input type="email" placeholder="Nominee Email" name="nominee_email">
            <input type="tel" name="nominee_number" placeholder="Nominee Number">
            <input type="text" placeholder="Country" name="nominee_country">
        </div>
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Total Investment Amount</th>
                <th>ROI</th>
                <th>Tenure</th>
                <th>Time Period</th>
                <th>Created Date</th>
            </tr>
        </thead>
        <tbody id="investmentTableBody">
            <!-- Rows will be added dynamically here -->
        </tbody>
    </table>
    <p id="addNewButton" style="cursor: pointer;">+ Add New</p>

    <!-- Investment Fields (Initially Hidden) -->
    <div class="investment-fields" id="investmentFields">
        <div class="form-row">
            <input type="text" name="total_invest" placeholder="Total Inv Amount" required>
        </div>
        <div class="form-row">
            <input type="text" name="roi" placeholder="ROI" required>
            <input type="text" name="time_period" placeholder="Time Period" required>
        </div>
        <div class="form-row">
            <input type="text" placeholder="Tenure" name="tenure" required>
        </div>
        <button type="button" id="submitInvestment" class="btn">Save</button>
    </div>

    <!-- Submission and Cancel Buttons -->
    <div class="button-container1 mt-5">
        <button class="btn application-submit" type="submit">Add Investor</button>
        <button class="btn" type="button" style="background-color: #ddd; color: #555;">
            <a href="./invsetor-list.php" class="text-decoration-none">Cancel</a>
        </button>
    </div>
</form>

<script>
document.getElementById('addNewButton').addEventListener('click', function() {
    const investmentFields = document.getElementById('investmentFields');
    if (investmentFields.style.display === 'none' || investmentFields.style.display === '') {
        investmentFields.style.display = 'block'; // Show the form
    } else {
        investmentFields.style.display = 'none'; // Hide the form
    }
});

document.getElementById('submitInvestment').addEventListener('click', function() {
    // Get the form data
    const totalInvest = document.querySelector('input[name="total_invest"]').value;
    const roi = document.querySelector('input[name="roi"]').value;
    const timePeriod = document.querySelector('input[name="time_period"]').value;
    const tenure = document.querySelector('input[name="tenure"]').value;
    const createdDate = new Date().toLocaleDateString();

    // Insert a new row into the table
    const tableBody = document.getElementById('investmentTableBody');
    const newRow = document.createElement('tr');

    newRow.innerHTML = `
        <td>${totalInvest}</td>
        <td>${roi}</td>
        <td>${tenure}</td>
        <td>${timePeriod}</td>
        <td>${createdDate}</td>
    `;
    tableBody.appendChild(newRow);

    // Reset the form fields and hide the form
    document.getElementById('investmentFields').reset();
    document.getElementById('investmentFields').style.display = 'none';
});
</script>


    </div>

    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
 <script>
  document.getElementById('showDummyForm').addEventListener('click', function() {
    const nomineeForm = document.getElementById('nomineeForm');
    if (nomineeForm.style.display === 'none' || nomineeForm.style.display === '') {
        nomineeForm.style.display = 'block'; // Show the form
    } else {
        nomineeForm.style.display = 'none'; // Hide the form
    }
});

</script>
<script>

</script>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission

    const formData = new FormData(this);

    fetch('add_user.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('successfully')) {
            document.getElementById('successModal').style.display = 'block';
        } else {
            alert('Error adding user: ' + data);
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>