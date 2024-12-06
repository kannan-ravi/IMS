<?php
include('db_connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IMS - Apply for Inv.Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./assets/styles/global.css" />
  <link rel="stylesheet" href="./assets/styles/header.css" />
  <link rel="stylesheet" href="./assets/styles/sidebar.css" />
  <link rel="stylesheet" href="./assets/styles/applyForInvCard.css" />
</head>

<body>
  <!-- Sidebar -->
  <?php include './sidebar.php'; ?>

  <!-- Page Content -->
  <div class="main-container" id="page-content-wrapper">
    <?php include './header.php'; ?>

    <h4 class="text-invCard">Apply for Investor Card</h4>
    <div class="mainContent-applyForInvCard">
      <div class="container-fluid my-5">
        <div class="row">
          <div class="col-12">
            <div class="card p-4 w-100">
              <form id="InvCardForm" method="POST" action="submit_inv_card.php">
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="full_name" required />
    </div>
    <div class="col-md-6">
      <label for="investorID" class="form-label">Investor ID</label>
      <input type="text" class="form-control" id="investorID" name="investor_id" required />
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" required />
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" required />
  </div>
  <div class="mb-3">
    <label for="cardType" class="form-label">Which Card Do You Want?</label>
    <select class="form-select" id="cardType" name="card_Type" required>
      <option selected disabled></option>
      <option value="physical">Physical Card</option>
      <option value="digital">Digital Card</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Reason for Missing Card</label>
    <div class="d-flex gap-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lost" name="reason_for_missing_card[]" value="Lost" />
            <label class="form-check-label" for="lost">Lost</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="stolen" name="reason_for_missing_card[]" value="Stolen" />
            <label class="form-check-label" for="stolen">Stolen</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="damaged" name="reason_for_missing_card[]" value="Damaged" />
            <label class="form-check-label" for="damaged">Damaged</label>
        </div>
    </div>
</div>
  <div class="text-center">
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
          <div class="modal-body">
            <img src="./assets/img/submitSuccessIcon.png" height="100px" width="100px" />
            <h4 class="mt-3">Well Done!</h4>
            <br />
            <p>Your request has been sent to the admin.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebar.js"></script>

</body>

</html>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
      const successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
    }
  });
</script>

