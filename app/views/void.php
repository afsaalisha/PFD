<?php include 'layouts/header.php'; ?>
<div class="page-container">
  <?php include 'layouts/merchant-sidebar.php'; ?>

  <main class="doc-content void-content">

    <div class="void-content-header">
      <h2>How to Void Transactions?</h2>
    </div>

    <hr />

    <p style="text-align:left; max-width:900px; margin:0;">
      Void could be done by Business Managers or Company profiles in the void tab under “Statement”. They could create void pin on the web portal and would later be used in the Pocket Merchant app to void.
    </p>

    <div class="void-grid">
      <div class="void-step-box">
        <span class="step-number">1</span>
        <p>Click on void tab</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/1.png" alt="Step 1 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">2</span>
        <p>Click on “Create New Pin” button</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/2.png" alt="Step 2 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">3</span>
        <p>Create 4 digit pin number</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/3.png" alt="Step 3 image part 1" class="void-image" />
        </div>
        <div class="void-image-wrapper" style="margin-top: 1rem;">
          <img src="../public/images/void/4.png" alt="Step 3 image part 2" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">4</span>
        <p>Void pin successfully created would show on the void tab</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/5.png" alt="Step 4 image" class="void-image" />
        </div>
      </div>

      </div>

  <p style="margin: 2rem auto;">
    Void could be done by Business Managers or Company profiles in the void tab under “Statement”. They could create void pin on the web portal and would later be used in the Pocket Merchant app to void.
  </p>

      <div class="void-grid">
      <div class="void-step-box">
        <span class="step-number">5</span>
        <p>Statement tab will show all transactions</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/6.png" alt="Step 5 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">6</span>
        <p>Click on the void action button</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/7.png" alt="Step 6 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">7</span>
        <p>Enter 4 digit pin set up earlier</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/8.png" alt="Step 7 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">8</span>
        <p>Enter reason for voiding</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/9.png" alt="Step 8 image part 1" class="void-image" />
        </div>
        <div class="void-image-wrapper" style="margin-top: 1rem;">
          <img src="../public/images/void/10.png" alt="Step 8 image part 2" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">9</span>
        <p>Successful voiding</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/11.png" alt="Step 9 image" class="void-image" />
        </div>
      </div>

      <div class="void-step-box">
        <span class="step-number">10</span>
        <p>Successful void will be shown on void history</p>
        <div class="void-image-wrapper">
          <img src="../public/images/void/12.png" alt="Step 10 image" class="void-image" />
        </div>
      </div>
    </div>


  </main>

  <?php include 'layouts/footer.php'; ?>

  <!-- Modal for image preview -->
  <div class="image-modal" id="imagePreviewModal">
    <span class="image-modal-close">&times;</span>
    <img class="image-modal-content" id="modalImage" />
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const modal = document.getElementById("imagePreviewModal");
      const modalImg = document.getElementById("modalImage");
      const closeBtn = document.querySelector(".image-modal-close");

      document.querySelectorAll(".void-image").forEach(img => {
        img.addEventListener("click", () => {
          modal.classList.add("show");
          modalImg.src = img.src;
          modalImg.alt = img.alt;
        });
      });

      closeBtn.addEventListener("click", () => {
        modal.classList.remove("show");
      });

      modal.addEventListener("click", (e) => {
        if (e.target === modal) {
          modal.classList.remove("show");
        }
      });
    });
  </script>