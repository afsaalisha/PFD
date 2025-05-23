<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/guide-sidebar.php'; ?>


    <!-- Main + Right Panel Container -->
    <div class="main-and-right">

        <main class="doc-content">
            <h1>Payment Link & Dynamic QR</h1>
            <p>Generate payment link & dynamic qr for Pocket Pay gateway.</p>

            <!-- /payments/getNewOrderId -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/getNewOrderId</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment.</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Generate new Order ID</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>NewOrderID</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel1">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>



                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
  "new_id": <span class="red">1234567898</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>NewOrderIDResponse</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>new_id</strong> <span class="type-label">integer</span></summary>
                                                    <p>Indicates the current order ID number. To be used for hash & create payment</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span>
                                                        <ul>
                                                            <li>#0=1234567898</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>210</td>
                                <td>Failed to insert into database. Refer to the message for more info</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>Correct API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>401</td>
                                <td>No API key submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- /payments/hash -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/hash</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Generate the SHA256 hash data needed for creating the payment link & dynamic qr. Make sure to generate the new order ID before generating hash data.</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Generate hash data.</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>,
  "subamount_1": <span class="red">100</span>,
  "subamount_1_label": <span class="gron">"Order Total"</span>,
  "subamount_2": <span class="red">0</span>,
  "subamount_3": <span class="red">0</span>,
  "subamount_4": <span class="red">0</span>,
  "subamount_5": <span class="red">0</span>,
  "order_id": <span class="red">10422</span>,
  "order_info": <span class="gron">"This is the order info 10422."</span>,
  "order_desc": <span class="gron">"Description"</span>,
  "return_url": <span class="gron">"https://www.threegmedia.com/"</span>,
  "callback_url": <span class="gron">"http://pocket-api.threeg.asia/callbase"</span>,
  "discount": <span class="red">0</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>HashedData</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_1</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 1 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=100</li>
                                            </ul>
                                        </div>
                                    </details>


                                    <details>
                                        <summary><strong>subamount_1_label</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Label for subamount_1 in order breakdown.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Order Total"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_2</strong> <span class="type-label">interger</span></summary>
                                        <p>Sub-total 2 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_3</strong> <span class="type-label">interger</span></summary>
                                        <p>Sub-total 3 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_4</strong> <span class="type-label">interger</span></summary>
                                        <p>Sub-total 4 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_5</strong> <span class="type-label">interger</span></summary>
                                        <p>Sub-total 5 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_id</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=10422</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_info</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Order description</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="This is the order info 10422."</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_desc</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Label for order description.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Description"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>return_url</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>URL for user to be redirected to after payment is successfully made.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="https://www.threegmedia.com/"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>callback_url</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>URL to be called upon payment attempt. Developers must make sure that calling both the redirect URL and callback URL will not result in double dispense. Make sure the callback URL is functioning to avoid issues with payment processing. If merchant does not have a callback_url prepared, they may use the default callback_url provided in the example of this documentation. The callback URL will be called using a GET method with the following sample JSON file as the input; { "successIndicator":"7Ay9W1PXp3N2QTS8aHLC", "Message":"Successful Payment", "OrderId":"131" }</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="http://pocket-api.threeg.asia/callbase"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>discount</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Amount to be deducted from the susubamount_1 till subamount_5, in cents <span class="type-label">array</span></p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel2">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>



                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
