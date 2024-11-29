<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMS - Forgot Password?</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/styles/sideAndNavbar.css" />
    <link rel="stylesheet" href="./assets/styles/forgotPassword.css" />
  </head>

  <body>
    <!-- Sidebar for Large Screens -->
    <div class="sidebar d-none d-lg-block text-white">
      <div class="p-3">
        <img
          src="./assets/img//toppiVappaProfilePic.png"
          height="60px"
          width="250px"
        />
      </div>
      <hr class="hr-sidebar" />
      <ul class="list-unstyled p-0 m-0">
        <li>
          <a
            href="./index.php"
            class="text-white text-decoration-none d-block py-2 px-3"
            ><i class="fas fa-th-large me-2"></i> Dashboard</a
          >
        </li>
        <li>
          <a
            href="./my-investment.html"
            class="text-white text-decoration-none d-block py-2 px-3"
            ><i class="fas fa-chart-line me-2"></i> My Investment</a
          >
        </li>
        <li>
          <a
            href="./download-agreement.html"
            class="text-white text-decoration-none d-block py-2 px-3"
            ><i class="fas fa-file-download me-2"></i> Download Agreement</a
          >
        </li>
        <li>
          <a
            href="./apply-for-inv-card.html"
            class="text-white text-decoration-none d-block py-2 px-3 active"
            ><i class="fas fa-credit-card me-2"></i> Apply For Inv. Card</a
          >
        </li>
        <li>
          <a
            href="./investment-plan.html"
            class="text-white text-decoration-none d-block py-2 px-3"
            ><i class="fas fa-coins me-2"></i> Investment Plan</a
          >
        </li>
        <li>
          <a
            href="./contact-us.html"
            class="text-white text-decoration-none d-block py-2 px-3"
            ><i class="fas fa-envelope me-2"></i> Contact Us</a
          >
        </li>
      </ul>
    </div>

    <!-- Offcanvas Sidebar for Mobile View -->
    <div
      class="offcanvas offcanvas-start d-lg-none"
      data-bs-scroll="true"
      tabindex="-1"
      id="mobileSidebar"
      aria-labelledby="mobileSidebarLabel"
    >
      <div class="offcanvas-header">
        <img
          src="./assets/img//toppiVappaProfilePic.png"
          height="50px"
          width="200px"
        />
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <hr class="hr-sidebar" />
      <div class="offcanvas-body">
        <ul class="list-unstyled p-0">
          <li>
            <a
              href="./index.php"
              class="text-white text-decoration-none d-block py-2 px-3 active"
              ><i class="fas fa-th-large me-2"></i> Dashboard</a
            >
          </li>
          <li>
            <a
              href="./my-investment.html"
              class="text-white text-decoration-none d-block py-2 px-3"
              ><i class="fas fa-chart-line me-2"></i> My Investment</a
            >
          </li>
          <li>
            <a
              href="./download-agreement.html"
              class="text-white text-decoration-none d-block py-2 px-3"
              ><i class="fas fa-file-download me-2"></i> Download Agreement</a
            >
          </li>
          <li>
            <a
              href="./apply-for-inv-card.html"
              class="text-white text-decoration-none d-block py-2 px-3 active"
              ><i class="fas fa-credit-card me-2"></i> Apply For Inv. Card</a
            >
          </li>
          <li>
            <a
              href="./investment-plan.html"
              class="text-white text-decoration-none d-block py-2 px-3"
              ><i class="fas fa-coins me-2"></i> Investment Plan</a
            >
          </li>
          <li>
            <a
              href="./contact-us.html"
              class="text-white text-decoration-none d-block py-2 px-3"
              ><i class="fas fa-envelope me-2"></i> Contact Us</a
            >
          </li>
        </ul>
      </div>
    </div>

    <!-- Page Content -->
    <div class="content" id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-success p-3">
        <div class="container-fluid">
          <button
            class="btn btn-dark d-lg-none"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileSidebar"
            aria-controls="mobileSidebar"
          >
            <i class="fas fa-bars"></i>
          </button>
          <!-- Add an ID to the heading for easier access -->
          <h3 id="navbar-heading" class="text-white mb-0">My Investment</h3>
          <div class="d-flex align-items-center">
            <a href="#"
              ><img
                src="../assests/searchIcon.png"
                alt="search"
                class="rounded-circle"
            /></a>
            <a href="#"
              ><img
                src="../assests/bellIcon.png"
                alt="bell"
                class="rounded-circle"
            /></a>
            <a href="#"
              ><img
                src="../assests/dpPic.jpg"
                alt="Profile"
                class="rounded-circle"
            /></a>
          </div>
        </div>
      </nav>

      <div class="mainContent-forgotPassword">
        <div class="fp-textContainer">
          <h4 class="fp-text"><b>Forgot Password?</b></h4>
          <br />
          <p class="fp-content">
            Enter your registered email address, and we’ll notify the admin to
            help reset your password. You’ll receive a response shortly.
          </p>
        </div>

        <div class="container d-flex justify-content-center align-items-center">
          <div class="forgot-password-card text-center mx-auto">
            <form id="forgot-password-form">
              <div class="mb-4 text-start">
                <label for="email" class="form-label text-success"
                  >Email Address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter your email"
                  required
                />
              </div>
              <br />
              <div class="d-flex justify-content-between">
                <button
                  type="button"
                  class="btn btn-secondary"
                  id="cancel-button"
                >
                  Cancel
                </button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Success Modal -->
        <div
          class="modal fade"
          id="successModal"
          tabindex="-1"
          aria-labelledby="successModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
              <div class="modal-body">
                <img
                  src="../assests/submitSuccessIcon.png"
                  height="100px"
                  width="100px"
                />
                <h4 class="mt-3">Well Done!</h4>
                <br />
                <p>Your request has been sent to the admin.</p>
              </div>
            </div>
          </div>
        </div>

        <script>
          // Handle form submission
          document
            .getElementById("forgot-password-form")
            .addEventListener("submit", function (event) {
              event.preventDefault(); // Prevent page refresh

              const email = document.getElementById("email").value.trim();
              if (email) {
                // Show the success modal
                const successModal = new bootstrap.Modal(
                  document.getElementById("successModal")
                );
                successModal.show();
              } else {
                alert("Please enter your email address!");
              }
            });

          // Clear form when "Cancel" is clicked
          document
            .getElementById("cancel-button")
            .addEventListener("click", function () {
              document.getElementById("email").value = ""; // Clear email field
            });
        </script>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
