<!-- breadcrumb start -->
<section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(<?= base_url()?>public/assets/image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="index1.html">Home</a></li>
                                <li class="about-p"><span>Your checkout</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- checkout page start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="checkout-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile">2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">3</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <div class="checkout-style-2">
                                <div class="billing-area">
                                    <form>
                                        <h2>Billing details</h2>
                                        <div class="billing-form">
                                            <ul class="billing-ul input-2">
                                                <li class="billing-li">
                                                    <label>First name</label>
                                                    <input type="text" name="f-name" placeholder="First name">
                                                </li>
                                                <li class="billing-li">
                                                    <label>Last name</label>
                                                    <input type="text" name="l-name" placeholder="Last name">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul">
                                                <li class="billing-li">
                                                    <label>Company name (Optional)</label>
                                                    <input type="text" name="company details" placeholder="Company name">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul">
                                                <li class="billing-li">
                                                    <label>Street address</label>
                                                    <input type="text" name="address" placeholder="Street address">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul">
                                                <li class="billing-li">
                                                    <label>Apartment,suite,unit etc. (Optional)</label>
                                                    <input type="text" name="--" placeholder="Optional">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul input-2">
                                                <li class="billing-li">
                                                    <label>Country</label>
                                                    <select>
                                                        <option>Select a country</option>
                                                        <option>United country</option>
                                                        <option>Russia</option>
                                                        <option>italy</option>
                                                        <option>France</option>
                                                        <option>Ukraine</option>
                                                        <option>Germany</option>
                                                        <option>Australia</option>
                                                    </select>
                                                </li>
                                                <li class="billing-li">
                                                    <label>State</label>
                                                    <input type="text" name="--" placeholder="State">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul input-2">
                                                <li class="billing-li">
                                                    <label>City</label>
                                                    <input type="text" name="city" placeholder="City">
                                                </li>
                                                <li class="billing-li">
                                                    <label>Postcode</label>
                                                    <input type="text" name="--" placeholder="Postcode">
                                                </li>
                                            </ul>
                                            <ul class="billing-ul input-2">
                                                <li class="billing-li">
                                                    <label>Email address</label>
                                                    <input type="text" name="mail" placeholder="Email address">
                                                </li>
                                                <li class="billing-li">
                                                    <label>Phone number</label>
                                                    <input type="text" name="phone number" placeholder="Phone number">
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                    <!-- <a href="javascript:void(0)" class="btn-style1">Continue</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="checkout-style-2">
                                <div class="billing-area">
                                    <div class="billing-details">
                                        <form>
                                            <h2>Shipping details</h2>
                                            <ul class="shipping-form">
                                                <li class="check-box">
                                                    <input type="checkbox" name="--">
                                                    <label>Ship to a different address?</label>
                                                </li>
                                                <li>
                                                    <label>Order notes(Optional)</label>
                                                    <textarea name="comments" rows="4" cols="80"></textarea>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact">
                            <div class="checkout-style-2">
                                <div class="order-area">
                                    <div class="check-pro">
                                        <h2>In your cart (2)</h2>
                                        <ul class="check-ul">
                                            <li>
                                                <div class="check-pro-img">
                                                    <a href="product.html"><img src="<?= base_url()?>public/assets/image/pro-page-image/check-image-1.jpg" class="img-fluid" alt="image"></a>
                                                </div>
                                                <div class="check-content">
                                                    <a href="product.html">Fresh healthy food</a>
                                                    <span class="check-code-blod">Product code: <span>CA70051541B</span></span>
                                                    <span class="check-price">$93.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="check-pro-img">
                                                    <a href="product.html"><img src="<?= base_url()?>public/assets/image/pro-page-image/check-image-2.jpg" class="img-fluid" alt="image"></a>
                                                </div>
                                                <div class="check-content">
                                                    <a href="product.html">Fresh healthy food</a>
                                                    <span class="check-code-blod">Product code: <span>CA70051541B</span></span>
                                                    <span class="check-price">$230.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="order-history">
                                        <h2>Your order</h2>
                                        <div class="order-inf">
                                            <div class="order-details">
                                                <span>Product:</span>
                                                <span>Total</span>
                                            </div>
                                            <div class="order-details">
                                                <span>Orange juice:</span>
                                                <span>$93.00</span>
                                            </div>
                                            <div class="order-details">
                                                <span>Shrimp jumbo:</span>
                                                <span>$230.00</span>
                                            </div>
                                            <div class="order-details">
                                                <span>Subtotal:</span>
                                                <span>$323.00</span>
                                            </div>
                                            <div class="order-details">
                                                <span>Shipping Charge:</span>
                                                <span>Free shipping</span>
                                            </div>
                                            <div class="order-details last">
                                                <span>Total:</span>
                                                <span>$323.00</span>
                                            </div>
                                            <form>
                                                <div class="order-form">
                                                    <div class="order-checkbox">
                                                        <input type="checkbox" name="--">
                                                        <label>Direct bank transfer</label>
                                                    </div>
                                                    <div class="order-checkbox">
                                                        <input type="checkbox" name="--">
                                                        <label>Cheque payment</label>
                                                    </div>
                                                    <div class="order-checkbox">
                                                        <input type="checkbox" name="--">
                                                        <label>Paypal</label>
                                                    </div>
                                                    <div class="pay-icon">
                                                        <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                                        <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                            <a href="order-complete.html" class="btn-style1">Place order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout page end -->