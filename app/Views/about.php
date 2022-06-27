<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MiCasa | About Us</title>
    <meta property="og:image" content="<?= base_url(); ?>/public/img/preview.png" />
    <meta name="description" content="Need gifts for you registry? Look no further. We've got you.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <?= $this->include("widgets/css"); ?>
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
                            <li><a href="javascript:void(0)">about us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Page Breadcrumb End -->
    <!-- Privacy Policy Start -->
    <div class="privacy-policy pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us">
                        <img class="img" src="<?= base_url(); ?>/public/img/products-banner/about-banner.jpg" alt="blog-image">
                        <h2>About Us</h2>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, voluptates
                            hic adipisci dicta ad nihil minus tempora quae architecto? Tempora officia maiores
                            voluptatum qui nisi, cumque aut id earum veritatis adipisci eius doloremque doloribus,
                            ratione quos neque fugiat quae nam obcaecati blanditiis commodi. Repellat nemo
                            laudantium possimus rerum impedit dolorum.</p>
                        <p>
                            blanditiis explicabo eaque ipsum id maxime laborum rerum esse! Officia tenetur, cumque
                            velit et quibusdam dignissimos laborum necessitatibus non modi error rem dolores sed
                            illum fugit, rerum sit quidem? Sapiente quisquam distinctio vel dolorem accusantium
                            iusto, dolorum a rerum hic deserunt perspiciatis amet tempore repudiandae itaque soluta
                            ratione eius esse numquam error. Eius fugit laudantium corrupti, quasi, neque
                            consequatur, cupiditate quidem molestias adipisci dolore similique deserunt architecto?
                            Tempore incidunt ad molestiae labore voluptatibus impedit, molestias, error sapiente
                            voluptatem fugit a provident saepe iusto laborum accusamus ab vel architecto aut quam
                            nobis odio minima. Aspernatur libero hic, rerum possimus dolore mollitia odit sint
                            eveniet beatae minus similique tempore amet necessitatibus velit asperiores sunt quis
                            fuga perferendis eius maxime. Mollitia voluptas at quas optio nihil asperiores
                            praesentium molestias accusantium, alias, delectus, expedita nesciunt ad tenetur
                            quibusdam beatae!</p>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Privacy Policy End -->
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