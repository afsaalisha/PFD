<?php include 'layouts/header.php'; ?>
<div class="page-container">
  <?php include 'layouts/merchant-sidebar.php'; ?>

  <main class="doc-content">

    <div class="content-header">
      <h2>How to Void Transactions?</h2>
    </div>

    <p style="text-align:left; max-width:900px; margin:0;">
      Void could be done by Business Managers or Company profiles in the void tab under “Statement”. They could create void pin on the web portal and would later be used in the Pocket Merchant app to void.
    </p>

    <div class="voidz-step">
      <h2 class="step-title">Step 1</h2>
      <p class="step-context">Click on void tab</p>
      <div class="image-container">
        <img src="../public/images/void/1.png" alt="Step 1 image" class="preview-image" />
      </div>
    </div>

    <div class="voidz-step">
      <h2 class="step-title">Step 2</h2>
      <p class="step-context">Click on “Create New Pin” button</p>
      <div class="image-container">
        <img src="../public/images/void/2.png" alt="Step 2 image" class="preview-image" />
      </div>
    </div>

<div class="voidz-step">
  <h2 class="step-title">Step 3</h2>
  <p class="step-context">Create 4 digit pin number</p>

  <div class="image-container">
    <img src="../public/images/void/3.png" alt="Step 3 image part 1" class="preview-image" />
  </div>

  <div class="image-container" style="margin-top: 1rem;">
    <img src="../public/images/void/4.png" alt="Step 3 image part 2" class="preview-image" />
  </div>
</div>

</div>



    <div class="voidz-step">
      <h2 class="step-title">Step 4</h2>
      <p class="step-context">Void pin successfully created would show on the void tab</p>
      <div class="image-container">
        <img src="../public/images/void/5.png" alt="Step 4 image" class="preview-image" />
      </div>
    </div>

    <p style="text-align:left; max-width:900px; margin:0;">
      Void button will only appear for current transactions on same day.<br />
      For transactions that has passed one day, voiding are not possible
    </p>

    <div class="voidz-step">
      <h2 class="step-title">Step 5</h2>
      <p class="step-context">Statement tab will show all transactions</p>
      <div class="image-container">
        <img src="../public/images/void/6.png" alt="Step 5 image" class="preview-image" />
      </div>
    </div>

    <div class="voidz-step">
      <h2 class="step-title">Step 6</h2>
      <p class="step-context">Click on the void action button</p>
      <div class="image-container">
        <img src="../public/images/void/7.png" alt="Step 6 image" class="preview-image" />
      </div>
    </div>

    <div class="voidz-step">
      <h2 class="step-title">Step 7</h2>
      <p class="step-context">Enter 4 digit pin set up earlier</p>
      <div class="image-container">
        <img src="../public/images/void/8.png" alt="Step 7 image" class="preview-image" />
      </div>
    </div>

<div class="voidz-step">
  <h2 class="step-title">Step 8</h2>
  <p class="step-context">Enter reason for voiding</p>

  <div class="image-container">
    <img src="../public/images/void/9.png" alt="Step 8 image part 1" class="preview-image" />
  </div>

  <div class="image-container" style="margin-top: 1rem;">
    <img src="../public/images/void/10.png" alt="Step 8 image part 2" class="preview-image" />
  </div>
</div>



    <div class="voidz-step">
      <h2 class="step-title">Step 9</h2>
      <p class="step-context">Successful voiding</p>
      <div class="image-container">
        <img src="../public/images/void/11.png" alt="Step 9 image" class="preview-image" />
      </div>
    </div>

    <div class="voidz-step">
      <h2 class="step-title">Step 10</h2>
      <p class="step-context">Successful void will be shown on void history</p>
      <div class="image-container">
        <img src="../public/images/void/12.png" alt="Step 10 image" class="preview-image" />
      </div>
    </div>

  </main>

  <?php include 'layouts/footer.php'; ?>

  <!-- Modal for image preview -->
  <div id="imagePreviewModal" class="modal">
    <span class="close-btn">&times;</span>
    <img class="modal-content" id="modalImage" />
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("imagePreviewModal");
  const modalImg = document.getElementById("modalImage");
  const closeBtn = document.querySelector(".close-btn");

  document.querySelectorAll(".preview-image").forEach(img => {
    img.addEventListener("click", () => {
      modal.style.display = "block";
      modalImg.src = img.src;
      modalImg.alt = img.alt;
    });
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
});

  </script>