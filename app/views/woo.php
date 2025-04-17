<?php include 'layouts/header.php'; ?>
<div class="page-container">
  <?php include 'layouts/sidebar.php'; ?>

  <!-- Main + Right Panel Container -->
  <div class="main-and-right">
    
    <!-- Main Content -->
    <main class="doc-content">
    <div class="tocs-box">
  <h3>Table of Contents</h3>
  <ul class="tocs-list">
    <li><a href="#installation">Installation</a></li>
    <li><a href="#configuration">Configuration</a></li>
  </ul>
</div>
      <section>
        <h2 id="installation">Installation</h2>
        <hr />
        <ol>
          <li><strong>Download the Plugin:</strong>
            <ul>
              <li>Clone the repository or download the latest release as a .zip file.</li>
            </ul>
          </li>
          <li><strong>Upload to WordPress:</strong>
            <ul>
              <li>Log in to your WordPress admin dashboard.</li>
              <li>Navigate to Plugins &gt; Add New &gt; Upload Plugin.</li>
              <li>Choose the downloaded PocketPay.zip file and click Install.</li>
            </ul>
          </li>
          <li><strong>Activate the Plugin:</strong>
            <ul>
              <li>After installation, click Activate Plugin to enable the plugin.</li>
            </ul>
          </li>
        </ol>
      </section>

      <section>
        <h2 id="configuration">Configuration</h2>
        <hr />
        <ol>
          <li><strong>Setting up Merchant’s Pocket Account:</strong>
            <ul>
              <li>Go to WooCommerce &gt; Settings &gt; Payments.</li>
            </ul>
          </li>
          <li><strong>Enable Pocket Pay:</strong>
            <ul>
              <li>Locate Pocket Pay in the list of available payment gateways and click Manage.</li>
              <li>Enable the payment method by checking the Enable Pocket Pay option.</li>
            </ul>
          </li>
          <li><strong>Configure Pocket Pay:</strong>
            <ul>
              <li>Enter the necessary credentials and settings provided by Pocket Pay.</li>
            </ul>
          </li>
        </ol>
      </section>
    </main>

    <!-- Right Panel -->
    <aside class="right-panel">
      <div class="right-box">
        <img src="/PFD/public/images/yoshi.jpg" alt="Sample 1" class="right-img">
        <p>kiyoshi :3</p>
        <img src="/PFD/public/images/yocchi.jpg" alt="Sample 2" class="right-img">
      </div>
    </aside>
    
  </div>
</div>
