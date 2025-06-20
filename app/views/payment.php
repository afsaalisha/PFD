<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="poc-content">

        <div class="poc-content-header">
            <h2>How to Generate Static Payment Link Module</h2>
        </div>

        <div class="poc-grid">
            <div class="poc-step-box">
                <div class="step-number">1</div>
                <p>Go to terminal to create a new terminal (if there is no already existing terminal, or if you intend to use a separate terminal to accept online web payment)</p>
                <img src="/PFD/public/images/payment/cnt.png" alt="Terminal" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">2</div>
                <p>Go to the ‘Manage Keys’ page & ‘generate new keys’ to get the API key and API salt for the newly created terminal.</p>
                <img src="/PFD/public/images/payment/nct.png" alt="Newly Created Terminal" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">3</div>
                <p>Select the terminal you want to create the credentials for.</p>
                <img src="/PFD/public/images/payment/ctc.png" alt="Create Credentials" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">4</div>
                <p>Go to ‘Manage Payment Link’ page and click on ‘Create new Link’.</p>
                <img src="/PFD/public/images/payment/cnl.png" alt="Create new Link" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">5</div>
                <p>Select the terminal you have just created and enter a redirect link. This can be your homepage, or a general thank you page for your website.</p>
                <img src="/PFD/public/images/payment/earl.png" alt="Enter Redirect Link" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">6</div>
                <p>You can now copy the payment link to share to your customer.</p>
                <img src="/PFD/public/images/payment/styc.png" alt="Copy Payment Link" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">7</div>
                <p>You may overview all your created link as well.</p>
                <img src="/PFD/public/images/payment/ocl.png" alt="Overview" class="poc-image-small" onclick="openModal(this.src)">
            </div>
        </div>

        <div class="poc-content-header">
            <h2>How to Use The Payment Link</h2>
        </div>

        <div class="poc-grid">
            <div class="poc-step-box">
                <div class="step-number">1</div>
                <p>The payment link will lead to a page that allows customer to manually enter the amount they want to pay to the merchant (note, it cannot be less than $1.00).</p>
                <img src="/PFD/public/images/payment/upl1.png" alt="Enter Amount" class="poc-image-small" onclick="openModal(this.src)">
            </div>
            <div class="poc-step-box">
                <div class="step-number">2</div>
                <p>When customer click proceed to payment page, they will be redirected to the Pocket Pay gateway.</p>
                <img src="/PFD/public/images/payment/upl2.png" alt="Payment Page" class="poc-image-small" onclick="openModal(this.src)">
                <img src="/PFD/public/images/payment/upl3.png" alt="Pocket Pay Gateway" class="poc-image-small" onclick="openModal(this.src)">
            </div>
        </div>

        <div id="imageModal" class="image-modal" onclick="closeModal(event)">
            <span class="image-modal-close">&times;</span>
            <img class="image-modal-content" id="modalImg">
        </div>


    </main>

    <?php include 'layouts/footer.php'; ?>