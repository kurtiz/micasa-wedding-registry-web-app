<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Home</title>
        <meta property="og:image" content="<?= base_url(); ?>/public/img/preview.png"/>
        <meta name="description" content="Need gifts for you registry? Look no further. We've got you.">
        <meta name="keywords" content="E-commerce registry wedding wed gift family "/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- place favicon.ico in the root directory -->
        <?= $this->include("widgets/css"); ?>
    </head>

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
            href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Preloader Start -->
        <?= $this->include("widgets/preloader"); ?>
        <!-- Preloader End -->
        <!-- Newsletter Popup Start -->
        <?php if (false): ?>
            <div class="popup_wrapper">
                <div class="test">
                    <span class="popup_off">Close</span>
                    <div class="subscribe_area text-center">
                        <h2>Newsletter</h2>
                        <p>Subscribe to the Micasa mailing list to receive updates on new arrivals, special offers and
                            other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <input autocomplete="off" type="text" name="message" id="message"
                                       placeholder="Enter your email address">
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
        <div class="slider-area pb-10">
            <!-- Main Slider Area Start -->
            <div class="">
                <!-- Slider Background  Image Start-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="p-20 img-fluid mx-auto d-block" style="width: 350px" src="<?= base_url() ?>/public/img/slider/AOA.png" alt=""/>
                        </div>
                    </div>
                </div>
                <!-- Slider Background  Image Start-->

            </div>
            <!-- Main Slider Area End -->
        </div>
        <!-- Slider Area End -->
        <!-- New Products Selection Start -->
        <div id="registry" class="new-products-selection pb-80">
            <div class="">
                <div id="registry-banner" class="row">
                    <!-- Section Title Start -->
                    <div class="col-12">
                        <div class="section-title text-center mb-40">
                            <span class="mb-15" style="font-family: 'Playfair Display',
                            serif; text-transform: capitalize">
                                <h2>
                                    <strong>
                                        Wedding Registry
                                    </strong>
                                </h2>
                            </span>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row px-1 mb-10">
                    <?php if (isset($products) && is_array($products)):?>
                        <?php foreach($products as $row):?>
                            <?php
                            if ($row['image'] !== "") {
                                $image = explode(",", $row['image']);
                                $image[] = "";
                                $image[] = "";
                                $image[] = "";
                            } else {
                                $image = ["", "", ""];
                            }
                             ?>
                            <?php if ($row["status"] == "active"):?>
                                <?php if ((int)$row["quantity"] > 0):?>
                                    <div class="col-6 col-lg-3 px-1">
                        <!-- New Products Activation Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="javascript:void(0)">
                                    <img class="primary-img" src="<?= ADMIN_URL.$image[0] ?>"
                                         alt="single-product">
                                </a>
                                <div class="quick-view" onclick="populate('<?=$row["product_id"]?>')" style="background: grey">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal"><i
                                                class="pe-7s-look"></i>view</a>
                                </div>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content price-style text-center">
                                <h4><a href="javascript:void(0)"><b><?=$row["product_name"]?></b></a></h4>
                                <p class="price">
                                    <b>
                                        <span class="currency-symbol">$</span>
                                        <span class="commas"><?=$row["cost_price"]?></span>
                                    </b>
                                </p>
                                <div class="action-links2 quick-view">
                                    <a data-bs-toggle="tooltip" style="color: #fffce0" title="Add to Cart"
                                       href="javascript:addToCart(<?=$row['product_id']?>, `<?=$row['product_name']?>`,
                                       <?=$row['cost_price']?>, 1, '<?=$image[0]?>')">add to cart</a>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- New Products Activation End -->
                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php else:?>
                        <div class="col-12 px-1 text-center">
                            <!-- New Products Activation Start -->
                            <h3>
                                All Products are out of stock.
                            </h3>
                            <p>
                                Please come back later....
                            </p>
                            <!-- New Products Activation End -->
                        </div>
                    <?php endif;?>
                </div>
            </div>

            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- New Products Selection End -->
    <!-- New Products Banner Start -->

    <!-- New Products Banner End -->

    <!-- Best Seller Products Start -->

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
                    <button type="button" id="close-modal" class="btn-close" data-bs-dismiss="modal"></button>
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
                                                <img class="largeThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                     alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb2" class="tab-pane fade">
                                                <img class="largeThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                     alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb3" class="tab-pane fade">
                                                <img class="largeThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                     alt="product-thumbnail"/>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->

                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail mt-15 mb-20">
                                            <div class="thumb-menu nav owl-carousel">
                                                <div>
                                                    <a class="active" data-bs-toggle="tab"
                                                       href="<?= base_url() ?>#thumb1">
                                                        <img class="smallThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                                alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-bs-toggle="tab" href="<?= base_url() ?>#thumb2">
                                                        <img class="smallThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                                alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-bs-toggle="tab" href="<?= base_url() ?>#thumb3">
                                                        <img class="smallThumbs" src="<?= base_url() ?>/public/img/new-products/product-default-image.png"
                                                                alt="product-thumbnail"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-7 col-md-6">
                                        <div class="thubnail-desc fix">
                                            <h2 class="product-header mb-2" id="product-name">Product Name</h2>
                                            <!-- Product Rating End -->
                                            <!-- Product Price Start -->
                                            <div class="pro-price mb-15">
                                                <ul class="pro-price-list">
                                                    <li class="price">
                                                        <span class="currency-symbol-modal">$</span>
                                                        <span id="product-price" class="commas-modal">0.0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Product Price End -->
                                            <!-- Product Price Description Start -->
                                            <div class="product-price-desc mb-10">
                                                <ul class="pro-desc-list">
                                                    <li id="product-desc">

                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Product Price Description End -->
                                            <!-- Product Box Quantity Start -->
                                            <div class="box-quantity mb-30">
                                                <div class="quantity-item">
                                                    <label>Qty: </label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="number"  id="modal-quantity" name="qty"
                                                               value="1" max="">
                                                        <input type="text" readonly value="1" style="display: none" id="product-quantity" name=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Box Quantity End -->
                                            <!-- Product Button Actions Start -->
                                            <div class="product-button-actions">
                                                <button id="add-cart" data-product-id="" class="add-to-cart">add to cart</button>
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
    <script>

        gloVar = "";
        const base_url = "<?=ADMIN_URL?>";
        const local_url = "<?=base_url()?>";
        let Cart = {};
        let products = {};
        $(document).ready(() => {
          products = <?=json_encode((object)$products)?>;
            saveWithExpiry("products", JSON.stringify(products), "3600000");
            if(!getCookie("currency")){
                setCookie("currency", "usd", 3);
            }

            if(getWithExpiry("cart") !== null && getWithExpiry("cart") !== "{}"){
                Cart =  JSON.parse(getWithExpiry("cart"))
                for(const key in Cart){
                    for (let _ in products) {
                        if (products[_].product_id === key) {
                            if(parseInt(products[_].quantity) > 0){
                                addToCartWithoutToast(Cart[key].id, Cart[key].name, Cart[key].price, Cart[key].quantity, Cart[key].image);
                            } else {
                                delete Cart[key];
                                saveWithExpiry("cart", JSON.stringify(Cart), "3600000")
                            }
                        }
                    }

                }
            }
            addComma("commas")

        })

        function populate(id) {

            let defaultImg = "/public/img/uploads/products/product-default-image.png";
            let largeThumbs = $(".largeThumbs");
            let smallThumbs = $(".smallThumbs");
            let productName = $("#product-name");
            let productPrice = $("#product-price");
            let productDesc = $("#product-desc");
            let productQuantity = $("#product-quantity");
            let modalQuantity = $("#modal-quantity");
            let btnAddCart = $("#add-cart");
            let index = 0;
            productQuantity.val(1)
            modalQuantity.val(1)
            // let products = getWithExpiry("products");
            // products = JSON.parse(products);

            let product = getObjects(products, "product_id", id);
            product = product[0];
            productName.text(product.product_name)
            productPrice.text(product.cost_price)
            productDesc.text(product.description)
            btnAddCart.prop("data-product-id", id)
            modalQuantity.prop("max", product.quantity)


            if (product.image !== "") {
                let images = product.image.split(",");
                for (index = 0; index < 3; index++) {
                    if (images[index] === "" || images[index] === undefined) {
                        images[index] = defaultImg;
                    }
                }

                for (index = 0; index < 3; index++) {
                    smallThumbs[index].src = base_url + images[index];
                    largeThumbs[index].src = base_url + images[index];
                }
            }

            addComma("commas-modal")
        }
    </script>
    </body>
    </html>
<?= $this->endSection(); ?>