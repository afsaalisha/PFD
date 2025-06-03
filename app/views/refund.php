<?php include 'layouts/header.php'; ?>
<div class="page-container">
    <?php include 'layouts/merchant-sidebar.php'; ?>

    <main class="doc-content">
        <?php
        $imageDir = '/PFD/public/images/refund/';
        $imageOrder = [1, 2, 3, 4, 5, 6, 7, 8, 9, 13, 10, 11, 12, 13, 14, 15];

        foreach ($imageOrder as $num) {
            $imagePath = $imageDir . $num . '.png';
            echo '<div class="refund-image">';
            echo '<img src="' . $imagePath . '" alt="Refund Step ' . $num . '" style="max-width:100%;margin-bottom:15px;">';
            echo '</div>';
        }
        ?>
    </main>

    <?php include 'layouts/footer.php'; ?>
</div>
