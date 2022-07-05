<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Checkout</title>
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
                                <li><a href="<?= base_url(); ?>">home</a></li>
                                <li><a href="javascript:void(0)">checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Breadcrumb End -->
        <!-- coupon-area start -->
        <div class="coupon-area">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>checkout</h2>
                </div>
            </div>
            <!-- coupon-area end -->
            <!-- checkout-area start -->
            <div class="checkout-area pt-30">
                <div class="container">
                    <form id="checkout-form" action="<?= base_url() ?>/checkout/send" method="post" class="row">
                        <div class="col-lg-6">
                            <div class="checkbox-form pb-50">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" id="userFname" required name="fname" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" id="userLname" required name="lname" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input id="cus-email" type="email" required name="email" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" id="userPhoneNumber" required name="phone_number"/>
                                            <input type="text" hidden readonly id="reference_code" required name="reference"/>
                                        </div>
                                    </div>
                                    <div class="order-notes col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" name="order_notes"
                                                      placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="different-address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                        </tr>
                                        <tr class="order-total">

                                            <td>
                                                <strong>
                                                    <span>$</span>
                                                    <span id="checkout-total" class="amount commas">
                                                        <?= $cartInfo['total'] ?>
                                                    </span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="accordion" role="tablist"
                                             aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                           href="#collapseThree" aria-expanded="false"
                                                           aria-controls="collapseThree">
                                                            Pay with Credit Card Or Mobile Money
                                                        </a>
                                                    </h4>
                                                </div>
<!--                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"-->
<!--                                                     aria-labelledby="headingThree" data-bs-parent="#accordion">-->
<!--                                                    <div class="panel-body">-->
<!--                                                        <p>-->
<!--                                                            We accept credit cards and mobile money.-->
<!--                                                        </p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input id="makePayment" type="submit" value="Place order"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- checkout-area end -->
            <!-- Footer Start -->
            <?= $this->include("widgets/footer"); ?>
            <!-- Footer End -->
        </div>
        <!-- Wrapper End -->
        <!-- jquery 3.12.4 -->
        <?= $this->include("widgets/javascript"); ?>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

        <script>
            $(document).ready(function () {
                addComma("commas")
            })

            const paymentForm = document.getElementById('checkout-form');
            paymentForm.addEventListener("submit", payWithPayStack, false);
            // let paymentForm = $('#checkout-form');
            function payWithPayStack(e) {
                e.preventDefault();
                let amountPayable = parseFloat($("#checkout-total").text().replaceAll(",", "")) * 8.10;
                amountPayable = parseFloat(amountPayable).toFixed(2);
                amountPayable = parseFloat(amountPayable) * 100
                let reference = '' + Math.floor((Math.random() * 1000000000) + 1);
                let handler = PaystackPop.setup({
                    key: 'pk_test_847298ebb5c624e8cad55c6db8db8231b45d91bb', // Replace with your public key
                    email: $("#cus-email").val(),
                    amount: parseFloat(amountPayable).toFixed(2),
                    currency: "GHS",
                    metadata: {
                        "firstname": $("#userFname").val(),
                        "lastname": $("#userLname").val(),
                    },
                    ref: reference,
                    onClose: function () {
                        alert('Cancelled Payment');
                    },
                    callback: function (response) {
                        let message = 'Payment complete! Reference: ' + response.reference;
                        localStorage.removeItem("cart")
                        if (typeof Cart !== 'undefined') {
                            delete Cart
                        }
                        $("#reference_code").val( response.reference)
                        paymentForm.submit()
                    }
                });
                handler.openIframe();
            }
            // paymentForm.on("submit", () => {
            //     payWithPayStack()
            // })

        </script>
    </body>

    </html>
<?= $this->endSection(); ?>