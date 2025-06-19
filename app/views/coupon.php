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
                <ul>
                    <li>
                        <p>push coupon <strong>if distribution period has begun</strong></p>
                    </li>
                    <li>
                        <p>"action" tab will change from a Notice to a "push" button</p>
                        <ul>
                            <li>
                                <p>redirected to dispense coupon page</p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- <img src="public/images/payment/upl1.png" alt="Enter Amount" class="poc-image"> -->
            </li>
        </ul>

        <div class="poc-content-header">
            <h2>Dispense Coupon</h2>
        </div>

        <ul>
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
                <ul>
                    <li>
                        <p>User phone number manually or;</p>
                    </li>
                    <li>
                        <p>CSV file upload</p>
                    </li>
                </ul>
                <p><em>Only tick checkbox to allow reusable coupons. otherwise, leave it unticked.</em></p>
                <p><em>Only Pocket users can receive & use Pocket coupons.</em></p>
                <ul>
                    <li>Better if merchants encourage customers to use Pocket for coupons.</li>
                </ul>
                <p><em>Once all coupons (qty) are dispensed & fully redeemed, coupon will be moved to the "Archive" tab.</em></p>
                <ul>
                    <li>If qty is unlimited, then it will be moved to the "Archive" tab once it reaches the 'end dispensing date'.</li>
                </ul>
            </li>
        </ul>

    </main>

    <?php include 'layouts/footer.php'; ?>