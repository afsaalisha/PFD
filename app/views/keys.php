<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="key-content">

        <div class="content-header">
            <h2>How to Generate New Keys</h2>
        </div>

        <ol>
            <li>
                <p>Log in to the <strong>Pocket Merchant Portal.</strong></p>
                <img src="../public/images/pmp.png" alt="Pocket Merchant Portal" class="key-image">
            </li>
            <li>
                <p>Navigate to the <strong>Terminal</strong> page.</p>
                <img src="../public/images/tp.png" alt="Terminal Page" class="key-image">
            </li>
            <li>
                <p>Create a new Terminal Slot. Each slot indicates a different payment terminal, which will be reflected in the payment receipt of your client.<strong> Make sure each terminal ID is unique.</strong></p>

                <img src="../public/images/ts.png" alt="Terminal Slot" class="key-image">
            </li>
            <li>
                <p>Make sure to assign your phone number to the newly created terminal.</p>
                <img src="../public/images/apn.png" alt="Assign Phone Number" class="key-image">
            </li>
            <li>
                <p>Then, navigate to the <strong>Manage Keys</strong> page. Your API salt & API key will be shown here once created.</p>
                <img src="../public/images/mkp.png" alt="Manage Keys Page" class="key-image">
            </li>
            <li>
                <p>Click on <strong>Generate New Keys.</strong></p>
                <img src="../public/images/gnk.png" alt="Generate New Keys" class="key-image">
            </li>
            <li>
                <p>Select the terminal you created and then click on <strong>Generate.</strong></p>
                <img src="../public/images/stag.png" alt="Select Terminal and Generate" class="key-image">
            </li>
            <li>
                <p>You have successfully created your API salt & key pair! (If you encounter any error during this process please contact us at <italic>+673 8888222</italic> or through our email <italic>support@threegmedia.com</italic>)</p>
                <img src="../public/images/kgs.png" alt="Keys Generated Successfully" class="key-image">
            </li>
        </ol>

    </main>

    <?php include 'layouts/footer.php'; ?>