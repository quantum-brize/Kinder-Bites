</head>
    <body>
        <!-- top notificationbar start -->
        <section class="top-notification-area">
            <div class="container">
                <div class="row ">
                    <div class="col">
                        <ul class="notification-ul">
                            <li class="notification-li offer-text" >
                                <p ><span>Free shipping</span> orders from all item</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top notificationbar start -->
        <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- contact number start -->
                                <div class="header-element contact-area">
                                    <a href="tel:(+14) 123 456 7890" class="call-text">
                                        <span class="icon"><i class="ti-headphone"></i></span>
                                        <span class="text">(+91) 9123325003</span>
                                    </a>
                                </div>
                                <!-- contact number end -->
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="<?= base_url('/') ?>">
                                        <!-- <img  alt="Kinder Bites" class="img-fluid">-->
                                        <h1>Kinder Bites</h1>
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- header icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                                <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap search-wrap">
                                            <div class="search-rap">
                                                <a href="#search-modal" class="search-popuup" data-bs-toggle="modal">
                                                    <span class="icon"><i class="ti-search"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <a href="<?= base_url('account') ?>" class="user">
                                                <span class="icon"><i class="icon-user"></i></span>
                                            </a>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <a href="<?= base_url('wishlist') ?>" class="wishlist">
                                                <span class="icon">
                                                    <i class="icon-heart"></i>
                                                    <span class="bigcounter">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="javascript:void(0)" class="cart-count">
                                                        <span class="icon">
                                                            <i class="icon-handbag"></i>
                                                            <span class="bigcounter">4</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header icon end -->
                            </div>
                            <div class="top-menubar">
                                <div class="menu-slider">
                                    <!-- main menu start -->
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link parent">
                                                    <a href="<?= base_url('/') ?>" class="link-title">
                                                        <span class="sp-link-title">Home</span>
                                                       
                                                    </a>
                                                    <a href="<?= base_url('/') ?>" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Category</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu mega-menu collapse" id="collapse-top-mega-menu">
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Dry Fruits</h2>
                                                            <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Dry Fruits</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-sub-mega-menu">
                                                                <li class="supmenu-li"><a href="grid-list.html">Plain Bitesz</a> <ul class="submenu">
                                                                    <li><a href="#">> Desi Flavours</a></li>
                                                                    <li><a href="#">> Our Special Flavours</a></li>
                                                                </ul></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Our Special Mix Bitesz</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Healthy Snacks</h2>
                                                            <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Healthy Snacks</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-fruits-menu">
                                                                <li class="supmenu-li"><a href="grid-list.html">Khakhra</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Vaccum Fried</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Bhakri</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Jaggery Chocolates</h2>
                                                            <a href="#collapse-top-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Jaggery Chocolates</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-banana-menu">
                                                                <li class="supmenu-li"><a href="grid-list.html">Jaggery Chocolate Bar</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Assorted Jaggery Chocolates</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Spices</h2>
                                                            <a href="#collapse-top-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Spices</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-apple-menu">
                                                                <li class="supmenu-li"><a href="grid-list.html">Pepper</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Kesar</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Cinnamon</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Cardamom</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Cloves</a></li>
                                                                <li class="supmenu-li"><a href="grid-list.html">Jeera</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                                
                                                <li class="menu-link parent">
                                                    <a href="<?= base_url('about-us') ?>" class="link-title">
                                                        <span class="sp-link-title">About us</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="menu-link parent">
                                                    <a href="<?= base_url('contact-us') ?>" class="link-title">
                                                        <span class="sp-link-title">Contact us</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- main menu end -->
                                    <!-- search start -->
                                    <div class="header-search">
                                        <div class="search-area">
                                            <form>
                                                <input type="text" name="search" placeholder="Search our store">
                                                <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- search end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                    </div>
                                    <div class="navbar-collapse" id="navbarContent">
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Home</span>
                                                        </a>
                                                        <a href="index.html" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Home</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Category</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Category</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Dry Fruits</h2>
                                                                <a href="#collapse-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Dry Fruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fruit & nut</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Snack food</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu">
                                                                    <li class="supmenu-li"><a href="grid-list.html">Oranges</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Coffee creamers</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Ghee beverages</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Ranch salad</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Hemp milk</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Nuts & seeds</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Bananas & plantains</h2>
                                                                <a href="#collapse-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-banana-menu">
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fresh gala</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fresh berries</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fruit & nut</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fifts mixed fruits</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Oranges</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Oranges</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-apple-menu">
                                                                    <li class="supmenu-li"><a href="grid-list.html">Pears produce</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Bananas</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Natural grassbeab</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fresh green orange</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Fresh organic reachter</a></li>
                                                                    <li class="supmenu-li"><a href="grid-list.html">Balckberry 100%organic</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">About us</span>
                                                        </a>
                                                        <a href="about-us.html" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">About us</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Contact us</span>
                                                        </a>
                                                        <a href="contact.html" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Contact us</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu end -->
            <!-- minicart start -->
            <div class="mini-cart">
                <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
                <div class="cart-item-title">
                    <p>
                        <span class="cart-count-desc">There are</span>
                        <span class="cart-count-item bigcounter">4</span>
                        <span class="cart-count-desc">Products</span>
                    </p>
                </div>
                <ul class="cart-item-loop">
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-2.html">
                                <img src="<?= base_url()?>public/assets/image/cart-img.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-2.html">Fresh apple 5kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-2.html">
                                <img src="<?= base_url()?>public/assets/image/cart-img02.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-2.html">Natural grassbean 4kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$300.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-2.html">
                                <img src="<?= base_url()?>public/assets/image/cart-img03.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-2.html">Organic coconut juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-2.html">
                                <img src="<?= base_url()?>public/assets/image/cart-img04.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-2.html">Orange juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$350.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="subtotal-title-area">
                    <li class="subtotal-info">
                        <div class="subtotal-titles">
                            <h6>Sub total:</h6>
                            <span class="subtotal-price">$750.00 USD</span>
                        </div>
                    </li>
                    <li class="mini-cart-btns">
                        <div class="cart-btns">
                            <a href="<?= base_url('cart') ?>" class="btn btn-style2">View cart</a>
                            <a href="<?= base_url('checkout') ?>" class="btn btn-style2">Checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- minicart end -->
            <!-- search start -->
            <div class="modal fade" id="search-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="search-content">
                                            <div class="search-engine">
                                                <input type="text" name="search" placeholder="Search products">
                                                <a href="search.html" class="search-btn"><i class="ion-ios-search-strong"></i></a>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- search end -->
        </header>
        <!-- header end -->