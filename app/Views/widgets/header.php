<header>
    <div class="container-fluid header-top-area header-sticky">
        <div class="row">
            <!-- Logo Start -->
            <div class="col-lg-2 col-5 col-full-xs">
                <div class="logo">
                    <a href="<?= base_url() ?>">
                        <img src="<?=base_url()?>/public/img/logo/logo.svg" style="height:50px" alt="brand-image">
<!--                        <h1><strong style="color: #e24646">MiCasa</strong></h1>-->
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
                                <a href="<?= base_url() ?>/contact">Contact Us</a>
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
<!--                        <li><a href="--><?//=base_url();?><!--/wishlist"><i class="pe-7s-like"></i><span style="display: none">2</span></a></li>-->
                        <li><i class="pe-7s-shopbag"></i>
                            <span style="display: none" id="cart-count"></span>
                            <ul class="ht-dropdown main-cart-box">
                                <li>
                                    <div id="shopping-cart">

                                    </div>
                                    <!-- Cart Footer Inner Start -->
                                    <div class="cart-footer fix">
                                        <h5>total : $<span id="cart-total" class="f-right">0.00</span></h5>
                                        <div class="cart-actions">
<!--                                            <a class="checkout" href="--><?//=base_url()?><!--/checkout">Checkout</a>-->
                                            <br>
                                            <a class="go-to-cart" id="go-cart" href="<?=base_url()?>/cart">Go To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Cart Footer Inner End -->
                                </li>
                            </ul>
                        </li>
                        <!-- Dropdown Currency Selection Start --> <?php /*
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
                                </li> */?>
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
                            <a href="<?=base_url()?>/contact">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu  End -->
        </div>
    </div>
</header>