<?php
$current = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>

<div class="sidebar">

<div class="sidebar-section-title">Pocket Merchant Portal</div>

  <div class="sidebar-link <?php echo ($current == '/PFD/void') ? 'active' : ''; ?>">
    <a href="/PFD/void/">How To Void</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/refund') ? 'active' : ''; ?>">
    <a href="/PFD/refund">How To Refund</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/keys') ? 'active' : ''; ?>">
    <a href="/PFD/keys/">How To Generate New Keys</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/payment') ? 'active' : ''; ?>">
    <a href="/PFD/payment">How To Generate New Payment Links</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/coupon') ? 'active' : ''; ?>">
    <a href="/PFD/coupon">Coupon Module</a>
  </div>

  </div>