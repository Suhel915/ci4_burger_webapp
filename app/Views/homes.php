<?= $this->include('layout/header') ?>


<!-- Section-A -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
        <?php foreach ($sectionAs as $key => $section): ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" <?php if ($key === 0) echo 'class="active"'; ?> aria-current="true" aria-label="Slide <?= $key + 1 ?>"></button>
        <?php endforeach; ?>
    </div>

 
    <div class="carousel-inner">
        <?php foreach ($sectionAs as $key => $section): ?>
            <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">

    <div class="container-fluid home">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 100px 15px 2px 40px;">
                <div class="rectangle-box">
                    <?= $section->main_content; ?>
                </div>
                <div class="container1">
                    <p class="head-burger-1">
                        <?= $section->heading; ?>
                    </p>
                    <h2 class="head-burger-2">
                        <?= $section->sub_heading; ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right: 26vw; padding-top: 4vw;">
                <div class="row merge">
                    <div class="col-3">

                        <div class="ecllipse">
                            <div class="ecllipse-border "></div>
                        </div>


                        <img class="red-circle-price fade-in-element" src="<?= base_url() ?>public/images/price.png" alt="">
                    </div>
                    <div class="col-3">

                        <img class="french-fries " src="<?= base_url() ?>public/images/french_fries.png" alt="">

                    </div>

                    <div class="col-3">
                        <img class="burger-image popup" src="<?= base_url() ?>public/images/burger_image_4.png" alt="">
                        <img class="shadow-burger popup" src="<?= base_url() ?>public/images/Shadow (1).png" alt="">
                    </div>
                    <div class="col-3">
                        <img class="drinks " src="<?= base_url() ?>public/images/drinks.png" alt="">
                        <img class="shadow-drinks " src="<?= base_url() ?>public/images/Shadow (1).png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>





<!-- Section-B -->


<section class="group-2 mb-4">
    <div class="container mt-4 mb-4 ">
        <div class="row">
            <?php //foreach ($sectionBs as $section): ?>
            <?php for ($i = 0; $i < 1; $i++): ?>
                <div class="burger_image_3 mt-2 col-md-6 "
                    style="background-image: url('<?= base_url('public/uploads/' . $sectionBs[$i]->back_image) ?>');">
                    <div class="col-md-11">
                        <span class="head-2 mt-2">
                            <?= $sectionBs[$i]->sub_heading; ?>
                        </span>
                        <br>
                        <span class="subhead-2">
                            <?= $sectionBs[$i]->heading; ?>
                        </span>
                        <br>
                        <p>
                            <?= $sectionBs[$i]->additional_content; ?>
                        </p>
                    </div>
                </div>
                <?php // endforeach; ?>

                <div class="col-md-6 ">
                    <div class="row mt-2 justify-content-center">
                        <div class="image_3 col-md-11 mb-2 "
                            style="background-image: url('<?= base_url('public/uploads/' . $sectionBs[($i + 1) % count($sectionBs)]->back_image) ?>');">
                            <span class="head-2 mt-2">
                                <?= $sectionBs[($i + 1) % count($sectionBs)]->sub_heading; ?>
                            </span>
                            <br>
                            <span class="subhead-2">
                                <?= $sectionBs[($i + 1) % count($sectionBs)]->heading; ?>
                            </span>
                            <br>
                            <p>
                                <?= $sectionBs[($i + 1) % count($sectionBs)]->additional_content; ?>
                            </p>
                        </div>
                        <div class="image_2 col-md-11 "
                            style="background-image: url('<?= base_url('public/uploads/' . $sectionBs[($i + 2) % count($sectionBs)]->back_image) ?>');">
                            <span class="head-2 mt-2">
                                <?= $sectionBs[($i + 2) % count($sectionBs)]->sub_heading; ?>
                            </span>
                            <br>
                            <span class="subhead-2">
                                <?= $sectionBs[($i + 2) % count($sectionBs)]->heading; ?>
                            </span>
                            <br>
                            <p>
                                <?= $sectionBs[($i + 2) % count($sectionBs)]->additional_content; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>








<!-- Section-C -->

<section class="group-3 mt-5">
    <div class="container">
        <div class="row text-center justify-content-center">
            <?php foreach ($sectionEs as $section): 
                ?>
                <div class="col-md-4" style="max-width: 25%; background-color: #ffc045;">
                    <p class="rectangle-head">
                        <?= $section->sub_heading; ?>
                    </p>
                </div>
                <h2 class="mt-1">
                    <?= $section->heading; ?>
                </h2>
                <p class="  mb-2">
                    <?= $section->main_content; ?>
                </p>
            <?php endforeach; ?>
            <?php
            $count = 0; foreach ($sectionCs as $section): 
                if( $count < 3): ?>
                <div class="col-md-4 col-sm-8 col-xs-8 mb-4">


                    <div class="three-image mb-4 ">
                        <img src="<?= base_url('public/uploads/' . $section->content_image) ?>" alt="Responsive Image"
                            class="post-img col-md-10 col-sm-8 col-xs-8 fade-in-element">
                        <br>
                        <img src="<?= base_url() ?>public/images/shadow.png" alt=""
                            class="post-img-shadow col-md-10 col-sm-8 col-xs-12 fade-in-element">
                    </div>
                    <h3>
                        <?= $section->heading; ?>
                    </h3>
                    <p>
                        <?= $section->sub_heading; ?>
                    </p>
                    <button type="button" class="btn btn-danger"
                        style="border-radius: 0%; padding-left: 2.5vw; padding-right: 2.5vw;">
                        <p class="order-btn" style="margin-bottom: 0vw;">Order Now</p>
                    </button>


                </div>
            <?php 
        $count++;
            endif;
        endforeach; ?>

        </div>
    </div>
