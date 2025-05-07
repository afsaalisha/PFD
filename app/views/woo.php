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
          <li><a href="#testing">Testing</a></li>
          <li><a href="#production">Production</a></li>
          <li><a href="#usage">Usage</a></li>
          <li><a href="#support">Support</a></li>
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
              <li>Save changes.</li>
            </ul>
          </li>
        </ol>
      </section>

      <section>
        <h2 id="testing">Test API Credentials</h2>
        <hr />

        <ul>
          <li><strong>Test API Key:</strong>
            <code>XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq</code>
          </li>
          <li><strong>Test Salt:</strong>
            <code>FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2</code>
          </li>
          <li><strong>Test Card Details:</strong>
            <ul>
              <li><strong>Number:</strong> 4444 5555 6666 7777</li>
              <li><strong>Expiry Date:</strong> (Any future date)</li>
              <li><strong>CVV:</strong> (Any 3-digit number)</li>
            </ul>
          </li>
        </ul>

        <h3>How to Use Test Credentials</h3>
        <ol>
          <li>
            <strong>Configure Pocket Pay:</strong>
            <ul>
              <li>Enter the test API key and salt provided above in the corresponding fields inside the Pocket Pay setting page.</li>
              <li>Save changes.</li>
            </ul>
          </li>
          <li>
            <strong>Perform a Test Transaction:</strong>
            <ul>
              <li>Add a product to your cart and proceed to checkout.</li>
              <li>Select Pocket Pay as the payment method and use the provided test credentials to complete the transaction.</li>
            </ul>
          </li>
        </ol>

        <h3>Note</h3>
        <ul>
          <li>These credentials are for testing purposes only and will not process real transactions.</li>
          <li>For production use, uncheck <code>Enable Test Mode</code> in the settings page and replace the test credentials with your live Pocket Pay credentials.</li>
        </ul>
      </section>

      <section>
        <h2 id="production">Production</h2>
        <hr />
        <p>To enable the gateway for production use, you must enter your live API credentials on the settings page.</p>

        <h3>Live API Credentials</h3>
        <ul>
          <li><strong>Live API Key & Salt:</strong> You may generate these credentials through the Pocket Merchant portal
            (<a href="https://portal.pocket.com.bn/" target="_blank">https://portal.pocket.com.bn/</a>), provided that your portal account has the necessary permission.
            Note that access to this portal requires you to be a registered Pocket merchant or have a Pocket merchant demo account.
            If you're interested in acquiring a demo account and live credentials, please contact our support team.
            <ul>
              <li>Go to <code>Manage Keys</code> to view any previously made credentials.</li>
              <li>Select <code>Generate New Keys</code> to create new keys.</li>
            </ul>
          </li>
        </ul>
      </section>

      <section>
        <h2 id="usage">Usage</h2>
        <hr />
        <p>Once configured, Pocket Pay will be available as a payment option during the checkout process on your WooCommerce store.
          Customers can select Pocket Pay, enter their payment details, and complete the transaction securely.</p>
      </section>

      <section>
        <h2 id="support">Support</h2>
        <hr />
        <p>For any questions, issues, or feature requests, please contact our support team at
          <a href="mailto:support@threegmedia.com">support@threegmedia.com</a> or through our hotline at
          <strong>+673 8888222</strong>.
          We kindly request that you include your contact details (name, email address, and/or phone number) when sending your email.
        </p>

        <p>Thank you for using Pocket Pay! We hope it helps streamline your payment processes on WooCommerce.</p>
        <p><small>Copyright 2008–2024. All Rights Reserved. Proprietary of ThreeG Media Sdn Bhd</small></p>
      </section>

    </main>

    <!-- Right Panel -->
    <aside class="right-panel">
      <div class="right-box">
        <img src="/PFD/public/images/yoshi.jpg" alt="Sample 1" class="right-img">
        <p>kiyoshi :3</p>
        <img src="/PFD/public/images/yocchi.jpg" alt="Sample 2" class="right-img">
        <p>kiyoshi :3</p>
      </div>
    </aside>

  </div>
</div>

<?php include 'layouts/footer.php'; ?>