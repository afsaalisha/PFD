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
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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

            <!-- /payments/voidV3 -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/voidV3</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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
                    <p>Generate ‘new_id’ which will be used in the ‘order_id' parameter needed to create a payment</p>
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
                                    <details open>
                                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                                        <div class="example-section">
                                            <span>Examples:</span>
                                            <ul>
                                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                                            </ul>
                                        </div>
                                    </details>

                                    <details open>
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

                    <button class="pldq-try">Try out</button>

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
                                <td>Success</td>
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

            <!-- Schemas Section -->
            <h1>Schemas</h1>

            <!-- 12 placeholder schema dropdowns -->
            <div class="schema-container">
                <div class="schema-header">
                    <strong>NewOrderID</strong> <span class="type-label">object</span>
                    <div>
                        <button onclick="toggleAllSchemas(true)">Expand all</button>
                        <button onclick="toggleAllSchemas(false)">Collapse all</button>
                    </div>
                </div>

                <div class="schema-group">
                    <details open>
                        <summary><strong>api_key</strong> <span class="type-label">string</span> <span class="required">*</span></summary>
                        <div class="example-section">
                            <span>Examples:</span>
                            <ul>
                                <li>"XnUgH1PyIZ8p1iF2IbKUiOBzdrLPNnWq"</li>
                            </ul>
                        </div>
                    </details>

                    <details open>
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

    </main>

    <!-- Default Right Panel -->
    <aside class="right-panel" id="defaultRightPanel">
        <div class="right-box" id="rightContent">
            <img src="/PFD/public/images/yoshi.jpg" alt="Sample 1" class="right-img">
            <p>kiyoshi :3</p>
            <img src="/PFD/public/images/yocchi.jpg" alt="Sample 2" class="right-img">
        </div>
    </aside>

    <!-- Guide Right Panel -->
    <aside class="guide-right-panel" id="guideRightPanel" style="display: none;">
        <button id="closeGuidePanel" class="closeBtn">✖</button>
        <div class="guide-right-box">
            <div class="rp-subtitle">Response Example</div>
            <p class="rp-text">
                Curl
                <button class="copy-btn" onclick="copyToClipboard('#curlCode')">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="pldq-code-block"><code id="curlCode">curl -X <span class="gron">'POST'</span> \
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
                <button class="copy-btn" onclick="copyToClipboard('#requestUrlCode')">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </button>
            </p>
            <pre class="pldq-code-block"><code id="requestUrlCode">/proxy?proxy-token=tjxcrka&url=http%3A%2F%2Fpay.threeg.asia%2Fpayments%2FgetNewOrderId</code></pre>

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
                        <td>Response body <button class="copy-btn" onclick="copyToClipboard('#requestResponseBodyCode')">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="pldq-code-block"><code id="requestResponseBodyCode">{
  "new_id": <span class="gron">"17346779538593713"</span>
}</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>Response header
                            <button class="copy-btn" onclick="copyToClipboard('#requestResponseHeaderCode')">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                            </button>
                            <pre class="pldq-code-block"><code id="requestResponseHeaderCode"> cache-control: no-cache 
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


</div>
</div>

<?php include 'layouts/footer.php'; ?>