<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!doctype html>
    <html class="no-js" lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiCasa | Contact Us</title>
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
        <div class="main-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center ptb-70">
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?= base_url();?>">home</a></li>
                                <li><a href="javascript:void(0)">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Google Map Start -->
<!--        <iframe class="contact-map-size mt-100"-->
<!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!2sNew%20York,%20NY,%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd"-->
<!--                allowfullscreen="" loading="lazy">-->
<!--        </iframe>-->
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-5">Contact Us</h3>
                        <p class="text-capitalize mb-40">Let's get in touch</p>
                        <div class="row">
                            <form id="contact-form" class="contact-form" method="post" action="#">
                                <div class="address-wrapper">
                                    <div class="col-12">
                                        <div class="address-fname">
                                            <input type="text" name="con_name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="address-email">
                                                    <input type="email" name="con_email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="address-web">
                                                    <input type="text" name="con_website" placeholder="Website">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="address-subject">
                                            <input type="text" name="con_subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="address-textarea">
                                            <textarea name="con_message" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-messege ml-15"></p>
                                <div class="col-12 footer-content mail-content">
                                    <div class="send-email pull-right">
                                        <button type="submit" class="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    </body>

    </html>
<?= $this->endSection(); ?>