"hashed_data": <span class="gron">"9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20"</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>HashedDataResponse</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>hashed_data</strong><span class="type-label">string</span></summary>
                                                    <p>Hashed data containing transaction information. <span class="type-label">array</span></p>
                                                    <div class="example-section">
                                                        <span>Examples:</span>
                                                        <ul>
                                                            <li>#0="9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20"</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                                <details>
                                                    <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                                    <div class="example-section">
                                                        <span>Examples:</span>
                                                        <ul>
                                                            <li>"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>210</td>
                                <td>Failed to insert into database. Refer to the message for more info</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>Correct API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>401</td>
                                <td>No API key submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- /payments/create -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/create</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Generate the payment URL & dynamic QR to be shown to the user in order to collect payment. Make sure to generate the hash data before generating the payment link & dynamic qr.</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- <span class="gron"></span> <span class="red"></span> -->

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Generate new Order ID</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>,
  "hashed_data": <span class="gron">"9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20"</span>,
  "subamount_1": <span class="red">100</span>,
  "subamount_2": <span class="red">0</span>,
  "subamount_3": <span class="red">0</span>,
  "subamount_4": <span class="red">0</span>,
  "subamount_5": <span class="red">0</span>,
  "subamount_1_label": <span class="gron">"Order Total"</span>,
  "subamount_2_label": <span class="gron">"string"</span>,
  "subamount_3_label": <span class="gron">"string"</span>,
  "subamount_4_label": <span class="gron">"string"</span>,
  "subamount_5_label": <span class="gron">"string"</span>,
  "order_id": <span class="red">10422</span>,
  "order_info": <span class="gron">"This is the order info 10422."</span>,
  "order_desc": <span class="gron">"Description"</span>,
  "return_url": <span class="gron">"https://www.threegmedia.com/"</span>,
  "callback_url": <span class="gron">"http://pocket-api.threeg.asia/callbase"</span>,
  "discount": <span class="red">0</span>,
  "promo": <span class="gron">"string"</span>,
  "promo_code": <span class="gron">"string"</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>Create</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_1</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 1 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=100</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_2</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 2 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_3</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 3 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_4</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 4 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_5</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Sub-total 5 to be paid in cents</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_1_label</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Label for subamount_1 in order breakdown.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Order Total"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_2_label</strong> <span class="type-label">string</span></summary>
                                        <p>Label for subamount_2 in order breakdown.</p>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_3_label</strong> <span class="type-label">string</span></summary>
                                        <p>Label for subamount_3 in order breakdown.</p>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_4_label</strong> <span class="type-label">string</span></summary>
                                        <p>Label for subamount_4 in order breakdown.</p>
                                    </details>

                                    <details>
                                        <summary><strong>subamount_5_label</strong> <span class="type-label">string</span></summary>
                                        <p>Label for subamount_5 in order breakdown.</p>
                                    </details>

                                    <details>
                                        <summary><strong>order_id</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=10422</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_info</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Order description</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="This is the order info 10422."</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_desc</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Label for order description.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Description"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>return_url</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>URL for user to be redirected to after payment is successfully made.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="https://www.threegmedia.com/"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>callback_url</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>URL to be called upon payment attempt. Developers must make sure that calling both the redirect URL and callback URL will not result in double dispense. Make sure the callback URL is functioning to avoid issues with payment processing. If merchant does not have a callback_url prepared, they may use the default callback_url provided in the example of this documentation. The callback URL will be called using a GET method with the following sample JSON file as the input; { "successIndicator":"7Ay9W1PXp3N2QTS8aHLC", "Message":"Successful Payment", "OrderId":"131" }</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="http://pocket-api.threeg.asia/callbase"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>discount</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Amount to be deducted from the susubamount_1 till subamount_5, in cents <span class="type-label">array</span></p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=0</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>promo</strong> <span class="type-label">string</span> </summary>
                                        <p>Label for discount amount in total breakdown</p>
                                    </details>

                                    <details>
                                        <summary><strong>promo_code</strong> <span class="type-label">string</span> </summary>
                                        <p>Optional - Only if the merchant wants to show specific Promo Code for this order in the payment page</p>
                                    </details>

                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel3">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
  "payment_url": <span class="gron">"https://pocket-pay.threeg.asia/?tx_id=9086714 900001640a8c9581d72"</span>,
  "success_indicator": <span class="gron">"7Mt2HFzywguxK0S6jDET"</span>,
  "order_ref": <span class="gron">"64757"</span>,
  "qr": <span class="gron">"4XVUkHFdhideMCPENze61e8oV3D8QG3zlnEwdlYkt4+6Hfl9gPzaj6TwoQlFp8DVV0gzKbncHcclHUVNwCj7GUAMijIP/ICG2j8lkAzDjeXWLIXv+ESLSl662s4dyHvxk2RZuXCkk32P8YFSdm3sorbg2W2eVvXQhyJv6GGJgkjHDy6+k1WGauhPL 2boL+S5EMloW4HJ4Lqw/lm8OGq63A=="</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>CreateResponse</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>payment_url</strong> <span class="type-label">string</span></summary>
                                                    <p>URL for customer to make payment from.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="https://pocket-pay.threeg.asia/?tx_id=9086714 900001640a8c9581d72"</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                                <details>
                                                    <summary><strong>success_indicator</strong> <span class="type-label">string</span></summary>
                                                    <p>Unique string to indicate if the transaction has been successfully paid. This will be passed via GET to the callback_url submitted in this API call.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="7Mt2HFzywguxK0S6jDET"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                                <details>
                                                    <summary><strong>order_ref</strong> <span class="type-label">string</span></summary>
                                                    <p>Unique order reference. Can be used as input for voiding function.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="64757"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                                <details>
                                                    <summary><strong>qr</strong> <span class="type-label">string</span></summary>
                                                    <p>A dynamic QR string that is scannable using the Pocket mobile app for making Pocket payment.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="4XVUkHFdhideMCPENze61e8oV3D8QG3zlnEwdlYkt4+6Hfl9gPzaj6TwoQlFp8DVV0gzKbncHcclHUVNwCj7GUAMijIP/ICG2j8lkAzDjeXWLIXv+ESLSl662s4dyHvxk2RZuXCkk32P8YFSdm3sorbg2W2eVvXQhyJv6GGJgkjHDy6+k1WGauhPL 2boL+S5EMloW4HJ4Lqw/lm8OGq63A=="</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>210</td>
                                <td>Failed to insert into database. Refer to the message for more info</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>211</td>
                                <td>Total chargeable is zero</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>212</td>
                                <td>No Order ID submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>213</td>
                                <td>No Order Info submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>214</td>
                                <td>No Subamount 1 Label submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>215</td>
                                <td>Invalid Return URL submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>216</td>
                                <td>Incorrect Hashed Data submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>217</td>
                                <td>No Subamount 1 submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>218</td>
                                <td>No Discount submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Duplicate Order ID detected</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>220</td>
                                <td>Unable to create new transactions</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>221</td>
                                <td>Unable to get QR</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Utility Section -->
            <h1>Utility</h1>
            <p>Tools for querying and managing payments</p>

            <!-- /payments/status -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/status</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Query the latest status of a transaction.</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Query transaction status</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>,
  "order_id": <span class="red">"10422"</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>Status</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_id</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=10422</li>
                                            </ul>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel4">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>



                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
  "method": <span class="gron">"Pocket QR"</span>,
  "status_id": <span class="gron">"Not Paid"</span>,
  "final_amount": <span class="gron">"1.00"</span>,
  "order_ref": <span class="gron">"64757"</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>StatusResponse</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>method</strong> <span class="type-label">string</span></summary>
                                                    <p>Payment method.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span>
                                                        <ul>
                                                            <li>#0="Pocket QR"</li>
                                                            <li>#1="Card"</li>
                                                            <li>#2="Biller"</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                                <details>
                                                    <summary><strong>status_id</strong> <span class="type-label">interger</span></summary>
                                                    <p>Status of transaction.</p>
                                                    <div class="example-section">
                                                        <span>Enum:</span>
                                                        <ul>
                                                            <li>#0="Not Paid"</li>
                                                            <li>#1="Paid"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                                <details>
                                                    <summary><strong>final_amount</strong> <span class="type-label">string</span></summary>
                                                    <p>Transaction amount.</p>
                                                    <div class="example-section">
                                                        <span>Examples:</span>
                                                        <ul>
                                                            <li>#0="1.00"</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                                <details>
                                                    <summary><strong>order_ref</strong> <span class="type-label">string</span></summary>
                                                    <p>Unique order reference. Can be used as input for voiding function.</p>
                                                    <div class="example-section">
                                                        <span>Enum:</span>
                                                        <ul>
                                                            <li>#0="64757"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>211</td>
                                <td>Order not found</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>401</td>
                                <td>No API key submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- /payments/voidV3 -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/voidV3</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Voiding is only available for payments made on the same day- Take in either one of cref or order_ref (depending on which reference is provided)</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Void transaction. Include either cref OR order ref.</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>,
  "cerf": <span class="gron">"C000000000000"</span>,
  "order_ref": <span class="gron">"64757"</span>,
  "admin_name": <span class="gron">"Pocket Admin"</span>,
  "reason": <span class="gron">"Voiding for test."</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>Any of</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>cref</strong> <span class="type-label">string</span></summary>
                                        <div class="example-section">
                                            <p>Reference generated from the user Pocket app receipt upon successful payment. Viewable by merchants from the Pocket Merchant Portal.</p>
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="C000000000000"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_ref</strong> <span class="type-label">string</span></summary>
                                        <div class="example-section">
                                            <p>Reference generated from /payments/create endpoint for successful payment. Also returned by the /payments/status endpoint.</p>
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="64757"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>admin_name</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Any admin name for logging. No verification will be made.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Pocket Admin"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>reason</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Reason for voiding for logging.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Voiding for test."</li>
                                            </ul>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel5">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>



                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
  "message": <span class="gron">"Order marked as voided."</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>VoidV3Response</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>message</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="Order marked as voided."</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>401</td>
                                <td>No API key submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>402</td>
                                <td>Unable to void order</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>411</td>
                                <td>Voiding period has expired. Refer to the message for more info.</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key and salt</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>413</td>
                                <td>Transaction not found in the database. Refer to the message for more info.</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>414</td>
                                <td>Order not found in the database</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Deprecated Section -->
            <h1>Deprecated</h1>
            <p>Old endpoints - avoid using in new implementations</p>

            <!-- /payments/voidV2 -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/voidV2</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Voiding is only available for payments made on the same day- Deprecated on May 2025. Highly recommended to use Ipayments/voidV3 instead.</p>
                    <div class="pldq-subtitle">
                        Request Body (application/json)
                        <div class="pldq-tabs">
                            <button class="pldq-tab active" onclick="switchTab(this, 'example')">Example Value</button>
                            <button class="pldq-tab" onclick="switchTab(this, 'schema')">Schema</button>
                        </div>
                    </div>

                    <!-- Tab content -->
                    <div class="pldq-tab-content" data-tab="example">
                        <p class="respons-tings">Void transaction</p>
                        <pre class="pldq-code-block"><code>{
  "api_key": <span class="gron">"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</span>,
  "salt": <span class="gron">"FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</span>,
  "order_ref": <span class="red">10422</span>,
  "admin_name": <span class="gron">"Pocket Admin"</span>,
  "reason": <span class="gron">"Voiding for test."</span>
}</code></pre>
                    </div>

                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                        <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                            <p class="respons-tings">Schema Description</p>

                            <div class="schema-container">
                                <div class="schema-header">
                                    <strong>NewOrderID</strong> <span class="type-label">object</span>
                                    <div>
                                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                    </div>
                                </div>

                                <div class="schema-group">
                                    <details>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>salt</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>order_id</strong> <span class="type-label">interger</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <p>Unique order ID. Maximum of 18 integers. Must be generated via /payments/getNewOrderId endpoint.</p>
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0=10422</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>admin_name</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Any admin name for logging. No verification will be made.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Pocket Admin"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details>
                                        <summary><strong>reason</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <p>Reason for voiding for logging.</p>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>#0="Voiding for test."</li>
                                            </ul>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="pldq-try" data-target="guideRightPanel6">Try out</button>

                    <div class="pldq-subtitle">Responses</div>
                    <table class="table-stuff">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>
                                    Success
                                    <br><br>
                                    <div>
                                        <strong>Media type</strong><br>
                                        <div class="pldq-media-box">application/json</div>
                                        <p>Controls <span class="red">Accept</span> header.</p>
                                    </div>



                                    <div class="pldq-tab-content" data-tab="example">
                                        <pre class="pldq-code-block"><code>{
  "message": <span class="gron">"Order successfully marked as voided."</span>,
  "cref": <span class="gron">"123456"</span>
}</code></pre>
                                    </div>

                                    <div class="pldq-tab-content" data-tab="schema" style="display: none;">
                                        <p class="respons-tings">Schema Description</p>
                                        <div class="schema-container">
                                            <div class="schema-header">
                                                <strong>NewOrderID</strong> <span class="type-label">object</span>
                                                <div>
                                                    <button onclick="toggleAllSchemas(true)">Expand all</button>
                                                    <button onclick="toggleAllSchemas(false)">Collapse all</button>
                                                </div>
                                            </div>

                                            <div class="schema-group">
                                                <details>
                                                    <summary><strong>message</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="Order marked as voided."</li>
                                                        </ul>
                                                    </div>
                                                </details>

                                                <details>
                                                    <summary><strong>cref</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                                    <div class="example-section">
                                                        <span>Examples:</span><span class="type-label">array</span>
                                                        <ul>
                                                            <li>#0="123456"</li>
                                                        </ul>
                                                    </div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>201</td>
                                <td>Already voided</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>202</td>
                                <td>Unable to void</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>203</td>
                                <td>Order not found in Pocket's DB</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>204</td>
                                <td>Unable to save void log</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>205</td>
                                <td>Order not found in SPP's DB</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>211</td>
                                <td>Please pass order ref</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>212</td>
                                <td>Invalid API key and salt</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>401</td>
                                <td>No API key submitted</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>412</td>
                                <td>Invalid API key</td>
                                <td class="italic">No links</td>
                            </tr>
                            <tr>
                                <td>428</td>
                                <td>Insufficient information POSTed</td>
                                <td class="italic">No links</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

    </div>

    </main>

    <!-- Default Right Panel -->
    <aside class="right-panel" id="defaultRightPanel">
        <div class="right-box" id="rightContent">
            <img src="/PFD/public/images/yoshi.jpg" alt="Sample 1" class="right-img">
            <p>kiyoshi :3</p>
            <img src="/PFD/public/images/yocchi.jpg" alt="Sample 2" class="right-img">
        </div>
    </aside>

    <!-- neworderid Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel1" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode1">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="pldq-code-block"><code id="curlCode1">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=tjxcrka&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FgetNewOrderId \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode1">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="pldq-code-block"><code id="requestUrlCode1">/proxy?proxy-token=tjxcrka&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FgetNewOrderId</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>200</td>
                        <td>Response body <button class="copy-btn" data-copy-target="requestResponseBodyCode1">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="pldq-code-block"><code id="requestResponseBodyCode1">{
  "new_id": <span class="gron">"17346779538593713"</span>
}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode1">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="pldq-code-block"><code id="requestResponseHeaderCode1"> cache-control: no-cache 
 content-encoding: gzip 
 content-type: application/json; charset=UTF-8 
 date: Fri,09 May 2025 04:17:00 GMT 
 etag: W/"1e-is5GJFLy2kLFN6VpWfemHKpS1Vc" 
 expires: -1 
 pragma: no-cache 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 status: 200 OK 
 x-powered-by: PHP/7.3.21</code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>

    <!-- hash Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel2" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode2">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="curlCode2">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fhash \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2",
  "subamount_1": 100,
  "subamount_1_label": "Order Total",
  "subamount_2": 0,
  "subamount_3": 0,
  "subamount_4": 0,
  "subamount_5": 0,
  "order_id": 10422,
  "order_info": "This is the order info 10422.",
  "order_desc": "Description",
  "return_url": "https://www.threegmedia.com/",
  "callback_url": "http://pocket-api.threeg.asia/callbase",
  "discount": 0
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode2">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="requestUrlCode2">/proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fhash</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>200</td>
                        <td>Response body <button class="copy-btn" data-copy-target="#requestResponseBodyCode2">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseBodyCode2">{
  "hashed_data": <span class="gron">"5275876304dba644b111c19d44ed0da81ca797aaf1371abf2e0b45126f8a4993"</span>
}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode2">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseHeaderCode2"> cache-control: no-cache 
 content-encoding: gzip 
 content-type: application/json; charset=UTF-8 
 date: Wed,21 May 2025 07:07:11 GMT 
 etag: W/"52-5QOK0ZvtFj8Estpaq+ZKt3msi5Y" 
 expires: -1 
 pragma: no-cache 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 status: 200 OK 
 x-powered-by: PHP/7.3.21 </code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>

    <!-- create Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel3" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode3">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="curlCode3">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fcreate \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2",
  "hashed_data": "9f3e806346622936152aedd5e95a7db0978f623b8efddda356a0c291ec747e20",
  "subamount_1": 100,
  "subamount_2": 0,
  "subamount_3": 0,
  "subamount_4": 0,
  "subamount_5": 0,
  "subamount_1_label": "Order Total",
  "subamount_2_label": "string",
  "subamount_3_label": "string",
  "subamount_4_label": "string",
  "subamount_5_label": "string",
  "order_id": 10422,
  "order_info": "This is the order info 10422.",
  "order_desc": "Description",
  "return_url": "https://www.threegmedia.com/",
  "callback_url": "http://pocket-api.threeg.asia/callbase",
  "discount": 0,
  "promo": "string",
  "promo_code": "string"
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode3">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="requestUrlCode3">/proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fcreate</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>216</td>
                        <td>Response body <button class="copy-btn" data-copy-target="#requestResponseBodyCode3">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseBodyCode3">{
  "message": <span class="gron">"Incorrect Hashed Data submitted."</span>
}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode3">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseHeaderCode3"> cache-control: no-cache 
 content-length: 46 
 content-type: application/json; charset=UTF-8 
 date: Wed,21 May 2025 07:32:07 GMT 
 etag: W/"2e-K3ISpzCI6PERzORCUd6QR35HEbY" 
 expires: -1 
 pragma: no-cache 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 status: 216 ERR 
 x-powered-by: PHP/7.3.21 </code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>

    <!-- status Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel4" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode4">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="curlCode4">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fstatus \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2",
  "order_id": 10422
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode4">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="requestUrlCode4">/proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2Fstatus</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>200</td>
                        <td>Response body <button class="copy-btn" data-copy-target="#requestResponseBodyCode4">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseBodyCode4">{
  "method": <span class="gron">"Pocket QR"</span>,
  "status_id": <span class="red">0</span>,
  "final_amount": <span class="gron">"1.00"</span>
}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode4">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseHeaderCode4"> cache-control: no-cache 
 content-encoding: gzip 
 content-type: application/json; charset=UTF-8 
 date: Wed,21 May 2025 07:45:55 GMT 
 etag: W/"3a-isPsjgRIQuZ0WHoGsbI70pHoncQ" 
 expires: -1 
 pragma: no-cache 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 status: 200 OK 
 x-powered-by: PHP/7.3.21</code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>

    <!-- v3 Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel5" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode5">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="curlCode5">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FvoidV3 \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2",
  "cref": "C000000000000",
  "order_ref": "64757",
  "admin_name": "Pocket Admin",
  "reason": "Voiding for test."
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode5">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="requestUrlCode5">/proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FvoidV3</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>200</td>
                        <td>Response body <button class="copy-btn" data-copy-target="#requestResponseBodyCode5">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseBodyCode5">Action 'voidV3' was not found on handler 'payments'<br>#0 [internal function]: Phalcon\Mvc\Dispatcher-&gt;_throwDispatchException('Action 'voidV3'...', 5)<br />
