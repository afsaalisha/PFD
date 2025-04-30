<?php
$current = $_SERVER['REQUEST_URI'];
?>

<div class="sidebar">
  <div class="sidebar-section-title">Pocket Pay Rest API</div>

  <div class="sidebar-link <?php echo ($current == '/PFD/woo') ? 'active' : ''; ?>">
    <a href="/PFD/woo">WooCommerce</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/wix') ? 'active' : ''; ?>">
    <a href="/PFD/wix">WIX</a>
  </div>

  <div class="sidebar-link <?php echo ($current == '/PFD/shop') ? 'active' : ''; ?>">
    <a href="/PFD/shop">Shopify</a>
  </div>

  </div>