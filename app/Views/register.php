<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MiCasa | Register</title>
    <meta property="og:image" content="<?= base_url(); ?>/public/img/register.png" />
    <meta name="description" content="Register and get access to a variety of wonderful gifts that will suit your registry">
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
                            <li><a href="javascript:void(0)">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Page Breadcrumb End -->
    <!-- Register Account Start -->
    <div class="register-account">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="register-title">
                        <h3 class="mb-10">REGISTER ACCOUNT</h3>
                        <p class="mb-10">Already have an account with us? <a href="<?= base_url()?>/login" style="color: #e24646">Login here</a></p>
                    </div>
                    <form class="form-horizontal pb-100" id="register-form" method="post" action="#">
                        <fieldset>
                            <legend>Your Personal Details</legend>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="f-name" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="l-name" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="email" required placeholder="Enter you email address here...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="number" required placeholder="Telephone">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Your Password</legend>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="pwd" required placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="pwd-confirm" required placeholder="Confirm password">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="newsletter-input">
                            <legend>Newsletter</legend>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Subscribe</label>
                                <div class="col-md-10"><label class="radio-inline">
                                        <input type="radio" name="newsletter" value="1">
                                        Yes</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="newsletter" value="0" checked="checked">
                                        No</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons newsletter-input">
                            <div class="pull-right">
                                <input type="checkbox" required name="agree" value="1"> &nbsp;
                                I have read and agree to the <a href="<?=base_url()?>/policies" class="agree"><b>Privacy Policy</b></a> &nbsp;
                                <input type="submit" value="Continue" class="newsletter-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Register Account End -->
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