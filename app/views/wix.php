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
    <li><a href="#integration">Integration with WIX</a></li>
    <li><a href="#managing">Managing Payments</a></li>
  </ul>
</div>
        
      <section>
      <h2 id="integration">Integration with WIX</h2>
      <hr />
        <ol>
          <li><strong>Generate a Pocket Pay Link:</strong>
            <ul>
              <li>Log in to your Pocket Pay merchant dashboard.</li>
              <li>Navigate to <em>“Single Page Payments”</em> and click <strong>Generate Link</strong>.</li>
              <li>Customize the payment link (amount, purpose, expiration, etc.), then copy it.</li>
            </ul>
          </li>
          <li><strong>Embed in WIX:</strong>
            <ul>
              <li>Go to your WIX Editor.</li>
              <li>Choose the page where you want the payment option to appear.</li>
              <li>Click <strong>“+ Add”</strong> → <strong>“Embed”</strong> → <strong>“Custom Embeds”</strong> → <strong>“Embed a Widget”</strong>.</li>
              <li>Paste the HTML code like this:</li>
              <pre><code>&lt;a href="https://pay.pocketpay.example/abc123" target="_blank"&gt;
  &lt;button style="padding:10px 20px;background:#ff7a00;color:white;border:none;border-radius:6px;"&gt;
    Pay Now
  &lt;/button&gt;
&lt;/a&gt;
</code></pre>
            </ul>
          </li>
          <li><strong>Publish Your WIX Site:</strong>
            <ul>
              <li>Click <strong>Publish</strong> in the top-right corner to make the button live.</li>
              <li>Test the button to confirm it opens the Pocket Pay hosted payment page.</li>
            </ul>
          </li>
        </ol>
      </section>

      <section>
      <h2 id="managing">Managing Payments</h2>
      <hr />
        <ol>
          <li><strong>Tracking Payments:</strong>
            <ul>
              <li>All payments are logged in your Pocket Pay dashboard under the <strong>Transactions</strong> tab.</li>
            </ul>
          </li>
          <li><strong>Using Webhooks (Optional):</strong>
            <ul>
              <li>Set up webhooks to receive payment confirmation callbacks if you're collecting additional order details on WIX.</li>
              <li>Webhooks can notify your backend (if applicable) when payments succeed, fail, or are refunded.</li>
            </ul>
          </li>
          <li><strong>Issuing Refunds:</strong>
            <ul>
              <li>Refunds can be initiated from your Pocket Pay dashboard or via API if you're handling it programmatically.</li>
            </ul>
          </li>
        </ol>
      </section>
    </main>

    <!-- Right Panel -->
    <aside class="right-panel">
      <div class="right-box">
        <img src="/PFD/public/images/weiying.jpg" alt="Sample 1" class="right-img">
        <p>Wei Ying :3</p>
        <img src="/PFD/public/images/wenning.jpg" alt="Sample 2" class="right-img">
        <p>Wen Ning :3</p>
        <img src="/PFD/public/images/baldzhan.jpg" alt="Sample 3" class="right-img">
        <p>Lan Zhan :3</p>
      </div>
    </aside>
    
  </div>
</div>

<?php include 'layouts/footer.php'; ?>