#1 [internal function]: Phalcon\Dispatcher-&gt;dispatch()<br />
#2 C:\wamp64\www\single-page-payment-pocket\public\index.php(41): Phalcon\Mvc\Application-&gt;handle()<br />
#3 {main}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode5">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseHeaderCode5"> cache-control: no-cache 
 content-encoding: gzip 
 content-type: text/html; charset=UTF-8 
 date: Wed,21 May 2025 07:50:04 GMT 
 etag: W/"157-JLf3BDhUfFaC0lLbg/wMThe5UOQ" 
 expires: -1 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 x-powered-by: PHP/7.3.21 </code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>

    <!-- v2 Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel6" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" data-copy-target="#curlCode6">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="curlCode6">curl -X <span class="gron">'POST'</span> \
  /proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FvoidV2 \
  -H <span class="gron">'accept: application/json'</span> \
  -H <span class="gron">'Content-Type: application/json'</span> \
  -H <span class="gron">'x-swaggerhub-cookie: '</span> \
  -d <span class="gron">'{
  "api_key": "XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq",
  "salt": "FOLzaoJSdbgaNiVVA73vGiIR7yovZury4OdOalPFoWTdKmDVxfoJCJYTs4nhUFS2"
  "order_id": 10422,
  "admin_name": "Pocket Admin",
  "reason": "Voiding for test."
}'</span></code></pre>

            <p class="rp-text">
                Request URL
                <button class="copy-btn" data-copy-target="#requestUrlCode6">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="rp-code-block"><code id="requestUrlCode6">/proxy?proxy-token=t57012g&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FvoidV2</code></pre>

            <table class="rp-table-stuff">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>205</td>
                        <td>Response header
                            <button class="copy-btn" data-copy-target="#requestResponseHeaderCode6">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="rp-td-code-block"><code id="requestResponseHeaderCode6"> cache-control: no-cache 
 content-length: 0 
 content-type: application/json; charset=UTF-8 
 date: Wed,21 May 2025 07:58:55 GMT 
 etag: W/"2a-Q453jlrBYEYHN1Za20rjF300fjM" 
 expires: -1 
 pragma: no-cache 
 ratelimit: "10000-in-1min"; r=9999; t=60 
 ratelimit-policy: "10000-in-1min"; q=10000; w=60; pk=:ZDZkOTM5M2UwNzk5: 
 server: nginx 
 status: 205 ERR 
 x-powered-by: PHP/7.3.21</code></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>


</div>



<?php include 'layouts/footer.php'; ?>