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
                    <p>Put your arms around me baby</p>
                    <div class="pldq-subtitle">Request Body (application/json) <span class="pldq-ev">Example Value | </span><button class="pldq-ev pldq-button">Schema</button></div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "Squeeze me oh so tight"}</code></pre>
                    <div class="pldq-subtitle">Response Example</div>
                    <p class="respons-tings">Curl</p>
                    <pre class="pldq-code-block"><code>curl -X POST /payments/getNewOrderId ...</code></pre>
                    <p class="respons-tings">Request URL</p>
                    <pre class="pldq-code-block"><code>/payments/getNewOrderId</code></pre>
                    <p class="respons-tings">Server response</p>
                </div>
            </div>

            <!-- /payments/hash -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/hash</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Stroke my cock at a medium pace</p>
                    <div class="pldq-subtitle">Request Body (application/json) <span class="pldq-ev">Example Value | </span><button class="pldq-ev pldq-button">Schema</button></div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "Play with my balls gently"}</code></pre>
                    <div class="pldq-subtitle">Response Example</div>
                    <p class="respons-tings">Curl</p>
                    <pre class="pldq-code-block"><code>curl -X POST /payments/hash ...</code></pre>
                    <p class="respons-tings">Request URL</p>
                    <pre class="pldq-code-block"><code>/payments/hash</code></pre>
                    <p class="respons-tings">Server response</p>
                </div>
            </div>

            <!-- /payments/create -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/create</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Say my name</p>
                    <div class="pldq-subtitle">Request Body (application/json) <span class="pldq-ev">Example Value | </span><button class="pldq-ev pldq-button">Schema</button></div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "It's your boyfriend"}</code></pre>
                    <div class="pldq-subtitle">Response Example</div>
                    <p class="respons-tings">Curl</p>
                    <pre class="pldq-code-block"><code>curl -X POST /payments/create ...</code></pre>
                    <p class="respons-tings">Request URL</p>
                    <pre class="pldq-code-block"><code>/payments/create</code></pre>
                    <p class="respons-tings">Server response</p>
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
                    <p>Push it in and out at a medium pace</p>
                    <div class="pldq-subtitle">Request Body (application/json)</div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "Talk dirty to me"}</code></pre>
                </div>
            </div>

            <!-- /payments/voidV3 -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span><button class="pldq-method">POST</button> /payments/voidV3</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Tell me you love me</p>
                    <div class="pldq-subtitle">Request Body (application/json)</div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "Even if it's not true"}</code></pre>
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
                    <p>I don't care just tell me lies</p>
                    <div class="pldq-subtitle">Request Body (application/json)</div>
                    <p class="respons-tings">Example payload</p>
                    <pre class="pldq-code-block"><code>{"lyrics": "Touch my nipples"}</code></pre>
                </div>
            </div>

            <!-- Schemas Section -->
            <h1>Schemas</h1>
            <p>Definitions for requests and responses</p>

            <!-- 12 placeholder schema dropdowns -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span>Schema 1</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Schema lyrics go here 🎶</p>
                </div>
            </div>
            <!-- Repeat the above block 11 more times -->
            <!-- Tip: use a loop in JS later if this is static content -->

            <!-- Example for one more schema -->
            <div class="pldq-dropdown">
                <div class="pldq-header" onclick="togglePldqDropdown(this)">
                    <span>Schema 2</span>
                    <span class="pldq-arrow">▼</span>
                </div>
                <div class="pldq-dropdown-content">
                    <p>Suck on my toes baby</p>
                </div>
            </div>

            <!-- Repeat until Schema 12 -->
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