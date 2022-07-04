<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Cart</title>
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
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?=base_url()?>">home</a></li>
                                <li><a href="javascript:void(0)">cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- cart-main-area & wish list start -->
        <div class="cart-main-area pb-100">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title mb-50">
                    <h2>cart</h2>
                </div>
                <!-- Section Title Start End -->
                <div class="row">
                    <div class="col-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="javascript:void(0)"><img src="img/new-products/2_2.webp" alt="cart-image" /></a>
                                        </td>
                                        <td class="product-name"><a href="javascript:void(0)">dictum idrisus</a></td>
                                        <td class="product-price"><span class="amount">£165.00</span></td>
                                        <td class="product-quantity-figures"><input type="text" readonly value="1" /></td>
                                        <td class="product-subtotal">£165.00</td>
                                        <td class="product-remove"> <a href="javascript:void(0)"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                                <!-- Cart Button Start -->
                                <div class="col-lg-8 col-md-7">
<!--                                    <div class="buttons-cart">-->
<!--                                        <input type="submit" value="Update Cart" />-->
<!--                                        <a href="javascript:void(0)">Continue Shopping</a>-->
<!--                                    </div>-->
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-lg-4 col-md-5">
                                    <div class="cart_totals">
                                        <h2>Cart Totals</h2>
                                        <br />
                                        <table>
                                            <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount">$215.00</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong><span class="amount">$215.00</span></strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="javascript:void(0)">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Contact Email Area End -->
        <!-- Footer Start -->
        <?= $this->include("widgets/footer"); ?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <?= $this->include("widgets/javascript"); ?>
    <script>
        $(document).ready(() => {
            let cookie = <?=json_encode((object)$products)?>;
            saveWithExpiry("products", JSON.stringify(cookie), "3600000");
            // if(!getCookie("currency")){
            //     setCookie("currency", "usd", 3);
            // }
            addComma("commas")

        })
    </script>
    </body>

    </html>
<?= $this->endSection(); ?>