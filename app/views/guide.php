<?php include 'layouts/header.php'; ?>
<div class="page-container">
<?php include 'layouts/guide-sidebar.php'; ?>


    <!-- Main + Right Panel Container -->
    <div class="main-and-right">

        <!-- Main Content -->
        <main class="doc-content">
            <h1>Create Kiyoshi <span style="font-size: 14px; color: #999;">🔒 OAuth 2.0</span></h1>
            <p>Creates a Kiyoshi belonging to provided Kiyoshi owner and returns Adachi metadata. Kiyoshi type can be either image, audio, or video.</p>

            <div class="guide-collapsible-container">
                <button class="guide-collapsible">Request</button>
                <div class="guide-content">
                    <h3 style="color: green;">POST</h3>
                    <code>/kiyoshi_owners/{kiyoshi_owner_id}/Kiyoshi</code>
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

<?php include 'layouts/footer.php'; ?>