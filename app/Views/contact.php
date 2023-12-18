<?= $this->include("layout/header") ?>
<section class="contact mb-4">
    <div class="row contact">
        <div class="container request col-md-5 mt-3 mb-3">
            <span style="display: inline-block;"><i class="fa fa-circle-info" style="margin-right: 10px;"></i>
                <h4 style="display: inline;">Request Info</h4>
            </span>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <input type="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="comment" placeholder="Comment" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>


        <div class="container add col-md-5 mt-3" style="position:relative;  ">
            <div class="row">
                <div class="back-map-image"></div>
                <div class="address-content">
                <span style="display: inline-block;"><i class="fa fa-map-marker-alt" style="margin-right: 10px;"></i>
                    <h4 style="display: inline;">Address</h4>
                </span>
                <p>
                Burger House Pvt. Ltd.
                <br>
                Address : A -901, 9th Floor Urbtech Trade Centre, Sector 132 Noida UP, Noida -201301.
                <br>
                Email : info@burgerhouse.net.in
                <br>
                Website : www.burgerhouse.net.in
                </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($page === 'Contact Us'): ?>
<?php foreach ($contents as $content):?>
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
<?php endforeach; ?>
<?php endif; ?>

<?= $this->include("layout/footer") ?>