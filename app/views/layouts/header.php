<?php
  // Set a default in case it's not defined in the page
  if (!isset($hasSidebar)) {
    $hasSidebar = true;
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pocket For Developers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
  <link rel="stylesheet" href="/PFD/public/css/styles.css">
  <link rel="stylesheet" href="/PFD/public/css/mobile.css" media="screen and (max-width: 768px)">
  <script src="/public/js/tabs.js"></script>

</head>



<body class="<?= $hasSidebar ? 'with-sidebar' : 'no-sidebar' ?>">


  <header>
    <div class="logo-section">
      <a href="/PFD/home">
        <img class="logo-icon" src="/PFD/public/images/pocket.png" alt="Logo">
      </a>
      <div class="logo-text"><a href="/PFD/home">Pocket For Developers</div>
    </div>
    <nav>
      <a href="/PFD/woo">Documentation</a>
      <a href="/PFD/guide">Guidelines</a>
      <a href="/PFD/merchant">Pocket Merchant</a>
      <a href="/PFD/partner">Pocket Partner</a>
      <a href="http://localhost/poshet/home">Go to Merchant Portal</a>
    </nav>
  </header>

</body>

</html>