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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/sidebar.css" />
    <link rel="stylesheet" href="./css/ui/table.css" />
    <link rel="stylesheet" href="./css/dashboard.css">

    <style>
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-direction: column;
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

        .button-container1 {
            text-align: right;
        }

        .blue-button {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .blue-button.removed {
            display: none;
        }

        .blue-button:hover {
            background-color: #357ae8;
            color: white;
        }

        .light-button {
            display: none;
        }

        .light-button.active {
            display: block;
        }

        .dummy-form {
            display: none;
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .dummy-form.active {
            display: block;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f1f3f5;
        }

        .container {
            background-color: white;
        }

        @media (min-width: 992px) {
            .form-row {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
    <!-- Success Popup Modal -->
    <div id="successModal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <div
            style="position: relative; margin: 15% auto; padding: 20px; background: #fff; width: 300px; border-radius: 8px; text-align: center;">
            <div style="font-size: 50px; color: green;">✔</div>
            <h3>Well Done!</h3>
            <p>The investor has been successfully added to the system.</p>
            <button onclick="location.href='./investor-list.php'"
                style="padding: 10px 20px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                Back To Dashboard
            </button>
        </div>
    </div>


    <!-- Sidebar -->
    <?php include './sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-container flex-grow-1">
        <!-- Navbar -->
        <?php include './header.php' ?>


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
                <div class="d-flex align-items-center justify-content-between">
                    <button type="button" class="blue-button" id="nomineeButton">Update Nominee +</button>
                    <button type="button" class="btn light-button" id="cancelnomineeButton"><i
                            class="fa-solid fa-ban ms-1"></i> Cancel</button>
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
                <div class="table-responsive custom-table-responsive">
                    <table class="table custom-table">
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
                </div>
                <p id="addNewButton" class="mt-4" style="cursor: pointer;">+ Add New</p>

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
                        <select class="form-select text-secondary" aria-label="Default select example">
                            <option selected>Tenure</option>
                            <option value="1">Monthly</option>
                            <option value="2">Yearly</option>
                        </select>
                    </div>
                    <button type="button" id="submitInvestment" class="blue-button">Save</button>
                </div>

                <!-- Submission and Cancel Buttons -->
                <div class="button-container1 mt-5">
                    <button class="blue-button application-submit" type="submit">Add Investor</button>
                    <button class="blue-button" type="button" style="background-color: #ddd; color: #555;">
                        <a href="./investor-list.php" class="text-decoration-none">Cancel</a>
                    </button>
                </div>
            </form>

            <script>
                document.getElementById('addNewButton').addEventListener('click', function () {
                    const investmentFields = document.getElementById('investmentFields');
                    if (investmentFields.style.display === 'none' || investmentFields.style.display === '') {
                        investmentFields.style.display = 'block'; // Show the form
                    } else {
                        investmentFields.style.display = 'none'; // Hide the form
                    }
                });

                document.getElementById('submitInvestment').addEventListener('click', function () {
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/sidebar.js"></script>
</body>

</html>
<script>
    document.querySelector("#nomineeButton").addEventListener('click', () => {
        document.querySelector("#nomineeForm").classList.add("active");
        document.querySelector("#nomineeButton").classList.add("removed")
        document.querySelector(".light-button").classList.add("active")
    })

    document.querySelector("#cancelnomineeButton").addEventListener("click", () => {
        document.querySelector("#nomineeForm").classList.remove("active");
        document.querySelector("#nomineeButton").classList.remove("removed")
        document.querySelector(".light-button").classList.remove("active")
    })

</script>
<script>

</script>

<script>
    document.querySelector('form').addEventListener('submit', function (e) {
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