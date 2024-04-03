<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Vegist - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
    <meta name="author" content="spacingtech_webify">
    <!-- favicon -->
    <link rel="shortcut icon" type="<?= base_url()?>public/assets/image/favicon" href="<?= base_url()?>public/assets/image/fevicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/bootstrap.min.css">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/simple-line-icons.css">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/font-awesome.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/themify-icons.css">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/ionicons.min.css">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/owl.theme.default.min.css">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/swiper.min.css">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/animate.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/style14.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/responsive14.css">
</head>
<style>
        #alert {
            position: fixed;
            top: 10px;
            z-index: 1000;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            left: 0px;
        }
    </style>
<body class="home-1">
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
        <div id="alert">

        </div>
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            <form id="signupForm">
                                <input type="text" name="useremail" id="useremail" placeholder="Email address">
                                <input type="text" name="username" id="username" placeholder="User name">
                                <input type="text" name="phone" id="phone" placeholder="Phone number">
                                <input type="text" name="password-input" id="password-input" placeholder="Password">
                                <input type="text" name="confirm-password-input" id="confirm-password-input" placeholder="Conirm password">
                                <button id="sign-up-btn" class="btn-style1 w-100">Create</button>
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                            <a href="<?= base_url('login') ?>" class="ceate-a">Log in</a>
                            <div class="register-info">
                                <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
    <!-- back to top start -->
    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>
    <!-- jquery -->
    <script src="<?= base_url()?>public/assets/js/modernizr-2.8.3.min.js"></script>
    <script src="<?= base_url()?>public/assets/js/jquery-3.6.0.min.js"></script>
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

    <script>
        $(document).ready(function () {
            
            $('#sign-up-btn').on('click', function (event) {
                event.preventDefault();
                let userEmail = $('#useremail').val();
                let userName = $('#username').val();
                let phone = $('#phone').val();
                let password = $('#password-input').val();
                let confirmPassword = $('#confirm-password-input').val();

                console.log(userEmail);
                console.log(userName);
                console.log(password);
                console.log(confirmPassword);
                if (userEmail.length < 1) {
                    $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Please Enter Your Email
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)
                } else if (phone < 10) {
                    $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Please Enter a valid Number
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)
                } else if (userName.length < 1) {
                    $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Please Enter User Name
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)
                } else if (password.length < 6) {
                    $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Password Must Be Six Characters Long
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)
                } else if (password != confirmPassword) {
                    $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                        <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Passwords Dont Match
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)
                } else {

                    $.ajax({
                        url: '<?= base_url('sign-up-action') ?>',
                        method: 'POST',
                        data: {
                            user_name: userName,
                            email: userEmail,
                            password: confirmPassword,
                            number: phone
                        },
                        beforeSend: function () {
                            $('#sign-up-btn').html(`<div class="spinner-border text-light" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>`)
                            $('#sign-up-btn').attr('disabled', true);

                        },
                        success: function (resp) {
                            resp = JSON.parse(resp)
                            if (resp.status == true) {
                                $('#alert').html(`<div class="alert alert-secondary alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                                        <i class="ri-mail-send-fill label-icon"></i><strong>Mail Send</strong> - OTP sent To Your Email
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>`)
                                window.location.href = `<?= base_url('verify-otp?user_id=')?>${resp.user_id}`;
                            } else {
                                $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                                    <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - ${resp.message}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>`)
                            }
                            $('#sign-up-btn').attr('disabled', false);

                        },
                        complete :function(){
                            $('#sign-up-btn').html(`Sign Up`)
                            $('#sign-up-btn').attr('disabled', false);
                        },
                        error: function(){
                            $('#sign-up-btn').html(`Sign Up`)
                            $('#sign-up-btn').attr('disabled', false);
                            $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                                    <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Internal Srver Error
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>`)
                        }
                    })

                }

            })



        })


    </script>
</body>
</html>