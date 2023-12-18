<?= $this->include("layout/header") ?>
<!-- Menu Section -->
<section class="menu home">
  
    <div class="container">
        <h2 >MENU</h2>
        <p><b>Choose Your Taste</b></p>
        <div class="row ">
            <div class="col-lg-4 mt-2">
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chessy Spicy Burger</h5>
                        <p class="card-text"> Burger With Crispy Veg Patty, Fresh Onion And Our Signature Sauce.</p>
                        <a href="#" class="btn btn-danger">$35</a>
                    </div>
                </div>

            </div>


            <div class="col-lg-4 mt-2">
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_image_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Double Chesse Burger</h5>
                        <p class="card-text">Burger With Crispy Veg Double Patty, Fresh Onion And Our Signature Sauce.</p>
                        <a href="#" class="btn btn-danger">$44</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-2">
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Grill Burger</h5>
                        <p class="card-text">Burger With Crispy Chicken Double Patty, Onion And Classic Mayo Sauce.</p>
                        <a href="#" class="btn btn-danger">$60</a>
                    </div>
                </div>
            </div>


        </div>









        <div class="row mt-4">
            <div class="col-lg-4 mt-2">
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chessy Spicy Burger</h5>
                        <p class="card-text"> Burger With Crispy Veg Patty, Fresh Onion And Our Signature Sauce.</p>
                        <a href="#" class="btn btn-danger">$35</a>
                    </div>
                </div>

            </div>


            <div class="col-lg-4 mt-2">
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_image_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Double Chesse Burger</h5>
                        <p class="card-text">Burger With Crispy Veg Double Patty, Fresh Onion And Our Signature Sauce.</p>
                        <a href="#" class="btn btn-danger">$44</a>
                    </div>
                </div>
            </div>

            <?php foreach ($burgers as $burger): ?>
            <div class="col-lg-4 mt-2">
            
                <div class="card home">
                    <img src="<?= base_url() ?>public/images/burger_2.png" class="img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $burger['name'] ?></h5>
                        <p class="card-text"><?= $burger['description'] ?></p>
                        <a href="#" class="btn btn-danger">$ <?= $burger['price'] ?></a>
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>

        </div>
























    </div>

</section>
<?php foreach ($contents as $content):?>
    <?php if ($content->page_title === $page): ?>
<section>

<div class="container shadow-lg p-3 mb-5 bg-white rounded mt-4">
            <div class="row" style="padding-left: 0%;">
          
                <div class="col-md-6">
                    <h3 style="padding-top: 30px;"><?= $content->sub_heading; ?></h3>
                    <h2><?= $content->heading ?></h2>
                    <p><?= $content->main_content ?> </p>
                    <div style="padding-top: 10vw;">
                        <span class="dot" style="background-color: #ffc045;"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="<?= base_url('public/uploads/'.$content->content_image) ?>" alt="">
                    <img src="<?= base_url('public/uploads/'.$content->back_image) ?>" alt="">                
                </div>
                
            </div>
        </div>

</section>
<?php endif; ?> 

<?php endforeach; ?>

<?= $this->include("layout/footer") ?>