<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("public/css/all.css") ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Montserrat&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("public/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/css/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/css/menu.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/css/burger.css") ?>">


    <title>Home Page</title>
</head>

<body>






    <!-- section1 -->
    <!-- <section class="home">
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="row">
                    <div class="container col-md-12 col-sm-12">
                        <a class="navbar-brand" href="">
                            <img style="height:5vw" src="<?= base_url() ?>public\images\place_your_logo_here_doub_2.png" alt=""
                                class="img">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 50vw;">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        

                    </div>
                </div>
                </div>
                <div class="container3 col-md-9">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto col-sm-9 mb-2 mb-lg-2 justify-content-end">
                            <img src="<?= base_url() ?>public\images\vector_smart_object.png" class="delivery-logo" alt="">
                            <span class="phone nowrap"><strong>Express Delivery +1 234 567 890</strong></span>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>"><strong>HOME</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/menu') ?>"><strong>MENU</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/story') ?>"><strong>OUR STORY</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/contact') ?>"><strong>CONTACT US</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/new') ?>"><strong>ADMIN</strong></a>
                        </li>
                    </ul>
                </div>

                </div>
            </nav>
        </header>


    </section> -->



    <section class="home">
        <header>
        <nav class="navbar home fixed-top navbar-expand-lg "style="width:100vw;">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?= base_url() ?>"><img style="height:5vw"
                        src="<?= base_url() ?>public\images\place_your_logo_here_doub_2.png" alt="" class="img"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end home" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img src="<?= base_url() ?>public\images\place_your_logo_here_doub_2.png" alt="">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="">
                        <li class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <img src="<?= base_url() ?>public\images\vector_smart_object.png" class="delivery-logo"
                                alt="">
                            <span class="phone nowrap"><strong>Express Delivery +1 234 567 890</strong></span>
                        </li>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/homes') ?>"><strong>HOME</strong></a>
                            </li>
                        <?php foreach($pages as $page): ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="<?= url_to($page->page_title) ?>"><strong><?=$page->page_title?></strong></a>
                            </li>
                            <?php endforeach ?>
                          
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/menu') ?>"><strong>MENU</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/story') ?>"><strong>OUR STORY</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/contact') ?>"><strong>CONTACT US</strong></a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/dashboard') ?>"><strong>ADMIN</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        </header>
    </section>