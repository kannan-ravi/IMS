<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Get user data from session
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styles/sideAndNavbar.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>

<body>

    <!-- Sidebar for Large Screens -->
    <div class="sidebar d-none d-lg-block text-white">
        <div class="p-3">
            <img src="../assests/toppiVappaProfilePic.png" height="60px" width="250px" />
        </div>
        <hr class="hr-sidebar"/>
        <ul class="list-unstyled p-0 m-0">
            <li><a href="../components/dashboard.html" class="text-white text-decoration-none d-block py-2 px-3 active" ><i
                        class="fas fa-th-large me-2"></i> Dashboard</a></li>
            <li><a href="../components/myInvestment.html" class="text-white text-decoration-none d-block py-2 px-3"><i
                        class="fas fa-chart-line me-2"></i> My Investment</a></li>
            <li><a href="../components/downloadAgreement.html"
                    class="text-white text-decoration-none d-block py-2 px-3"><i
                        class="fas fa-file-download me-2"></i> Download Agreement</a></li>
            <li><a href="../components/applyForInvCard.html"
                    class="text-white text-decoration-none d-block py-2 px-3"><i class="fas fa-credit-card me-2"></i>
                    Apply For Inv. Card</a></li>
            <li><a href="../components/investmentPlan.html" class="text-white text-decoration-none d-block py-2 px-3"><i
                        class="fas fa-coins me-2"></i> Investment Plan</a></li>
            <li><a href="../components/contactUs.html" class="text-white text-decoration-none d-block py-2 px-3"><i
                        class="fas fa-envelope me-2"></i> Contact Us</a></li>
        </ul>
    </div>

    <!-- Offcanvas Sidebar for Mobile View -->
    <div class="offcanvas offcanvas-start d-lg-none" data-bs-scroll="true" tabindex="-1" id="mobileSidebar"
        aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header">
            <img src="../assests/toppiVappaProfilePic.png" height="50px" width="200px"></img>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="hr-sidebar"/>
        <div class="offcanvas-body">
            <ul class="list-unstyled p-0">
                <li><a href="../components/dashboard.html"
                        class="text-white text-decoration-none d-block py-2 px-3 active"><i
                            class="fas fa-th-large me-2"></i> Dashboard</a></li>
                <li><a href="../components/myInvestment.html"
                        class="text-white text-decoration-none d-block py-2 px-3"><i class="fas fa-chart-line me-2"></i>
                        My Investment</a></li>
                <li><a href="../components/downloadAgreement.html"
                        class="text-white text-decoration-none d-block py-2 px-3"><i
                            class="fas fa-file-download me-2"></i> Download Agreement</a></li>
                <li><a href="../components/applyForInvCard.html"
                        class="text-white text-decoration-none d-block py-2 px-3"><i
                            class="fas fa-credit-card me-2"></i> Apply For Inv. Card</a></li>
                <li><a href="../components/investmentPlan.html"
                        class="text-white text-decoration-none d-block py-2 px-3"><i class="fas fa-coins me-2"></i>
                        Investment Plan</a></li>
                <li><a href="../components/contactUs.html" class="text-white text-decoration-none d-block py-2 px-3"><i
                            class="fas fa-envelope me-2"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content" id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-success p-3">
            <div class="container-fluid">
                <button class="btn btn-dark d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <h3 id="navbar-heading" class="text-white mb-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <a href="#"><img src="../assests/searchIcon.png" alt="search" class="rounded-circle"></a>
                    <a href="#"><img src="../assests/bellIcon.png" alt="bell" class="rounded-circle"></a>
                    <a href="#"><img src="../assests/dpPic.jpg" alt="Profile" class="rounded-circle"></a>
                </div>
            </div>
        </nav>

        <!-- Main Content - Dashboard -->
	
        <h3 class="text-welcome"><b>Welcome  <?php echo $user['username']; ?></b></h3><br />
            <div class="mainContent-dashboard">
                <div class="container mt-4">

                    <div class="profile-banner">
                        <img src="../assests/dpPic.jpg" alt="Profile Picture" class="profile-image">
                    </div>

                    <!-- Profile Info -->
                    <div class="profile-info mt-4 text-center text-md-left">
                        <h3><b><?php echo $user['f_name']; ?></b></h3>
                        <div class="d-flex flex-wrap align-items-left justify-content-around justify-content-md-start">
                            <div class="flex-item text-center text-md-left mr-4">
                                <p><i class="fas fa-birthday-cake text-success"></i> &nbsp;<b>Age: <?php echo $user['age']; ?></b></p>
                                <p></p>
                            </div>
                            <div class="flex-item text-center text-md-left mr-4">
                                <p><i class="fas fa-phone text-success"></i> &nbsp;<b>Contact: <?php echo $user['phone_number']; ?></b></p>
                                <p></p>
                            </div>
                            <div class="address text-center">
                                <p>
                                    &nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt text-success"></i> &nbsp;<b>Address: <?php echo $user['country']; ?></b>&nbsp;
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div><hr/></div>

                    <!-- Agreement and Rate of Returns -->
                    <div class="row mt-4">
					    <div class="col-md-4">
                            <div class="card text-center p-3">
                                <p class="info-item"><i class="fas fa-chart-line text-success"></i> &nbsp;Investment Amount
                                </p>
                                <p class="data-value"><?php echo $user['total_invest'];?>  years</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center p-3">
                                <p class="info-item"><i class="fas fa-file-alt text-success"></i> &nbsp;Agreement Period
                                </p>
                                <p class="data-value"><?php echo $user['time_period']; ?>  years</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center p-3">
                                <p class="info-item"><i class="fas fa-chart-line text-success"></i> &nbsp;Rate of
                                    Returns</p>
                                <p class="data-value"><?php echo $user['roi']; ?> %</p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <!-- Nominee and Privacy & Security -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5 class="info-item2"><i class="fas fa-user-friends"></i> &nbsp;Nominee</h5>
                            <div class="card p-3">
                                <p><i class="fas fa-user text-success"></i> &nbsp;<strong>Name:</strong>  <?php echo $user['nominee_name']; ?></p>
                                <p><i class="fas fa-birthday-cake text-success"></i> &nbsp;<strong>Age:</strong>  <?php echo $user['age']; ?></p>
                                <p><i class="fas fa-phone text-success"></i> &nbsp;<strong>Contact Details:</strong>  <?php echo $user['nominee_number']; ?></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="info-item2"><i class="fas fa-shield-alt"></i> &nbsp;Privacy & Security</h5>
                            <div class="card p-3 text-center">
                                <a href="./forgotPassword.html" class="btn btn-secondary mt-3">
                                    <i class="fas fa-lock"></i> &nbsp;Forgot password
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
			
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>
