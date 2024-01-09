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


    <section class="home">
        <header>

            <nav class="navbar home fixed-top navbar-expand-lg " style="width:100vw;">
                <div class="container-fluid">

                    <a class="navbar-brand" href="<?= base_url() ?>"><img style="height:5vw"
                            src="<?= base_url() ?>public\images\place_your_logo_here_doub_2.png" alt="" class="img"></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end home" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                <img src="<?= base_url() ?>public\images\place_your_logo_here_doub_2.png" alt="">
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
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
                                <?php if (auth()->loggedIn()): ?>
                            
                                    <?php if (isset($pages) && !empty($pages)): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('/homes') ?>"><strong>HOME</strong></a>
                                        </li>


                                        <?php foreach ($pages as $page): ?>
                                            <?php if (!empty($page->slug)): ?>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= isset($newlyCreatedPage) && $newlyCreatedPage->id == $page->id ? 'active' : '' ?>"
                                                        href="<?= base_url("/pages/" . $page->slug) ?>"><strong>
                                                            <?= $page->page_title ?>
                                                        </strong></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach ?>


                                        <!-- <li class="nav-item">
                                     <a class="nav-link" href="<?= base_url('/menu') ?>"><strong>MENU</strong></a>
                                     </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('/story') ?>"><strong>OUR STORY</strong></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('/contact') ?>"><strong>CONTACT
                                                    US</strong></a>
                                        </li>
                                        
                                        <?php if(auth()->user()->role === "Admin" || auth()->user()->role === "Editor"): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('/dashboard') ?>"><strong>ADMIN</strong></a>
                                        </li>
                                      <?php endif; ?>
                                      
                                      
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('logout') ?>"><strong>Logout</strong></a>
                                        </li>
                                    <?php endif; ?>
                                <?php else: ?>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('/login') ?>"><strong>Login</strong></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="<?= base_url('/register') ?>"><strong>Register</strong></a>
                                        </li>
                                        <li class="nav-item">
                                        <a href=""><?php //auth()->user()->username; ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>

                        </div>

                    </div>
                </div>
            </nav>


        </header>
    </section>