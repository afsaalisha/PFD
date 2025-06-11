<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="poc-content">

        <div class="poc-content-header">
            <h2>How to Generate Static Payment Link Module</h2>
        </div>

        <ol>
            <li>
                <p>Go to terminal to create a new terminal (if there is no already existing terminal, or if you intend to use a separate terminal to accept online web payment)</p>
                <img src="public/images/payment/cnt.png" alt="Terminal" class="poc-image">
            </li>
            <li>
                <p>Go to the ‘Manage Keys’ page & ‘generate new keys’ to get the API key and API salt for the newly created terminal.</p>
                <img src="public/images/payment/nct.png" alt="Newly Created Terminal" class="poc-image">
            </li>
            <li>
                <p>Select the terminal you want to create the credentials for.</p>
                <img src="public/images/payment/ctc.png" alt="Create Credentials" class="poc-image">
            </li>
            <li>
                <p>Go to ‘Manage Payment Link’ page and click on ‘Create new Link’.</p>
                <img src="public/images/payment/cnl.png" alt="Create new Link" class="poc-image">
            </li>
            <li>
                <p>Select the terminal you have just created and enter a redirect link. This can be your homepage, or a general thank you page for your website.</p>
                <img src="public/images/payment/earl.png" alt="Enter Redirect Link" class="poc-image">
            </li>
            <li>
                <p>You can now copy the payment link to share to your customer.</p>
                <img src="public/images/payment/styc.png" alt="Copy Payment Link" class="poc-image">
            </li>
            <li>
                <p>You may overview all your created link as well.</p>
                <img src="public/images/payment/ocl.png" alt="Overview" class="poc-image">
            </li>
        </ol>

        <div class="content-header">
            <h2>How to Use The Payment Link</h2>
        </div>

        <ol>
            <li>
                <p>The payment link will lead to a page that allows customer to manually enter the amount they want to pay to the merchant (note, it cannot be less than $1.00).</p>
                <img src="public/images/payment/upl1.png" alt="Enter Amount" class="poc-image">
            </li>
            <li>
                <p>When customer click proceed to payment page, they will be redirected to the Pocket Pay gateway.</p>
                <img src="public/images/payment/upl2.png" alt="Payment Page" class="poc-image">
                <img src="public/images/payment/upl3.png" alt="Pocket Pay Gateway" class="poc-image">
            </li>
        </ol>

    </main>

    <?php include 'layouts/footer.php'; ?>