</section>










<!-- Section-D -->

<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators" style="top:430px; right: 937px; margin-left: 99px;">
    <?php $i = 0; ?>
    <?php foreach ($sectionDs as $section): ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="dot <?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i + 1 ?>"></button>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>

        <div class="carousel-inner">
            <?php $i = 0; ?>
            <?php foreach ($sectionDs as $section): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <div class="container shadow-lg p-3 mb-5 bg-white rounded mt-4">
                        <div class="back_img_123" style="background-image: url('<?= base_url('public/uploads/' . $section->back_image) ?>');">
                            <div class="row" style="padding-left: 0%;">
                                <div class="col-md-6">
                                    <h3 style="padding-top: 30px;"><?= $section->sub_heading; ?></h3>
                                    <h2><?= $section->heading ?></h2>
                                    <p><?= $section->main_content ?></p>
                             
                                </div>
                                <div class="col-md-6">
                                    <img src="<?= base_url('public/uploads/' . $section->content_image) ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>








<!-- Section-E -->



<section class="group-5 mt-4">
    <div class="row" style="margin-right:0vw">
        <div class="col-md-3">
            <img class="burger-3" src="<?= base_url() ?>public/dimages/Burger (1).png" alt=""
                class="col-md-12 col-sm-8">
            <img class="bottle" src="<?= base_url() ?>public/dimages/bottle.png" alt="" class="col-md-12 col-sm-8">
        </div>
        <div class="container text-center justify-content-center col-md-6">
            <h3 style="padding-top: 9vw;">
                <?= $section->sub_heading; ?>
            </h3>
            <h2>
                <?= $section->heading; ?>
            </h2>
            <div class="row" style="padding-top: 5vw;">
                <div class="form-1 mt-2 col-6">
                    <input placeholder="NAME" class="form-control mb-4" type="text">
                    <input placeholder="DATE" class="form-control mb-4" type="text">
                    <input placeholder="PEOPLE" class="form-control" type="text">
                </div>
                <div class="form-2 mt-2 col-6">
                    <input placeholder="EMAIL" class="form-control mb-4" type="text">
                    <input placeholder="TIME" class="form-control mb-4" type="text">
                    <button type="button" class="btn btn-danger" placeholder=""
                        style="max-height: 38px; padding: 0 25%;">

                        <p class="find-btn-table">
                            <?= $section->sub_heading; ?>
                        </p>

                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 row" style="margin-right:0%">
            <div class="plate">
                <img class="plate-img" src="<?= base_url() ?>public/dimages/image.png" alt=""
                    class="col-md-12 col-sm-8 col-xs-8">
            </div>
        </div>

    </div>
</section>


    <!-- Section-F -->



    <section class="blog_w3ls py-5" id="blog">
		    <div class="container py-xl-5 py-lg-3">
			    <div class="title-section text-center mb-md-5 mb-4">
				    <!-- <p class="w3ls-title-sub">Blog</p> -->
				    <h3 class="">Our Latest <span>Post</span></h3>
				    <p class="titile-para-text mx-auto">Every now and then, a new location, a new dish or a concept change can create an entirely new dining experience. Such is the case at Burger House. Burger House, Noida, Sector -28 is an oasis of delicious food 
                                 and drink choices and of course, the best Grilled Burgers!
                        </p>
			    </div>
			    <div class="row">
                <?php foreach ($sectionFs as $section): ?>
				    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
					    <div class="card border-0">
						    <div class="card-header p-0">
    							<img src="<?= base_url() ?>public/images/burger_2.png" alt="" class="img-blog rounded-circle img-fluid">
						    </div>
						    <div class="card-body text-center pt-5 mt-2">
    							<h5 class="blog-title card-title mb-2"><?= $section->heading; ?></h5>
    							<div class=" border-top border-bottom py-1 mb-3">
    								<span><?= $section->sub_heading; ?> </span>
    							</div>
    							<p><?= $section->additional_content; ?></p>
    							
						    </div>
					    </div>
				    </div>
                    <?php endforeach; ?>
			    </div>
		    </div>
	    </section>







<script>
    $(document).ready(function () {
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false
                    }
                }
                // Add more responsive settings if needed
            ]
        });
    });
</script>

<?= $this->include('layout/footer') ?>