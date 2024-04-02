<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Kinder Bites</title>
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

        <?php
    if (!empty($header_asset_link)) {
        foreach ($header_asset_link as $link) {
            echo "<link href='" . base_url() . 'public/' . $link . "' rel='stylesheet' type='text/css'>";
        }
    }

    if (!empty($header_link)) {
        foreach ($header_link as $link) {
            require_once ('css/' . $link);
        }
    }
    ?>