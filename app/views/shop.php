

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
    <li><a href="#integration">Integration with Shopify</a></li>
    <li><a href="#managing">Managing Payments</a></li>
  </ul>
</div>
      <section>
      <h2 id="integration">Integration with Shopify</h2>
      <hr />
        <ol>
          <li><strong>Generate a Pocket Pay Payment Link:</strong>
            <ul>
              <li>Log in to your Pocket Pay merchant dashboard.</li>
              <li>Go to <em>“Single Page Payments”</em> and create a new payment link with the required details.</li>
              <li>Copy the generated payment URL.</li>
            </ul>
          </li>
          <li><strong>Add Pocket Pay Link to Shopify:</strong>
            <ul>
              <li>Log in to your Shopify admin panel.</li>
              <li>Navigate to <strong>Online Store &gt; Pages</strong> or <strong>Products</strong> to choose where you want the payment button to appear.</li>
              <li>Click on the section you want to edit, then select the <strong>&lt;/&gt; Show HTML</strong> option in the editor.</li>
              <li>Paste this code where you want the button:</li>
              <pre><code>&lt;a href="https://pay.pocketpay.example/your-link" target="_blank"&gt;
  &lt;button style="padding:10px 20px;background:#ff7a00;color:white;border:none;border-radius:6px;"&gt;
    Complete Payment
  &lt;/button&gt;
&lt;/a&gt;
</code></pre>
            </ul>
          </li>
          <li><strong>Publish Your Page/Product:</strong>
            <ul>
              <li>Click <strong>Save</strong> and then <strong>View</strong> to test the button functionality.</li>
              <li>The button will open a secure Pocket Pay-hosted payment page.</li>
            </ul>
          </li>
        </ol>
      </section>

      <section>
      <h2 id="managing">Managing Payments</h2>
      <hr />
        <ol>
          <li><strong>Tracking Orders:</strong>
            <ul>
              <li>Since payments happen outside Shopify, use your Pocket Pay dashboard to view transactions and statuses.</li>
              <li>You can manually mark orders as paid in Shopify if needed.</li>
            </ul>
          </li>
          <li><strong>Refunds:</strong>
            <ul>
              <li>Refunds can be processed through your Pocket Pay dashboard or the refund endpoint of the API.</li>
            </ul>
          </li>
          <li><strong>Webhook Integration (Optional):</strong>
            <ul>
              <li>Developers can use webhooks to sync payment confirmations with Shopify order notes or third-party tools.</li>
            </ul>
          </li>
        </ol>
      </section>
    </main>

    <!-- Right Panel -->
    <aside class="right-panel">
      <div class="right-box">
        <img src="/PFD/public/images/ivan.jpg" alt="Sample 1" class="right-img">
        <p>Ivan :3</p>
        <img src="/PFD/public/images/suaa.jpg" alt="Sample 2" class="right-img">
        <p>Sua :3</p>
        <img src="/PFD/public/images/hyuna.jpg" alt="Sample 3" class="right-img">
        <p>Hyuna :3</p>
      </div> 
    </aside>
    
  </div>
</div>

<?php include 'layouts/footer.php'; ?>