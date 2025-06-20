<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="poc-content">

        <div class="poc-content-header">
            <h2>Cancelling Coupon</h2>
        </div>

        <ul>
            <li>
                <p><strong>Can be done anytime.</strong></p>
            </li>
            <li>
                <p><strong>Not reversible.</strong></p>
            </li>
            <li>
                <p>Must provide <strong class="red">reason for cancellation</strong>.</p>
            </li>
            <li>
                <p><strong><em>Refunds</em></strong></p>
                <ul>
                    <li>
                        <p>Valid for <strong>organizational, non-Pocket Merchants</strong> that have <strong><em>paid the upfront fee.</em></strong></p>
                    </li>
                    <li>
                        <p><strong>Registered merchants</strong> will <strong><em>not be given a refund</em></strong> as there is <em>no upfront payment to be made.</em></p>
                    </li>
                </ul>
                <img src="/PFD/public/images/coupon/ccpn.png" alt="Cancelling Coupon" class="poc-image" style="width: 40%;">

            </li>
        </ul>

        <div class="poc-content-header">
            <h2>Coupon Dispensing (WIP)</h2>
        </div>

        <ul>
            <li>
                <p>Create coupon --> pending (status tab) --> reviewed by Pocket Admin --> once approved, moved from "status" to "active tab".</p>
                <img src="/PFD/public/images/coupon/pendingreview.png" alt="Pending Review" class="poc-image-small" onclick="openModal(this.src)">
                <ul>
                    <li>
                        <p>push coupon <strong>if distribution period has begun</strong></p>
                        <img src="/PFD/public/images/coupon/distributionperiod.png" alt="Distribution Period" class="poc-image-small" onclick="openModal(this.src)">
                    </li>
                    <li>
                        <p>"action" tab will change from a Notice to a "push" button</p>
                        <img src="/PFD/public/images/coupon/actiontab.png" alt="Action tab" class="poc-image-small" onclick="openModal(this.src)">
                        <ul>
                            <li>
                                <p>redirected to dispense coupon page</p>
                                <img src="/PFD/public/images/coupon/redirect.png" alt="Redirect to Dispense Coupon" class="poc-image-small" onclick="openModal(this.src)">
                            </li>
                        </ul>
                    </li>
                </ul>

            </li>
            <img src="/PFD/public/images/coupon/quantity.png" alt="Quantity" class="poc-image-small" onclick="openModal(this.src)">
            <li>
                <p>Starting coupon quantitiy</p>
            </li>
            <li>
                <p>Amount of coupon dispensed</p>
            </li>
            <li>
                <p>Amount of available coupon left</p>
            </li>
            <li>
                <p>Coupon dispenser could be done by entering</p>
                <img src="/PFD/public/images/coupon/manualorcsv.png" alt="Enter Phone Number or Upload CSV file" class="poc-image-small" onclick="openModal(this.src)">
                <ul>
                    <li>
                        <p>User phone number manually or;</p>
                    </li>
                    <li>
                        <p>CSV file upload</p>
                    </li>
                </ul>
                <img src="/PFD/public/images/coupon/checkbox.png" alt="Checkbox to allow reusable coupons" class="poc-image-small" onclick="openModal(this.src)">
                <p><em>*Only tick checkbox to allow reusable coupons. otherwise, leave it unticked.</em></p>

                <img src="/PFD/public/images/coupon/pocketusers.png" alt="Pocket Users" class="poc-image-small" onclick="openModal(this.src)">
                <p><em>*Only Pocket users can receive & use Pocket coupons.</em></p>

                <ul>
                    <li>Better if merchants encourage customers to use Pocket for coupons.</li>
                </ul>

                <img src="/PFD/public/images/coupon/archivedtab.png" alt="Archive tab" class="poc-image-small" onclick="openModal(this.src)">
                <p><em>*Once all coupons (qty) are dispensed & fully redeemed, coupon will be moved to the "Archive" tab.</em></p>
                <ul>
                    <li>If qty is unlimited, then it will be moved to the "Archive" tab once it reaches the 'end dispensing date'.</li>
                </ul>
            </li>
        </ul>

    </main>

    <?php include 'layouts/footer.php'; ?>