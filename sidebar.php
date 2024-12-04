<div class="sidebar-container">
  <aside class="sidebar">
    <div class="sidebar-logo">
      <img src="./assets/img/topivappa-logo-black.png" alt="" />
    </div>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <ul class="sidebar-lists">
      <li>
        <a href="./index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">
          <i class="fa-solid fa-gauge <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="./my-investment.php" class="<?php echo $currentPage === 'my-investment.php' ? 'active' : ''; ?>">
          <i class="fa-solid fa-divide <?php echo $currentPage === 'my-investment.php' ? 'active' : ''; ?>"></i>
          My Investment
        </a>
      </li>
      <li>
        <a href="./download-agreement.php"
          class="<?php echo $currentPage === 'download-agreement.php' ? 'active' : ''; ?>">
          <i class="fa-solid fa-download <?php echo $currentPage === 'download-agreement.php' ? 'active' : ''; ?>"></i>
          Download Agreement
        </a>
      </li>
      <li>
        <a href="./apply-for-inv-card.php"
          class="<?php echo $currentPage === 'apply-for-inv-card.php' ? 'active' : ''; ?>">
          <i
            class="fa-solid fa-credit-card <?php echo $currentPage === 'apply-for-inv-card.php' ? 'active' : ''; ?>"></i>
          Apply For Inv. Card
        </a>
      </li>
      <li>
        <a href="./contact-us.php" class="<?php echo $currentPage === 'contact-us.php' ? 'active' : ''; ?>">
          <i class="fa-solid fa-phone <?php echo $currentPage === 'contact-us.php' ? 'active' : ''; ?>"></i>
          Contact Us
        </a>
      </li>
    </ul>

    <i class="fa-solid fa-xmark close-sidebar d-lg-none"></i>
  </aside>
</div>