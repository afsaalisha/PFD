<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/guide-sidebar.php'; ?>

<main class="doc-content">


<!-- Schemas Section -->
<h1>Schemas</h1>
            
<div class="schemama-container">
    <div class="schemama-header">
        <strong>NewOrderID</strong> <span class="typemama-label">object</span>
        <div>
        </div>
    </div>

    <div class="schemama-group">
        <details>
            <summary><strong>api_key</strong> <span class="typemama-label">string</span> <span class="required">*</span></summary>
            <div class="examplemama-section">
                <span>Examples:</span>
                <ul>
                    <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                </ul>
            </div>
        </details>

        <details>
            <summary><strong>salt</strong> <span class="typemama-label">string</span> <span class="required">*</span></summary>
            <div class="examplemama-section">
                <span>Examples:</span>
                <ul>
                    <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                </ul>
            </div>
        </details>
    </div>
</div>
<!-- NewOrderIDResponse Schema -->
<div class="schemama-container">
    <div class="schemama-header">
        <strong>NewOrderIDResponse</strong> <span class="typemama-label">object</span>
        <div>
        </div>
    </div>

    <div class="schemama-group">
        <details>
            <summary><strong>new_id</strong> <span class="typemama-label">integer</span> <span class="required">*</span></summary>
            <div class="examplemama-section">
                <p>Indicates the current order ID number. To be used for hash & create payment</p>
                <span>Examples:</span>
                <ul>
                    <li>01234567898</li>
                </ul>
            </div>
        </details>
    </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>HashedData</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>api_key</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>salt</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_1</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Sub-total 1 to be paid in cents</p>
        <span>Examples:</span>
        <ul><li>100</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_1_label</strong> <span class="typemama-label">string</span></summary>
      <div>
        <p>Label for subamount_1 in order breakdown.</p>
        <span>Examples:</span>
        <ul><li>"Order Total"</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_2</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Sub-total 2 to be paid in cents</p>
        <span>Examples:</span>
        <ul><li>0</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_3</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Sub-total 3 to be paid in cents</p>
        <span>Examples:</span>
        <ul><li>0</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_4</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Sub-total 4 to be paid in cents</p>
        <span>Examples:</span>
        <ul><li>0</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_5</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Sub-total 5 to be paid in cents</p>
        <span>Examples:</span>
        <ul><li>0</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>order_id</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
        <span>Examples:</span>
        <ul><li>10422</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>order_info</strong> <span class="typemama-label">string</span></summary>
      <div>
        <p>Order description</p>
        <span>Examples:</span>
        <ul><li>"This is the order info 10422."</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>order_desc</strong> <span class="typemama-label">string</span></summary>
      <div>
        <p>Label for order description.</p>
        <span>Examples:</span>
        <ul><li>"Description"</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>return_url</strong> <span class="typemama-label">string</span></summary>
      <div>
        <p>URL for user to be redirected to after payment is successfully made.</p>
        <span>Examples:</span>
        <ul><li>"https://www.threegmedia.com/"</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>callback_url</strong> <span class="typemama-label">string</span></summary>
      <div>
        <p>URL to be called upon payment attempt. Developers must make sure that calling both the redirect URL and callback URL will not result in double dispense. Make sure the callback URL is functioning to avoid issues with payment processing. If merchant does not have a callback_url prepared, they may use the default callback_url provided in the example of this documentation. The callback URL will be called using a GET method with the following sample JSON file as the input; { "successIndicator":"7Ay9W1PXp3N2QTS8aHLC", "Message":"Successful Payment", "OrderId":"131" }</p>
        <span>Examples:</span>
        <ul><li>"http://pocket-api.threeg.asia/callbase"</li></ul>
      </div>
    </details>

    <details>
      <summary><strong>discount</strong> <span class="typemama-label">integer</span></summary>
      <div>
        <p>Amount to be deducted from the subamount_1 till subamount_5, in cents</p>
        <span>Examples:</span>
        <ul><li>0</li></ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>HashedDataResponse</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>hashed_data</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <p>Hashed data containing transaction information.</p>
        <span>Examples:</span>
        <ul>
          <li>"9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20"</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>Create</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>api_key</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>salt</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>hashed_data</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <p>SHA256 hashed data. Must be generated via /payments/hash endpoint</p>
        <span>Examples:</span>
        <ul>
          <li>"9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_1</strong> <span class="typemama-label">integer</span></summary>
      <p>Sub-total 1 to be paid in cents</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>100</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_2</strong> <span class="typemama-label">integer</span></summary>
      <p>Sub-total 2 to be paid in cents</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>0</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_3</strong> <span class="typemama-label">integer</span></summary>
      <p>Sub-total 3 to be paid in cents</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>0</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_4</strong> <span class="typemama-label">integer</span></summary>
      <p>Sub-total 4 to be paid in cents</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>0</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_5</strong> <span class="typemama-label">integer</span></summary>
      <p>Sub-total 5 to be paid in cents</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>0</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_1_label</strong> <span class="typemama-label">string</span></summary>
      <p>Label for subamount_1 in order breakdown.</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"Order Total"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>subamount_2_label</strong> <span class="typemama-label">string</span></summary>
      <p>Label for subamount_2 in order breakdown.</p>
    </details>

    <details>
      <summary><strong>subamount_3_label</strong> <span class="typemama-label">string</span></summary>
      <p>Label for subamount_3 in order breakdown.</p>
    </details>

    <details>
      <summary><strong>subamount_4_label</strong> <span class="typemama-label">string</span></summary>
      <p>Label for subamount_4 in order breakdown.</p>
    </details>

    <details>
      <summary><strong>subamount_5_label</strong> <span class="typemama-label">string</span></summary>
      <p>Label for subamount_5 in order breakdown.</p>
    </details>

    <details>
      <summary><strong>order_id</strong> <span class="typemama-label">integer</span></summary>
      <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>10422</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_info</strong> <span class="typemama-label">string</span></summary>
      <p>Order description</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"This is the order info 10422."</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_desc</strong> <span class="typemama-label">string</span></summary>
      <p>Label for order description.</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"Description"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>return_url</strong> <span class="typemama-label">string</span></summary>
      <p>URL for user to be redirected to after payment is successfully made.</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"https://www.threegmedia.com/"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>callback_url</strong> <span class="typemama-label">string</span></summary>
      <p>URL to be called upon payment attempt. Developers must make sure that calling both the redirect URL and callback URL will not result in double dispense. Make sure the callback URL is functioning to avoid issues with payment processing. If merchant does not have a callback_url prepared, they may use the default callback_url provided in the example of this documentation. The callback URL will be called using a GET method with the following sample JSON file as the input; { "successIndicator":"7Ay9W1PXp3N2QTS8aHLC", "Message":"Successful Payment", "OrderId":"131" }</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"http://pocket-api.threeg.asia/callbase"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>discount</strong> <span class="typemama-label">integer</span></summary>
      <p>Amount to be deducted from the sum of subamount_1 till subamount_5</p>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>0</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>promo</strong> <span class="typemama-label">string</span></summary>
      <p>Label for discount amount in total breakdown</p>
    </details>

    <details>
      <summary><strong>promo_code</strong> <span class="typemama-label">string</span></summary>
      <p>Optional - Only if the merchant wants to show specific Promo Code for this order in the payment page</p>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>CreateResponse</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>payment_url</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"https://pocket-pay.threeg.asia/?tx_id=9086714 900001640a8c9581d72"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>success_indicator</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"7Mt2HFzywguxK0S6jDET"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_ref</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"64757"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>qr</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"4XVUkHFdhideMCPENze61e8oV3D8QG3zlnEwdlYkt4+6Hfl9gPzaj6TwoQlFp8DVV0gzKbncHcclHUVNwCj7GUAMijIP/ICG2j8lkAzDjeXWLIXv+ESLSl662s4dyHvxk2RZuXCkk32P8YFSdm3sorbg2W2eVvXQhyJv6GGJgkjHDy6+k1WGauhPL 2boL+S5EMloW4HJ4Lqw/lm8OGq63A=="</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>Status</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>api_key</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>salt</strong> <span class="typemama-label">string</span></summary>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_id</strong> <span class="typemama-label">integer</span> <span class="required">*</span></summary>
      <div>
        Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.
      </div>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>#010422</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>StatusResponse</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>method</strong> <span class="typemama-label">string</span></summary>
      <div>
        Payment method.
      </div>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"Pocket QR"</li>
          <li>"Card"</li>
          <li>"Biller"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>status_id</strong> <span class="typemama-label">integer</span></summary>
      <div>
        Status of transaction.
      </div>
      <div class="examplemama-section">
        <span>Enum:</span>
        <ul>
          <li>"Not Paid"</li>
          <li>"Paid"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>final_amount</strong> <span class="typemama-label">string</span></summary>
      <div>
        Transaction amount.
      </div>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"1.00"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_ref</strong> <span class="typemama-label">string</span></summary>
      <div>
        Unique order reference. Can be used as input for voiding function.
      </div>
      <div class="examplemama-section">
        <span>Examples:</span>
        <ul>
          <li>"64757"</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>VoidV2</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>api_key</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>salt</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_id</strong> <span class="typemama-label">integer</span></summary>
      <div>
        Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.
      </div>
      <div>
        <span>Examples:</span>
        <ul>
          <li>10422</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>admin_name</strong> <span class="typemama-label">string</span></summary>
      <div>
        Any admin name for logging. No verification will be made.
      </div>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"Pocket Admin"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>reason</strong> <span class="typemama-label">string</span></summary>
      <div>
        Reason for voiding for logging.
      </div>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"Voiding for test."</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>VoidV2Response</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>message</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"Order successfully marked as voided."</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>cref</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"123456"</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>VoidV3</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>api_key</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>salt</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>cref</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Reference generated from the user Pocket app receipt upon successful payment. Viewable by merchants from the Pocket Merchant Portal.</span>
        <span>Examples:</span>
        <ul>
          <li>"C000000000000"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>order_ref</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Reference generated from /payments/create endpoint for successful payment. Also returned by the /payments/status endpoint.</span>
        <span>Examples:</span>
        <ul>
          <li>"64757"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>admin_name</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Any admin name for logging. No verification will be made.</span>
        <span>Examples:</span>
        <ul>
          <li>"Pocket Admin"</li>
        </ul>
      </div>
    </details>

    <details>
      <summary><strong>reason</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Reason for voiding for logging.</span>
        <span>Examples:</span>
        <ul>
          <li>"Voiding for test."</li>
        </ul>
      </div>
    </details>
  </div>
</div>
<div class="schemama-container">
  <div class="schemama-header">
    <strong>VoidV3Response</strong> <span class="typemama-label">object</span>

  </div>

  <div class="schemama-group">
    <details>
      <summary><strong>message</strong> <span class="typemama-label">string</span></summary>
      <div>
        <span>Examples:</span>
        <ul>
          <li>"Order marked as voided."</li>
        </ul>
      </div>
    </details>
  </div>
</div>

</div>
