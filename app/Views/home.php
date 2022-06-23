<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Home</title>
        <meta property="og:image" content="<?= base_url(); ?>/public/img/preview.png" />
        <meta name="description" content="Need gifts for you registry? Look no further. We've got you.">
        <meta name="keywords" content="E-commerce registry wedding wed gift family " />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- place favicon.ico in the root directory -->
        <?= $this->include("widgets/css"); ?>
    </head>

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Preloader Start -->
        <?= $this->include("widgets/preloader");?>
        <!-- Preloader End -->
        <!-- Newsletter Popup Start -->
        <?php if(false):?>
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Nevara mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- Newsletter Popup End -->
        <!-- Header Area Start -->
        <?= $this->include("widgets/header"); ?>
        <!-- Header Area End -->
        <!-- Slider Area Start -->
        <div class="slider-area pb-100">
            <!-- Main Slider Area Start -->
            <div class="slider-wrapper theme-default">
                <!-- Slider Background  Image Start-->
                <div id="slider" class="nivoSlider">
                    <img src="<?=base_url()?>/public/img/slider/1.jpg" data-thumb="img/slider/1.webp" alt="" title="#htmlcaption" />
                    <img src="<?=base_url()?>/public/img/slider/2.jpg" data-thumb="img/slider/2.webp" alt="" title="#htmlcaption2" />
                </div>
                <!-- Slider Background  Image Start-->
                <!-- Slider htmlcaption Start-->
                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                    <!-- Slider Text Start -->
                    <div class="slider-text">
                        <h2 class="wow fadeInLeft" data-wow-delay="1s">EAMES LOUGE CHAIR<br>AND OTOMAN</h2>
                        <p class="wow fadeInRight" data-wow-delay="1s">Own an icon of modern design</p>
                        <a class="wow bounceInDown" data-wow-delay="0.8s" href="javascript:void(0)">shop now</a>
                    </div>
                    <!-- Slider Text End -->
                </div>
                <!-- Slider htmlcaption End -->
                <!-- Slider htmlcaption Start -->
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <!-- Slider Text Start -->
                    <div class="slider-text">
                        <h2 class="wow zoomInUp" data-wow-delay="0.5s">IF YOUR PURCHASE<br>IS OVER $350</h2>
                        <p class="wow zoomInUp" data-wow-delay="0.6s">We’ll give you a FREE delivery!</p>
                        <a class="wow zoomInUp" data-wow-delay="1s" href="javascript:void(0)">shop now</a>
                    </div>
                    <!-- Slider Text End -->
                </div>
                <!-- Slider htmlcaption End -->
            </div>
            <!-- Main Slider Area End -->
        </div>
        <!-- Slider Area End -->
        <!-- New Products Selection Start -->
        <div class="new-products-selection pb-80">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-12">
                        <div class="section-title text-center mb-40">
                            <span class="section-desc mb-15">Top new in this week</span>
                            <h3 class="section-info">new products</h3>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- New Products Activation Start -->
                        <div class="new-products owl-carousel">
                            <!-- Double Product Start -->
                            <div class="double-products">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/1_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/1_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Sheepskin Pillow2</a></h4>
                                        <p class="price"><span>$241.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/1_2.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/5_1.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Modern Desk Lamp</a></h4>
                                        <p class="price"><span>$122.00</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                            <!-- Double Product Start -->
                            <div class="double-products">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/2_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Carte Postal Clock</a></h4>
                                        <p class="price"><span>$2000</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/6_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/6_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Nulla massa est</a></h4>
                                        <p class="price"><span>$602</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                            <!-- Double Product Start -->
                            <div class="double-products">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/3_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/3_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">congue sitamet</a></h4>
                                        <p class="price"><span>$241.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/5_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/4_1.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Splacerat volutpat</a></h4>
                                        <p class="price"><span>$122.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                            <!-- Double Product Start -->
                            <div class="double-products">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/4_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">dictum idrisus</a></h4>
                                        <p class="price"><span>$541.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/8_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/8_2.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Maple Wood Table</a></h4>
                                        <p class="price"><span>$255</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                            <!-- Double Product Start -->
                            <div class="double-products">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/2_1.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                        <p class="price"><span>$241.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img class="primary-img" src="<?=base_url()?>/public/img/new-products/9_1.webp" alt="single-product">
                                            <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/5_1.webp" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                        </div>
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content text-center">
                                        <h4><a href="javascript:void(0)">Simplify One Drawer</a></h4>
                                        <p class="price"><span>$117.99</span></p>
                                        <div class="action-links2">
                                            <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                        </div>
                        <!-- New Products Activation End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- New Products Selection End -->
        <!-- New Products Banner Start -->
        <div class="new-products-banner pb-100">
            <div class="container">
                <div class="row">
                    <!-- Single Banner Start -->
                    <div class="col-md-4">
                        <div class="single-banner zoom mb-30">
                            <img src="<?=base_url()?>/public/img/products-banner/1.webp" alt="product-banner">
                            <div class="banner-desc">
                                <a href="javascript:void(0)">Decorative Accessories</a>
                                <p>25 products</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                    <div class="col-md-8">
                        <div class="single-banner zoom mb-30">
                            <img src="<?=base_url()?>/public/img/products-banner/2.webp" alt="product-banner">
                            <div class="banner-desc">
                                <a href="javascript:void(0)">Chairs & Recliners</a>
                                <p>25 products</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                    <div class="col-md-8">
                        <div class="single-banner zoom">
                            <img src="<?=base_url()?>/public/img/products-banner/3.webp" alt="product-banner">
                            <div class="banner-desc">
                                <a href="javascript:void(0)">Sofas & Loveseats</a>
                                <p>25 products</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                    <div class="col-md-4">
                        <div class="single-banner zoom">
                            <img src="<?=base_url()?>/public/img/products-banner/4.webp" alt="product-banner">
                            <div class="banner-desc">
                                <a href="javascript:void(0)">Window Treatments</a>
                                <p>25 products</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- New Products Banner End -->
        <!-- Best Seller Products Start -->
        <div class="best-seller-products pb-100">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-12">
                        <div class="section-title text-center mb-40">
                            <span class="section-desc mb-20">Top sale in this week</span>
                            <h3 class="section-info">best seller</h3>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-12">
                        <!-- Best Seller Product Activation Start -->
                        <div class="best-seller new-products owl-carousel">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/1_2.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/5_1.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/3_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/6_2.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/1_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/6_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/6_2.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/2_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img class="primary-img" src="<?=base_url()?>/public/img/new-products/8_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url()?>/public/img/new-products/3_2.webp" alt="single-product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="javascript:void(0)">Decorative Vase</a></h4>
                                    <p class="price"><span>$241.99</span></p>
                                    <div class="action-links2">
                                        <a data-bs-toggle="tooltip" title="Add to Cart" href="javascript:void(0)">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Best Seller Product Activation Start -->
                        <div class="text-center shop-link-page mt-50"><a href="javascript:void(0)">Shop All Best Sellers</a></div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Best Seller Products End -->

        <!-- Footer Start -->
       <?= $this->include("widgets/footer"); ?>
        <!-- Footer End -->
        <!-- Quick View Content Start -->
        <div class="modal modal-box fade" id="myModal" role="dialog">
            <!-- Modal Dialog Box Start -->
            <div class="modal-dialog max-width">
                <!-- Modal content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal Body Start -->
                    <div class="modal-body">
                        <div class="quiick-view-details">
                            <!-- Product Thumbnail Start -->
                            <div class="main-product-thumbnail">
                                <div class="container">
                                    <div class="row">
                                        <!-- Main Thumbnail Image Start -->
                                        <div class="col-lg-5 col-md-6">
                                            <!-- Thumbnail Large Image start -->
                                            <div class="tab-content">
                                                <div id="thumb1" class="tab-pane fade show active">
                                                    <img src="<?=base_url()?>/public/img/new-products/1_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb2" class="tab-pane fade">
                                                    <img src="<?=base_url()?>/public/img/new-products/1_2.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb3" class="tab-pane fade">
                                                    <img src="<?=base_url()?>/public/img/new-products/2_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb4" class="tab-pane fade">
                                                    <img src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb5" class="tab-pane fade">
                                                    <img src="<?=base_url()?>/public/img/new-products/3_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb6" class="tab-pane fade">
                                                    <img src="<?=base_url()?>/public/img/new-products/3_2.webp" alt="product-thumbnail"/>
                                                </div>
                                            </div>
                                            <!-- Thumbnail Large Image End -->

                                            <!-- Thumbnail Image End -->
                                            <div class="product-thumbnail mt-15 mb-20">
                                                <div class="thumb-menu nav owl-carousel">
                                                    <div>
                                                        <a class="active" data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/1_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/1_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/2_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/2_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/3_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="javascript:void(0)"> <img src="<?=base_url()?>/public/img/new-products/3_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thumbnail image end -->
                                        </div>
                                        <!-- Main Thumbnail Image End -->
                                        <!-- Thumbnail Description Start -->
                                        <div class="col-lg-7 col-md-6">
                                            <div class="thubnail-desc fix">
                                                <h2 class="product-header">Sheepskin Pillow2</h2>
                                                <!-- Product Rating Start -->
                                                <div class="rating-summary fix mtb-25">
                                                    <div class="rating f-left mr-10">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-feedback f-left">
                                                        <a href="javascript:void(0)">0 reviews</a> /
                                                        <a href="javascript:void(0)">Write a review</a>
                                                    </div>
                                                </div>
                                                <!-- Product Rating End -->
                                                <!-- Product Price Start -->
                                                <div class="pro-price mb-15">
                                                    <ul class="pro-price-list">
                                                        <li class="price">$241.99</li>
                                                        <li class="tax">Ex Tax: $199.99</li>
                                                    </ul>
                                                </div>
                                                <!-- Product Price End -->
                                                <!-- Product Price Description Start -->
                                                <div class="product-price-desc mb-10">
                                                    <ul class="pro-desc-list">
                                                        <li>Product Code: <span>SAMI</span></li>
                                                        <li>Reward Points: <span>1000</span></li>
                                                        <li>Availability: <span>in Stock</span></li>
                                                    </ul>
                                                </div>
                                                <!-- Product Price Description End -->
                                                <!-- Product Box Quantity Start -->
                                                <div class="box-quantity mb-30">
                                                    <div class="quantity-item">
                                                        <label>Qty: </label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Box Quantity End -->
                                                <!-- Product Button Actions Start -->
                                                <div class="product-button-actions">
                                                    <button class="add-to-cart">add to cart</button>
                                                    <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></button>
                                                    <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                                                </div>
                                                <!-- Product Button Actions End -->
                                            </div>
                                        </div>
                                        <!-- Thumbnail Description End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Container End -->
                            </div>
                            <!-- Product Thumbnail End -->
                        </div>
                        <!-- Quick View Details End -->
                    </div>
                    <!-- Modal Body End -->
                </div>
                <!-- Modal Content End -->
            </div>
            <!-- Modal Dialog Box End -->
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <?= $this->include("widgets/javascript"); ?>
    </body>
    </html>
<?= $this->endSection(); ?>