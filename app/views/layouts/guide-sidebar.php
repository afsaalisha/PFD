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

</div>