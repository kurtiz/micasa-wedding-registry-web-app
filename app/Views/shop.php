<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Shop</title>
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
                            <h1>Shop</h1>
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?= base_url(); ?>">home</a></li>
                                <li><a href="javascript:void(0)">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Categories Product Start -->
        <div class="all-categories pb-100">
            <div class="container">
                <div class="row">
                    <!-- Sidebar Content Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Sidebar Right Top Content Start -->
                        <div class="sidebar-desc-content">
                            <p>Example of category description text</p><hr>
                        </div>
                        <!-- Sidebar Right Top Content Start -->
                        <!-- Best Seller Product Start -->
                        <div class="best-seller">
                            <div class="row mt-20">
                                <div class="col-md-7">
                                    <div class="grid-list-view">
                                        <ul class="list-inline nav">
                                            <li><a class="active" data-bs-toggle="tab" href="<?=base_url();?>#grid-view" aria-expanded="false"><i class="zmdi zmdi-view-dashboard"></i><i class="pe-7s-keypad"></i></a></li>
                                            <li><a data-bs-toggle="tab" href="<?=base_url();?>#list-view" aria-expanded="true"><i class="zmdi zmdi-view-list"></i><i class="pe-7s-menu"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select mb-2 mb-md-0" class="form-control select-varient">
                                        <option value="#">Show: 9</option>
                                        <option value="#">Show: 24</option>
                                        <option value="#">Show: 36</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-2 mb-md-0" class="form-control select-varient">
                                        <option value="#">Sort By:Default</option>
                                        <option value="#">Sort By:Name (A - Z)</option>
                                        <option value="#">Sort By:Name (Z - A)</option>
                                        <option value="#">Sort By:Price (Low > High)</option>
                                        <option value="#">Sort By:Price (High > Low)</option>
                                        <option value="#">Sort By:Rating (Highest)</option>
                                        <option value="#">Sort By:Rating (Lowest)</option>
                                        <option value="#">Sort By:Model (A - Z)</option>
                                        <option value="#">Sort By:Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content categorie-list ">
                                        <div id="list-view" class="tab-pane fade">
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$122.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/8_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Modern Desk Lamp</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$552.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Congue Sitamet</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$2000.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Modern Desk Lamp</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$122.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/6_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Nulla Massa Est</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$1202.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/8_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$122.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/5_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Placerat Volutpat</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$340.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <!-- Main Single Product Start -->
                                            <div class="main-single-product row">
                                                <div class="col-md-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick
                                                                    view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-md-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$122.00</li>
                                                                <li class="mtb-50">
                                                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat
                                                                        Panel Monitor. This flagship monitor features best-in-class performance and presentation
                                                                        features on a huge w..</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-bs-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <button data-bs-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button data-bs-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                                    class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                            <!-- Main Single Product Start -->
                                            <div class="row mt-40 mb-70">
                                                <div class="col-md-6">
                                                    <ul class="blog-pagination">
                                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                                        <li><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <!-- End of .blog-pagination -->
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pro-list-details text-end">
                                                        <p class="mr-15 mt-10">Showing 1 to 8 of 8 (1 Pages)</p>
                                                    </div>
                                                    <!-- Pro List Details End -->
                                                </div>
                                            </div>
                                            <!-- Row End -->
                                        </div>
                                        <!-- #list-view End -->
                                        <div id="grid-view" class="tab-pane fade show active mt-40">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">Sheepskin Pillow2</a></h4>
                                                            <p class="price"><span>$241.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
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
                                                            <h4><a href="<?=base_url()?>/item">Modern Desk Lamp</a></h4>
                                                            <p class="price"><span>$122.00</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
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
                                                            <h4><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                            <p class="price"><span>$2000</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
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
                                                            <h4><a href="<?=base_url()?>/item">Nulla massa est</a></h4>
                                                            <p class="price"><span>$602</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">congue sitamet</a></h4>
                                                            <p class="price"><span>$241.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/5_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/4_1.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">Splacerat volutpat</a></h4>
                                                            <p class="price"><span>$122.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/4_1.webp" alt="single-product">
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
                                                            <h4><a href="<?=base_url()?>/item">dictum idrisus</a></h4>
                                                            <p class="price"><span>$541.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/8_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/8_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">Maple Wood Table</a></h4>
                                                            <p class="price"><span>$255</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">congue sitamet</a></h4>
                                                            <p class="price"><span>$241.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
                                                                <img class="primary-img" src="<?=base_url();?>/public/img/new-products/1_1.webp" alt="single-product">
                                                                <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/1_2.webp" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?=base_url()?>/item">Sheepskin Pillow2</a></h4>
                                                            <p class="price"><span>$241.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
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
                                                            <h4><a href="<?=base_url()?>/item">Modern Desk Lamp</a></h4>
                                                            <p class="price"><span>$122.00</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?=base_url()?>/item">
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
                                                            <h4><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                            <p class="price"><span>$2000</span></p>
                                                            <div class="action-links2">
                                                                <a data-bs-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                            <!-- Row End -->
                                            <div class="row mt-40 mb-70">
                                                <div class="col-md-6">
                                                    <ul class="blog-pagination">
                                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                                        <li><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <!-- End of .blog-pagination -->
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pro-list-details text-end">
                                                        <p class="mr-15 mt-10">Showing 1 to 8 of 8 (1 Pages)</p>
                                                    </div>
                                                    <!-- Pro List Details End -->
                                                </div>
                                            </div>
                                            <!-- Row End -->
                                        </div>
                                        <!-- #Grid-view End -->
                                    </div>
                                    <!-- .Tab Content End -->
                                </div>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Best Seller Product End -->
                    </div>
                    <!-- Sidebar Content End -->
                    <!-- Sidebar Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="categorie-sidebar mb-100">
                            <!-- Categories Module Start -->
                            <div class="categorie-module mb-80">
                                <h3>categories</h3>
                                <ul class="categorie-list">
                                    <li class="active"><a href="javascript:void(0)">Furniture (19)</a>
                                        <ul class="sub-categorie pl-30">
                                            <li><a href="javascript:void(0)">Sofas & Loveseats (19)</a></li>
                                            <li><a href="javascript:void(0)">Chairs & Recliners (19)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Sectionals (16)</a></li>
                                    <li><a href="javascript:void(0)">Decor (19)</a></li>
                                    <li><a href="javascript:void(0)">Decorative Accessories (19)</a></li>
                                    <li><a href="javascript:void(0)">Window Treatments (16)</a></li>
                                    <li><a href="javascript:void(0)">Bookshelves (16)</a></li>
                                    <li><a href="javascript:void(0)">Coffee & Accent Tables (17)</a></li>
                                </ul>
                            </div>
                            <!-- Categories Module End -->
                            <!-- Filter Option Start -->
                            <div class="flter-option mb-80">
                                <h3>PRICE FILTER</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount" readonly>
                                </form>
                            </div>
                            <!-- Filter Option End -->
                            <!-- Categories Color Start -->
                            <div class="cat-color mb-80">
                                <h3>Color</h3>
                                <ul class="cat-color-list">
                                    <li><a href="javascript:void(0)">Black (13)</a></li>
                                    <li><a href="javascript:void(0)">Blue (13)</a></li>
                                    <li><a href="javascript:void(0)">Grey (13)</a></li>
                                    <li><a href="javascript:void(0)">Green (13)</a></li>
                                    <li><a href="javascript:void(0)">Red (13)</a></li>
                                </ul>
                            </div>
                            <!-- Categories Color End -->
                            <!-- Manufactures List Start -->
                            <div class="manufactures mb-80">
                                <h3>MANUFACTURERS</h3>
                                <ul class="manufactures-list">
                                    <li><a href="javascript:void(0)">Manufacturers 1 (14)</a></li>
                                    <li><a href="javascript:void(0)">Manufacturers 2 (13)</a></li>
                                    <li><a href="javascript:void(0)">Manufacturers 3 (13)</a></li>
                                    <li><a href="javascript:void(0)">Manufacturers 4 (14)</a></li>
                                    <li><a href="javascript:void(0)">Manufacturers 5 (13)</a></li>
                                </ul>
                            </div>
                            <!-- Manufactures List End -->
                            <!-- Most Viewed Product Start -->
                            <div class="most-viewed">
                                <h3>most viewed</h3>
                                <!-- Most Viewed Product Activation Start -->
                                <div class="most-viewed-product owl-carousel">
                                    <!-- Triple Product Start -->
                                    <div class="triple-product">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                <p class="price"><span>$122.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">congue sitamet</a></h4>
                                                <p class="price"><span>$2000.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/4_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">dictum idrisus</a></h4>
                                                <p class="price"><span>$602.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- Triple Product End -->
                                    <!-- Triple Product Start -->
                                    <div class="triple-product">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/4_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                <p class="price"><span>$122.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">congue sitamet</a></h4>
                                                <p class="price"><span>$2000.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">dictum idrisus</a></h4>
                                                <p class="price"><span>$602.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- Triple Product End -->
                                    <!-- Triple Product Start -->
                                    <div class="triple-product">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/2_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">Carte Postal Clock</a></h4>
                                                <p class="price"><span>$122.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/3_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/3_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="<?=base_url()?>/item">congue sitamet</a></h4>
                                                <p class="price"><span>$2000.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-25">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=base_url()?>/item">
                                                    <img class="primary-img" src="<?=base_url();?>/public/img/new-products/4_1.webp" alt="single-product">
                                                    <img class="secondary-img" src="<?=base_url();?>/public/img/new-products/2_2.webp" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="javascript:void(0)">dictum idrisus</a></h4>
                                                <p class="price"><span>$602.00</span></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- Triple Product End -->
                                </div>
                                <!-- Most Viewed Product Activation End -->
                            </div>
                            <!-- Most Viewed Product End -->
                        </aside>
                    </div>
                    <!-- Sidebar End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categories Product End -->
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
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb2"> <img src="<?base_url()?>/public/img/new-products/1_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb3"> <img src="<?base_url()?>/public/img/new-products/2_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb4"> <img src="<?base_url()?>/public/img/new-products/2_2.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb5"> <img src="<?base_url()?>/public/img/new-products/3_1.webp" alt="product-thumbnail"></a>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="tab" href="<?=base_url();?>#thumb6"> <img src="<?base_url()?>/public/img/new-products/3_2.webp" alt="product-thumbnail"></a>
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