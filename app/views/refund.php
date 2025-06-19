<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="doc-content refund-content">

<div class="void-content-header">
    <h2>Merchant User Portal</h2>
</div>

  <div class="refund-grid">

  <div class="refund-step-box">
    <span class="refund-step-number">1</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/1.png" alt="Refund Step 1" class="refund-image" />
    </div>
  </div>

  <div class="refund-step-box">
    <span class="refund-step-number">2</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/2.png" alt="Refund Step 2" class="refund-image" />
    </div>
  </div>

    <div class="refund-step-box">
    <span class="refund-step-number">3</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/3.png" alt="Refund Step 3" class="refund-image" />
    </div>
  </div>

    <div class="refund-step-box">
    <span class="refund-step-number">4</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/4.png" alt="Refund Step 4" class="refund-image" />
    </div>
  </div>

  </div>

  <div class="void-content-header">
    <h2>Merchant Admin Portal</h2>
</div>

  <div class="refund-grid">

    <div class="refund-step-box">
    <span class="refund-step-number">1</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/5.png" alt="Refund Step 5" class="refund-image" />
    </div>
  </div>

    <div class="refund-step-box">
    <span class="refund-step-number">2</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/6.png" alt="Refund Step 6" class="refund-image" />
    </div>
  </div>

    <div class="refund-step-box">
    <span class="refund-step-number">3</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/7.png" alt="Refund Step 7" class="refund-image" />
    </div>
  </div>

    <div class="refund-step-box">
    <span class="refund-step-number">4</span>
    <div class="refund-image-wrapper">
      <img src="/PFD/public/images/refund/8.png" alt="Refund Step 8" class="refund-image" />
    </div>
  </div>

    </div>

    </main>

    <?php include 'layouts/footer.php'; ?>
</div>

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

    document.querySelectorAll(".refund-image").forEach(img => {
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
