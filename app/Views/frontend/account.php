<!-- breadcrumb start -->
<section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(<?= base_url()?>public/assets/image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="index1.html">Home</a></li>
                                <li class="about-p"><span>Profile</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order history start -->
    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <a href="javascript:void(0)"><img src="<?= base_url()?>public/assets/image/user-ava.jpg" alt="img" class="img-fluid"></a>
                                </div>
                                <div class="order-name">
                                    <h4>Andrew louise</h4>
                                    <span>Joined april 06, 2021</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="order-history.html"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                    <li class="profile-li"><a href="profile.html" class="active">Profile</a></li>
                                    <li class="profile-li"><a href="<?= base_url('pro-address') ?>">Address</a></li>
                                    <li class="profile-li"><a href="<?= base_url('wishlist') ?>"><span>Wishlist</span> <span class="pro-count">3</span></a></li>
                                    <li class="profile-li"><a href="pro-tickets.html"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                                    <li class="profile-li"><a href="<?=base_url('logout')?>"><span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>First name</label>
                                        <input type="text" name="name" placeholder="First name">
                                    </li>
                                    <li>
                                        <label>Last name</label>
                                        <input type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Email address</label>
                                        <input type="text" name="name" placeholder="Email address" required>
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="name" placeholder="Phone number">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="name" placeholder="New password">
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="name" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <input type="checkbox" name="name">
                                        <label>Subscribe me to newsletter</label>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="btn btn-style1">Update profile</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->