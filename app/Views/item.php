<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Product Details</title>
        <meta name="description" content="Default Description">
        <meta name="keywords" content="E-commerce" />
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
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <?= $this->include("widgets/preloader"); ?>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Header Area Start -->
        <?= $this->include("widgets/header"); ?>
        <!-- Header Area End -->
        <!-- Page Breadcrumb Start -->
        <div class="main-breadcrumb mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center ptb-70">
                            <h1>PRODUCT DETAILS</h1>
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?=base_url();?>">home</a></li>
                                <li><a href="javascript:void(0)">product details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img id="big-img" src="<?=base_url();?>/public/img/new-products/1_1.webp" data-zoom-image="img/new-products/1_1.webp" alt="product-image" />

                        <div id="small-img" class="mt-20">

                            <div class="thumb-menu owl-carousel">
                                <a href="javascript:void(0)" data-image="img/new-products/1_2.webp" data-zoom-image="img/new-products/1_2.webp">
                                    <img src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="product-image" />
                                </a>

                                <a href="javascript:void(0)" data-image="img/new-products/2_1.webp" data-zoom-image="img/new-products/2_1.webp">
                                    <img src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="product-image" />
                                </a>

                                <a href="javascript:void(0)" data-image="img/new-products/2_2.webp" data-zoom-image="img/new-products/2_2.webp">
                                    <img src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="product-image" />
                                </a>

                                <a href="javascript:void(0)" data-image="img/new-products/3_1.webp" data-zoom-image="img/new-products/3_1.webp">
                                    <img src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="product-image" />
                                </a>

                                <a href="javascript:void(0)" data-image="img/new-products/2_1.webp" data-zoom-image="img/new-products/2_1.webp">
                                    <img src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="product-image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Description Start -->
                    <div class="col-md-7">
                        <div class="thubnail-desc fix">
                            <h2 class="product-header">Sheepskin Pillow2</h2>
                            <!-- Product Rating Start -->
                            <div class="rating-summary fix mtb-20">
                                <div class="rating f-left mr-10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
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
                            <div class="pro-price mb-20">
                                <ul class="pro-price-list">
                                    <li class="price">$241.99</li>
                                    <li class="tax">Ex Tax: $199.99</li>
                                </ul>
                            </div>
                            <!-- Product Price End -->
                            <!-- Product Price Description Start -->
                            <div class="product-price-desc">
                                <ul class="pro-desc-list">
                                    <li>Product Code: <span>SAMI</span></li>
                                    <li>Reward Points: <span>1000</span></li>
                                    <li>Availability: <span>in Stock</span></li>
                                </ul>
                            </div>
                            <!-- Product Price Description End -->
                            <!-- Product Box Quantity Start -->
                            <div class="box-quantity mtb-20">
                                <div class="quantity-item">
                                    <label>Qty: </label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box Quantity End -->
                            <!-- Product Button Actions Start -->
                            <div class="product-button-actions">
                                <button class="add-to-cart">add to cart</button>
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></a>
                                <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                            </div>
                            <!-- Product Button Actions End -->
                            <!-- Product Social Link Share Start -->
                            <div class="social-shared">
                                <ul>
                                    <li class="f-book">
                                        <a href="javascript:void(0)">
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                            <span>like</span>
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="javascript:void(0)">
                                            <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                            <span>tweet</span>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="javascript:void(0)">
                                            <span><i class="fa fa-google" aria-hidden="true"></i></span>
                                            <span>plus</span>
                                        </a>
                                    </li>
                                    <!-- Product Social Link Share Dropdown Start -->
                                    <li class="share-post">
                                        <a href="javascript:void(0)">
                                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                                            <span>share</span>
                                        </a>
                                        <ul class="sharable-dropdown">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook-official" aria-hidden="true"></i>facebook</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter-square" aria-hidden="true"></i>twitter</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-print" aria-hidden="true"></i>print</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-envelope-o" aria-hidden="true"></i>email</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest-square" aria-hidden="true"></i>pinterest</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus-square" aria-hidden="true"></i>google+</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-plus-square" aria-hidden="true"></i>more(99)</a></li>
                                        </ul>
                                    </li>
                                    <!-- Product Social Link Share Dropdown End -->
                                </ul>
                            </div>
                            <!-- Product Social Link Share End -->
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="main-thumb-desc text-center nav list-inline">
                            <li><a class="active" data-bs-toggle="tab" href="javascript:void(0)detail">Details</a></li>
                            <li><a data-bs-toggle="tab" href="javascript:void(0)review">Reviews (0)</a></li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content">
                            <div id="detail" class="tab-pane fade show active pb-40">
                                <p class="mb-10">Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9.</p>
                                <p class="mb-10">Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 – includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick – a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer.</p>
                                <p class="mb-10">Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader’s Hub, Music Hub and Samsung Mini Apps Tray – which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time. äö</p>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <!-- Reviews Start -->
                                <div class="review">
                                    <p class="mb-10">There are no reviews for this product.</p>
                                    <h2>WRITE A REVIEW</h2>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Field Start -->
                                <div class="riview-field mt-30">
                                    <form autocomplete="off" action="#">
                                        <div class="form-group">
                                            <label class="req" for="sure-name">name</label>
                                            <input type="text" class="form-control" id="sure-name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="comments">your Review</label>
                                            <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                            <div class="help-block">
                                                <span class="text-danger">Note:</span> HTML is not translated!
                                            </div>
                                        </div>
                                        <div class="form-group required radio-label">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label req">Rating</label> &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" name="rating" value="1"> &nbsp;
                                                    <input type="radio" name="rating" value="2"> &nbsp;
                                                    <input type="radio" name="rating" value="3"> &nbsp;
                                                    <input type="radio" name="rating" value="4"> &nbsp;
                                                    <input type="radio" name="rating" value="5"> &nbsp;Good
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" id="button-review">Continue</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Reviews Field Start -->
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Best Seller Products Start -->
        <div class="best-seller-products pb-100">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-12">
                        <div class="section-title text-center mb-40">
                            <h3 class="section-info">RELATED PRODUCTS</h3>
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/5_1.webp" alt="single-product">
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/6_2.webp" alt="single-product">
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/6_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/6_2.webp" alt="single-product">
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
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
                                        <img class="primary-img" src="<?=base_url();?>/public/img/new-products/8_1.webp" alt="single-product">
                                        <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
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
                                                    <img src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb2" class="tab-pane fade">
                                                    <img src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb3" class="tab-pane fade">
                                                    <img src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb4" class="tab-pane fade">
                                                    <img src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb5" class="tab-pane fade">
                                                    <img src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="product-thumbnail"/>
                                                </div>
                                                <div id="thumb6" class="tab-pane fade">
                                                    <img src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="product-thumbnail"/>
                                                </div>
                                            </div>
                                            <!-- Thumbnail Large Image End -->

                                            <!-- Thumbnail Image End -->
                                            <div class="product-thumbnail mt-15 mb-20">
                                                <div class="thumb-menu nav owl-carousel">
                                                    <div>
                                                        <a class="active" data-bs-toggle="tab" href="<?=base_url();?>#thumb1"> <img src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb2"> <img src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb3"> <img src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb4"> <img src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb5"> <img src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb6"> <img src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="product-thumbnail"></a>
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