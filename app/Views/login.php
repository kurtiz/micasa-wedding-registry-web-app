<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MiCasa | Login</title>
    <meta property="og:image" content="<?= base_url(); ?>/public/img/login.png" />
    <meta name="description" content="Login in save your registry, wishlist and access it anywhere.">
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
               <?= $this->include("widgets/preloader") ?>
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
                            <li><a href="javascript:void(0)">log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Page Breadcrumb End -->
    <!-- LogIn Page Start -->
    <div class="log-in pb-100">
        <div class="container">
            <div class="row">
                <!-- New Customer Start -->
                <div class="col-md-6">
                    <div class="well">
                        <div class="new-customer">
                            <h3>NEW CUSTOMER</h3>
                            <p class="mtb-10"><strong>Register</strong></p>
                            <p>By creating an account you will be able to shop faster, be up-to-date on an order's status,
                                and keep track of the orders you have previously made with any device</p>
                            <a class="customer-btn" href="<?=base_url()?>/register">continue</a>
                        </div>
                    </div>
                </div>
                <!-- New Customer End -->
                <!-- Returning Customer Start -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10">RETURNING CUSTOMER</h3>
                            <p class="mb-10"><strong>I am a returning customer</strong></p>
                            <form id=login-form" method="post" action="#">
                                <div class="form-group">
                                    <label for="input-email" class="control-label">Enter you email address here...</label>
                                    <input type="email" name="email" placeholder="Enter you email address here..." id="input-email" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="input-password" class="control-label">Password</label>
                                    <input type="password" name="pass" placeholder="Password" required id="input-password" class="form-control">
                                </div>
                                <p class="lost-password"><a href="<?= base_url() ?>/forgot" style="color: #1a1a1a">Forgot password ?</a></p>
                                <input type="submit" value="Login" class="return-customer-btn">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Returning Customer End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- LogIn Page End -->
    <!-- Footer Start -->
    <?= $this->include("widgets/footer"); ?>
    <!-- Footer End -->
</div>
<!-- Wrapper End -->
<!-- jquery 3.12.4 -->

<?= $this->include("widgets/javascript"); ?>

</body>

</html>
<?= $this->endSection(); ?>
