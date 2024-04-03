<!-- back to top start -->
<a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
        <!-- jquery -->
        <script src="<?= base_url()?>public/assets/js/modernizr-2.8.3.min.js"></script>
        <script src="<?= base_url()?>public/assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url()?>public/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url()?>public/assets/js/jquery.isotope.min.js"></script>
        <!-- bootstrap -->
        <script src="<?= base_url()?>public/assets/js/bootstrap.min.js"></script>
        <!-- popper -->
        <script src="<?= base_url()?>public/assets/js/popper.min.js"></script>
        <!-- fontawesome -->
        <script src="<?= base_url()?>public/assets/js/fontawesome.min.js"></script>
        <!-- owl carousal -->
        <script src="<?= base_url()?>public/assets/js/owl.carousel.min.js"></script>
        <!-- swiper -->
        <script src="<?= base_url()?>public/assets/js/swiper.min.js"></script>
        <!-- custom -->
        <script src="<?= base_url()?>public/assets/js/custom.js"></script>

        <?php
        if (!empty ($footer_asset_link)) {
            foreach ($footer_asset_link as $link) {
                echo "<script src='" . base_url() . 'public/' . $link . "'></script>";
            }
        }
        if (!empty ($footer_link)) {
            foreach ($footer_link as $link) {
                require_once ('js/' . $link);
            }
        }
    ?>
    </body>
</html>