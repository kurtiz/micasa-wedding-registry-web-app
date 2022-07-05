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
        <meta name="keywords" content="E-commerce"/>
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
                                <li><a href="<?= base_url() ?>">home</a></li>
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
                        <form id="cart-table" method="post" action="<?=base_url()?>/checkout">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotals">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($cart) && is_array($cart)): ?>
                                        <?php foreach ($cart as $item): ?>
                                            <?php if ($item["msg"] != "available"): ?>
                                                <tr id="item-<?=$item["id"]?>" style="background: rgba(255,123,99,0.89); color: white;">
                                                    <td class="product-thumbnail">
                                                        <s>
                                                            <a href="javascript:void(0)">
                                                                <img src="<?= ADMIN_URL . $item["image"] ?>"
                                                                     alt="cart-image"/>
                                                            </a>
                                                        </s>
                                                    </td>
                                                    <td class="product-name" style="font-weight: bold">
                                                        <s>
                                                            <?= $item["name"] ?>
                                                        </s>
                                                    </td>
                                                    <td class="product-price" style="font-weight: bold">
                                                        <s>
                                                            <span class="commas"><?= $item["price"] ?></span>
                                                        </s>
                                                    </td>
                                                    <td class="product-quantity-figures">
                                                        <?= $item["msg"] ?>
                                                    </td>
                                                    <td class="product-subtotals">
                                                        <s>0.00</s>
                                                    </td>
                                                    <td class="product-remove">
                                                        <s>
                                                            <a href="javascript:deleteRow(<?=$item['id'] ?>, 'total-cart', 'product-subtotal')">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </a>
                                                        </s>
                                                    </td>
                                                </tr>
                                            <?php else: ?>
                                                <tr id="item-<?= $item["id"] ?>">
                                                    <td class="product-thumbnail">
                                                        <a href="javascript:void(0)">
                                                            <img src="<?= ADMIN_URL . $item["image"] ?>"
                                                                 alt="cart-image"/>
                                                            <input type="text" hidden readonly name="product_id[]" value="<?= $item["id"]?>"/>
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)"><?= $item["name"] ?></a>
                                                            <input type="text" hidden readonly name="product_name[]" value="<?= $item["name"]?>"/>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount commas"><?= $item["price"] ?></span>
                                                            <input type="text" hidden readonly name="product_price[]" value="<?= $item["price"]?>"/>
                                                    </td>
                                                    <td class="product-quantity-figures">
                                                        <input type="text" readonly name="product_quantity[]" value="<?= $item["quantity"] ?>"/>
                                                        <input type="text" hidden readonly name="product_quantities[]" value="<?=(float)$item['price'] * (float)$item['quantity']?>"/>
                                                    </td>
                                                    <td class="product-subtotal commas">
                                                        <?=(float)$item['price'] * (float)$item['quantity']?>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="javascript:deleteRow(<?= $item['id'] ?>, 'total-cart', 'product-subtotal')">
                                                            <i class="fa fa-times" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
                                        <br/>
                                        <table>
                                            <tbody>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong>
                                                        <span class="currency-symbol">$
                                                            <span id="total-cart" class="amount"></span>
                                                            <input type="text" id="total-cart-input" hidden readonly name="products_total" value="0"?>
                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="javascript:sendCartToCheckout()">Proceed to Checkout</a>
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

            // let cartSubTotals = $(".cart-subtotal")
            let totalCart = $("#total-cart")
            let totalCartInput = $("#total-cart-input")
            totalCart.text(overallSumLabel("product-subtotal"))
            totalCartInput.val(overallSumLabel("product-subtotal").replaceAll(",",""))

        })
    </script>
    </body>

    </html>
<?= $this->endSection(); ?>