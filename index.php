<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="./assets/styles/global.css" />
    <link rel="stylesheet" href="./assets/styles/header.css" />
    <link rel="stylesheet" href="./assets/styles/sidebar.css" />
    <link rel="stylesheet" href="./assets/styles/dashboard.css" />
</head>

<body>

    <?php include './sidebar.php'; ?>
    
    <main class="main-container">
        <?php include './header.php'; ?>
        
        <div class="container px-lg-4">
            <p class="mb-0 heading mt-4">Welcome Vignesh</p>

            <div class="row banner-container">
                <img src="./assets/img/bannerPic.jpg" alt="" class="banner-image rounded-5" />
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="" class="banner-profile" />
            </div>

            <div>
                <p class="mb-0">Vignesh S</p>
                <div class="row details-container row-gap-4">
                    <div class="col-6 col-md-3 d-flex gap-2 single-detail">
                        <i class="fa-solid fa-cake-candles"></i>
                        <div>
                            <p class="mb-0 fw-semibold">Age</p>
                            <p class="mb-0">24</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex gap-2 single-detail">
                        <i class="fa-solid fa-address-book"></i>
                        <div>
                            <p class="mb-0 fw-semibold">Mobile No</p>
                            <p class="mb-0">0987654321</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex gap-2 single-detail">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>

                            <p class="mb-0">Villamore Hospital, 12, Featherstone Street, Ward, London, NG25 5AY, United
                                Kingdom</p>
                        </div>
                    </div>
                </div>


                <div class="row my-5 row-gap-4">
                    <div class="col-12 col-md-4">
                        <div class="card custom-dash-card-container">
                            <div class="custom-dash-card">
                                <i class="fa-solid fa-chart-simple"></i>
                                <div class="d-flex flex-column custom-dash-text">
                                    <p class="mb-0">Investment Amount</p>
                                    <p class="mb-0 number">1,00,00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 d-md-flex justify-content-center">
                        <div class="card custom-dash-card-container">
                            <div class="custom-dash-card">
                                <i class="fa-solid fa-file"></i>
                                <div class="d-flex flex-column custom-dash-text">
                                    <p class="mb-0">Agreement Period</p>
                                    <p class="mb-0 number">3 yr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 d-md-flex justify-content-center">
                        <div class="card custom-dash-card-container">
                            <div class="custom-dash-card">
                                <i class="fa-solid fa-chart-simple"></i>
                                <div class="d-flex flex-column custom-dash-text">
                                    <p class="mb-0">Rate of Returns</p>
                                    <p class="mb-0 number">7.2%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mb-5">
                    <div class="row row-gap-5">
                        <div class="col-12 col-md-6">
                            <h4 class="mb-0 heading">Nominee</h4>
                            <div class="card mt-4 nominee-card-container">
                                <div class="nominee-card">
                                    <div class="nominee-text">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="mb-0 d-flex gap-2">
                                            <span class="fw-semibold">Name: </span>
                                            <span>Viji</span>
                                        </p>
                                    </div>
                                    <div class="nominee-text">
                                        <i class="fa-solid fa-cake-candles"></i>
                                        <p class="mb-0 d-flex gap-2">
                                            <span class="fw-semibold">Relationship: </span>
                                            <span>Friend</span>
                                        </p>
                                    </div>
                                    <div class="nominee-text">
                                        <i class="fa-solid fa-address-book"></i>
                                        <p class="mb-0 d-flex gap-2">
                                            <span class="fw-semibold">Mobile No: </span>
                                            <span>979141327689</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-6">
                            <h4 class="mb-0 heading mb-4">Privacy & Security</h4>
                            <a href="./forgot-password.php" class="dashboard-forgot-password">
                                <i class="fa-solid fa-lock text-black me-2"></i>
                                Forgot Password
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebar.js"></script>
</body>

</html>