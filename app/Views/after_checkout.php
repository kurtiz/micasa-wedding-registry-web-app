<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Thank You</title>
        <meta name="description" content="Default Description">
        <meta name="keywords" content="E-commerce" />
        <meta name="theme-color" content="#404E67"/>
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
        <?= $this->include("widgets/preloader"); ?>
        <!-- Preloader End -->
        <!-- Header Area Start -->
        <?= $this->include("widgets/header"); ?>
        <!-- Header Area End -->
        <div class="error404-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="error-wrapper text-center">
                            <div class="error-text">
                                <h2>Thank You</h2>
                                <h3>For Your Purchase</h3>
                                <p>
                                    We are processing your order. Please click button below to continue shopping.
                                </p>
                            </div>
                            <div class="error-button">
                                <a href="<?=base_url()?>">continue shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?= $this->include("widgets/footer")?>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <?= $this->include("widgets/javascript")?>
    </body>

    </html>
<?= $this->endSection(); ?>