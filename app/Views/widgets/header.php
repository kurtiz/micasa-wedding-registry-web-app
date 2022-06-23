<header>
    <div class="container-fluid header-top-area header-sticky">
        <div class="row">
            <!-- Logo Start -->
            <div class="col-lg-2 col-5 col-full-xs">
                <div class="logo">
                    <a href="<?= base_url() ?>">
<!--                        <img src="--><?//=base_url()?><!--/public/img/logo/logo.webp" alt="brand-image">-->
                        <h1><strong style="color: #e24646">MiCasa</strong></h1>
                    </a>
                </div>
            </div>
            <!-- Logo End -->
            <div class="col-12 xs-device d-none">
            </div>
            <!-- Primary-Menu Start -->
            <div class="col-lg-7 d-none d-lg-block">
                <div class="primary-menu">
                    <nav>
                        <ul class="primary-menu-list text-center">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>/shop">Shop</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>/contact">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>/about">about us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Primary-Menu End -->
            <!-- Header All Shopping Selection Start -->
            <div class="col-lg-3 col-7 col-full-xs">
                <div class="main-selection">
                    <ul class="selection-list text-end">
                        <!-- Searcch Box Start -->
                        <li class="hidden-control">

                        </li>
                        <!-- Search Box End -->
                        <li><a href="wish-list.html"><i class="pe-7s-like"></i><span style="display: none">2</span></a></li>
                        <li><i class="pe-7s-shopbag"></i><span style="display: none">2</span>
                            <ul class="ht-dropdown main-cart-box">
                                <li>
                                    <!-- Cart Box Start -->
                                    <div class="single-cart-box">
                                        <div class="cart-img">
                                            <a href="index.html#"><img src="<?=base_url()?>/public/img/menu/1.webp" alt="cart-image"></a>
                                        </div>
                                        <div class="cart-content">
                                            <h6><a href="index.html#">Alpha Block Black Polo T-Shirt</a></h6>
                                            <span>1 × $399.00</span>
                                        </div>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                    <!-- Cart Box End -->
                                    <!-- Cart Box Start -->
                                    <div class="single-cart-box">
                                        <div class="cart-img">
                                            <a href="index.html#"><img src="<?=base_url()?>/public/img/menu/2.webp" alt="cart-image"></a>
                                        </div>
                                        <div class="cart-content">
                                            <h6><a href="index.html#">Red Printed Round Neck T-Shirt</a></h6>
                                            <span>2 × $299.00</span>
                                        </div>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                    <!-- Cart Box End -->
                                    <!-- Cart Footer Inner Start -->
                                    <div class="cart-footer fix">
                                        <h5>total :<span class="f-right">$698.00</span></h5>
                                        <div class="cart-actions">
                                            <a class="checkout" href="<?=base_url()?>/checkout">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- Cart Footer Inner End -->
                                </li>
                            </ul>
                        </li>
                        <!-- Dropdown Currency Selection Start -->
                        <li><i class="pe-7s-config"></i>
                            <ul class="ht-dropdown currrency">
                                <li>
                                    <h3>currency</h3>
                                    <ul class="mb-15">
                                        <li>₵ Ghana Cedi</li>
                                        <li>$ US Dollar</li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>my account</h3>
                                    <ul>
                                        <li><a href="<?= base_url() ?>/register">
                                                register
                                            </a>
                                        </li>
                                        <li><a href="<?= base_url() ?>/login">
                                                log in
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Dropdown Currency Selection End -->
                    </ul>
                </div>
            </div>
            <!-- Header All Shopping Selection End -->
            <!-- Mobile Menu  Start -->
            <div class="mobile-menu d-block d-lg-none">
                <nav>
                    <ul>
                        <li>
                            <a href="<?=base_url()?>">Home</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/store">Store</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/contact">Contact Us</a>
                        </li>
                        </li>
                        <li><a href="<?=base_url()?>/about">About Us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu  End -->
        </div>
    </div>
</header>