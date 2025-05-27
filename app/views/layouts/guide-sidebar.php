<?php
$current = $_SERVER['REQUEST_URI'];
?>

<div class="sidebar">

  <div class="sidebar-section-title">Design & Branding Guidelines</div>

  <div class="sidebar-link <?php echo (strpos($current, '/PFD/guide') === 0 && strpos($current, '/PFD/schemas') === false) ? 'active' : ''; ?>">
    <a href="/PFD/guide/">Requests</a>
  </div>

  <div class="sidebar-link <?php echo (strpos($current, '/PFD/schemas') === 0) ? 'active' : ''; ?>">
    <a href="/PFD/schemas">Schemas</a>
  </div>

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

  <div class="sidebar-section-title">Pocket Merchant App</div>

  <div class="sidebar-section-title">Pocket User App</div>


</div>