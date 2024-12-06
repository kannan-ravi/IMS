<div class="header-container">
  <div class="container header-inner">
    <i class="fa-solid fa-bars open-sidebar d-lg-none"></i>
    <?php
    $pageTitle = "Dashboard";
    $currentPage = basename($_SERVER['PHP_SELF']);

    switch ($currentPage) {
      case "my-investment.php":
        $pageTitle = "My Investment";
        break;
      case "download-agreement.php":
        $pageTitle = "Download Agreement";
        break;
      case "apply-for-inv-card.php":
        $pageTitle = "Apply for Investor Card";
        break;
      case "investment-plan.php":
        $pageTitle = "Investment Plan";
        break;
      case "contact-us.php":
        $pageTitle = "Contact Us";
        break;
      default:
        $pageTitle = "Dashboard";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title><?php echo $pageTitle; ?></title>
    </head>

    <body>
      <p class="mb-0 d-none d-lg-block header-title"><?php echo $pageTitle; ?></p>
    </body>

    </html>

    <div class="header-profile-container d-flex align-items-center gap-2 gap-sm-3">
      <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
      <i class="fa-regular fa-bell"></i>
      <div class="d-flex align-items-center gap-2 header-profile-inner rounded-pill">
        <div>
          <p class="mb-0 text-white">John Doe</p>
        </div>
        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="profile picture" class="header-profile" />
      </div>
      <i class="fa-solid fa-right-from-bracket"></i>
    </div>
  </div>
</div>