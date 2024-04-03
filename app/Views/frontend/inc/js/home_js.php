
<script>
    $(document).ready(function () {
        load_banners()
    })




    function load_banners() {
        $.ajax({
            url: "<?= base_url('/api/banners') ?>",
            type: "GET",
            beforeSend: function () {
            },
            success: function (resp) {
                if (resp.status) {
                    $.each(resp.data, function(index, banner) {
                        console.log(banner)
                        html = `<div class="swiper-slide">
                                    <div class="slider-block">
                                        <a href="${banner.link}">
                                            <img src="<?= base_url('public/uploads/banner_images/') ?>${banner.img}" class="img-fluid" alt="image">
                                        </a>
                                        <div class="container slider-content">
                                        </div>
                                    </div>
                                </div>`
                        $('#banner_img').append(html);
                    })
                }
            },
            error: function (err) {
                console.log(err)
            },
            complete: function () {
               
            }
        })
    }
</script>