<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/guide-sidebar.php'; ?>


    <!-- Main + Right Panel Container -->
    <div class="main-and-right">

        <!-- Main Content -->
        <main class="doc-content">
            <h1>Payment Link & Dynamic QR</h1>
            <p>Generate payment link & dynamic qr for Pocket Pay gateway.</p>

            <!-- <div class="guide-collapsible-container">
                <button class="guide-collapsible">Post</button>
                <div class="guide-content">
                    <h3 style="color: #db5b00;">/payments/getNewOrderId</h3>
                    <h5 style="color: grey">Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment.</h5>
                    <code>/kiyoshi_owners/{kiyoshi_owner_id}/Kiyoshi</code>
                </div>
            </div> -->

            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span>POST /payments/getNewOrderId</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>
                        Generate <code>new_id</code> which will be used in the <code>order_id</code>
                        parameter needed to create a payment.
                    </p>

                    <div class="pldq-subtitle">Request Body (application/json) <span class="pldq-ev">Example Value | </span><button class="pldq-ev pldq-button">Schema</button></div>
                    <p class="respons-tings">Generate new Order ID</p>
                    <pre class="pldq-code-block">
<code>{
"api_key": "your_api_key_here",
"salt": "your_salt_here"
}</code></pre>

                    <div class="pldq-subtitle">Response Example</div>
                    <p class="respons-tings">Curl</p>
                    <pre class="pldq-code-block">
<code>curl -X 'POST' \
/proxy?proxy-token=tjxcrka&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FgetNewOrderId \
-H 'accept: application/json' \
-H 'Content-Type: application/json' \
-H 'x-swaggerhub-cookie: ' \
-d '{
"api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
"salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"
}'</code></pre>
                    <p class="respons-tings">Request URL</p>
                    <pre class="pldq-code-block">
<code>/proxy?proxy-token=tjxcrka&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FgetNewOrderId</code></pre>

                    <p class="respons-tings">Server response</p>

                </div>
            </div>

            <div class="guide-collapsible-container">
                <button class="guide-collapsible">Path Parameter</button>
                <div class="guide-content">
                    <ul>
                        <li>
                            <strong>kiyoshi_owner_id</strong> <code>string (uuid)</code>
                            <span style="color: green;">Required</span><br />
                            A unique identifier for a Kiyoshi owner.<br />
                            <em>Example: ce4ff15e-f04d-48b9-9ddf-fb3c8f5bd57a</em>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="guide-collapsible-container">
                <button class="guide-collapsible">Body (application/json)</button>
                <div class="guide-content">
                    <ul>
                        <li>
                            <strong>kiyoshi_type</strong> <code>string</code>
                            <span style="color: green;">Required</span><br />
                            The type of Kiyoshi.<br />
                            Allowed values: <code>AUDIO</code>, <code>IMAGE</code>, <code>VIDEO</code><br />
                            <em>Example: "IMAGE"</em>
                        </li>
                        <li>
                            <strong>kiyoshi_subtype</strong> <code>string</code><br />
                            Only required for Kiyoshi type AUDIO.<br />
                            Allowed values: <code>BACKGROUND_MUSIC</code>, <code>USER_UPLOADED_AUDIO</code>
                        </li>
                    </ul>
                </div>
            </div>
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

<script>
    function togglePldqDropdown(header) {
        const content = header.nextElementSibling;
        const arrow = header.querySelector('.pldq-arrow');
        content.classList.toggle('open');
        arrow.style.transform = content.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0deg)';
    }
</script>

<?php include 'layouts/footer.php'; ?>