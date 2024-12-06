<div class="sidebar-overlay"></div>
<aside class="sidebar-container">
  <div class="sidebar">
    <a href="./index.php" class="h-100 d-flex align-items-center justify-content-center">
      <img src="./img/topivappa-logo.png" class="w-100 sidebar-logo" alt="Logo" />
    </a>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <ul class="mt-4 sidebar-lists">
      <li>
        <i class="fa-solid fa-gauge <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>"></i>
        <a href="./index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Dashboard</a>
      </li>
      <li class=" sidebar-sub-list-button">
        <i class="fa-solid fa-signal"></i>
        <a>User</a>
        <i class="fa-solid fa-chevron-down sidebar-down-icon"></i>
      </li>
      <div class="overflow-hidden sidebar-sub-lists-container">
        <div class="sidebar-sub-lists">
          <a href="./investor-list.php" class="<?php echo $currentPage === 'investor-list.php' ? 'active' : ''; ?>">Investor List</a>
          <!-- <a href="./user-forgot-password-list.php" class="<?php echo $currentPage === 'user-forgot-password-list.php.php' ? 'active' : ''; ?>">User Forgot Password List</a> -->
          <!-- <a href="./best-investment-plan.php" class="<?php echo $currentPage === 'best-investment-plan.php' ? 'active' : ''; ?>">Best Inv Plan</a> -->
          <a href="./re-issuance-investor-card.php" class="<?php echo $currentPage === 're-issuance-investor-card.php' ? 'active' : ''; ?>">Re-Issuance Investor Card</a>
        </div>
      </div>
      <li>
        <i class="fa-regular fa-file" class="<?php echo $currentPage === 'documents.php' ? 'active' : ''; ?>"></i>
        <a href="./documents.php" class="<?php echo $currentPage === 'documents.php' ? 'active' : ''; ?>">Documents</a>
      </li>
    </ul>

    <i class="fa-solid fa-xmark d-lg-none close-sidebar"></i>
  </div>
</aside>