<?= $this->include("layout/header") ?>

<section class="story">
<div class="backstory-image"></div>
    <div class="container mt-3 mb-4">
        <!-- <h3 class=""style="text-align :center">Our Story</h3> -->
    
        <i class="fa fa-burger mt-2" style="letter-spacing: 4px;"><b>Crafting Deliciousness Since Day One</b></i>

        <p class="pstory mt-2">Welcome to our flavorful journey, where every bite tells a story. Our passion for burgers
            ignited years ago when two friends, <b>Alex</b> and <b>Sarah</b>, embarked on a culinary adventure. Fueled by a shared
            love for exceptional food and a craving for the perfect burger, they set out to create something
            extraordinary.
            <br>
            Their quest began with sourcing the finest, freshest ingredients. From hand-picked, farm-fresh vegetables to
            prime, grass-fed beef, each component was chosen meticulously to ensure quality and taste.
            <br>
            The kitchen became their playground, experimenting with a symphony of spices, blending flavors, and grilling
            techniques. They believed in the alchemy of combining the right ingredients in the perfect proportions to
            create a mouthwatering masterpiece.
            <br>
            After numerous trials and taste tests, they unveiled their first creation - "The Classic." A heavenly
            ensemble of a perfectly grilled patty, crisp lettuce, juicy tomatoes, crunchy pickles, and a secret sauce
            nestled within a toasted, golden bun. The reaction was instantaneous - friends and family couldn't get
            enough. Word spread like wildfire, and soon, the demand for their exceptional burgers skyrocketed.
            <br>
            Driven by their passion and the overwhelming response, Alex and Sarah decided to share their love for
            burgers with the world. They opened their first humble burger joint, promising to deliver not just a meal,
            but an experience. Every burger served would be a testament to their dedication to quality, taste, and
            innovation.
            <br>
            As the years passed, the menu expanded, showcasing an array of tantalizing options. From gourmet creations
            featuring unique toppings to vegetarian and vegan-friendly delights, there was something for every
            discerning palate.
            <br>
            But amidst the growth, one thing remained unchanged - their commitment to excellence. The same passion that
            fueled their very first burger continued to inspire every creation that left their kitchen.
            <br>
            Today, as you savor one of our signature burgers, you're not just tasting food; you're tasting a story - a
            story of dedication, creativity, and a relentless pursuit of burger perfection.
            <br>
            Join us on this gastronomic journey and indulge in the legacy of flavors that began with a simple dream - to
            craft the most extraordinary burger experience imaginable.
        </p>
        <i class="fa fa-burger" style="letter-spacing: 3px;"><b> Welcome to Our Burger Haven!</b></i>
    </div>
<hr>
</section>
<section class="blog_w3ls py-3" id="blog">
		    <div class="container py-xl-5 py-lg-3">
			    <div class="title-section text-center mb-md-5 mb-4">
				    <!-- <p class="w3ls-title-sub">Blog</p> -->
				    <h3 class="">Our Latest <span>Post</span></h3>
				    <p class="titile-para-text mx-auto">Every now and then, a new location, a new dish or a concept change can create an entirely new dining experience. Such is the case at Burger House. Burger House, Noida, Sector -28 is an oasis of delicious food 
                                 and drink choices and of course, the best Grilled Burgers!
</p>
			    </div>
			    <div class="row">
				    <!-- blog grid -->
				    <div class="col-lg-4 col-md-6">
					    <div class="card border-0">
						    <div class="card-header p-0">
                            <img src="<?= base_url() ?>public/images/burger_2.png" alt="" class="img-blog rounded-circle img-fluid">
						    </div>
						    <div class="card-body text-center pt-5 mt-2">
							    <h5 class="blog-title card-title mb-2">Joy</h5>
							    <div class=" border-top border-bottom py-1 mb-3">
								    <span>Saket, New Delhi - Jan 12</span>
							    </div>
							    <p>Burger House, This place is welcoming with charming service and dfood better than I have tasted since I was in India.</p>
						    </div>
					    </div>
				    </div>
				    <!-- //blog grid -->





				    <!-- blog grid -->
				    <div class="col-lg-4 col-md-6">
					    <div class="card border-0">
						    <div class="card-header p-0">
                            <img src="<?= base_url() ?>public/images/burger_2.png" alt="" class="img-blog rounded-circle img-fluid">
						    </div>
						    <div class="card-body text-center pt-5 mt-2">
							    <h5 class="blog-title card-title mb-2">Edwin</h5>
							    <div class=" border-top border-bottom py-1 mb-3">
								    <span>Sant Nagar, New Delhi - July 1</span>
							    </div>
    							<p>Great food and service, would highly recommend.Went there on mothering Sunday. Everything perfect. friendly staff.</p>
    							
						    </div>
					    </div>
				    </div>
				    <!-- //blog grid -->



                    
				    <!-- blog grid -->
				    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
					    <div class="card border-0">
						    <div class="card-header p-0">
    							<img src="<?= base_url() ?>public/images/burger_2.png" alt="" class="img-blog rounded-circle img-fluid">
						    </div>
						    <div class="card-body text-center pt-5 mt-2">
    							<h5 class="blog-title card-title mb-2">Albert</h5>
    							<div class=" border-top border-bottom py-1 mb-3">
    								<span>Gurugram, Haryana - Oct 20 </span>
    							</div>
    							<p>We tried the Burger House for the first time last night and the food was great, freshly cooked very tasty and well presented.</p>
    							
						    </div>
					    </div>
				    </div>
				    <!-- //blog grid -->



                    <!-- blog grid -->
                    <?php foreach ($storys as $story): ?>
				    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
					    <div class="card border-0">
						    <div class="card-header p-0">
    							<img src="<?= base_url() ?>public/images/burger_2.png" alt="" class="img-blog rounded-circle img-fluid">
						    </div>
						    <div class="card-body text-center pt-5 mt-2">
    							<h5 class="blog-title card-title mb-2"><?= $story['pname'] ?></h5>
    							<div class=" border-top border-bottom py-1 mb-3">
    								<span>Gurugram, Haryana - Oct 20 </span>
    							</div>
    							<p>We tried the Burger House for the first time last night and the food was great, freshly cooked very tasty and well presented.</p>
    							
						    </div>
					    </div>
				    </div>
                    <?php endforeach; ?>
				    <!-- //blog grid -->
			    </div>
		    </div>
	    </section>

		<?php if ($page === 'Our Story'): ?>
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