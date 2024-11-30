<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - Forgot Password?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/styles/global.css" />
  <link rel="stylesheet" href="./assets/styles/header.css" />
  <link rel="stylesheet" href="./assets/styles/sidebar.css" />
  <link rel="stylesheet" href="./assets/styles/forgotPassword.css" />
</head>

<body>
  <!-- Sidebar for Large Screens -->
  <?php include 'sidebar.php'; ?>

  <!-- Page Content -->
  <div class="main-container">
    <?php include './header.php'; ?>

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
            <div class="text-start">
              <label for="email" class="form-label text-success">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
            </div>
            <br />
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-secondary" id="cancel-button">
                Cancel
              </button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Success Modal -->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content text-center p-4">
            <div class="modal-body">
              <img src="../assests/submitSuccessIcon.png" height="100px" width="100px" />
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
  <script src="./assets/js/sidebar.js"></script>
</body>

</html>