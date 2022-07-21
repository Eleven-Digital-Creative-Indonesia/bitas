<!-- Contact -->
<section class="page page__half contact" id="contact">
    <div class="container">
        <!-- Title -->
        <div class="page__title text-center">
        <?php if(!empty($homedata['contactpage']) && $homedata['contactpage']->status == 1) : ?>
            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <?php echo $homedata['contactpage']->title; ?>
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                <?php echo $homedata['contactpage']->content; ?>
            </p>
            <div class="shadowTitle">
                <?php echo $homedata['contactpage']->name; ?>
            </div> 
        <?php endif; ?>         
        </div>

        <div class="row">
            <div class="col-sm-6">
            <!--Form-->
            <div class="contact__form wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                <form action="">
                <div class="form__field">
                    <input type="text" value="" placeholder="Name" class="control">
                </div>
                <div class="form__field">
                    <input type="email" value="" placeholder="Email" class="control">
                </div>
                <div class="form__field">
                    <input type="text" value="" placeholder="Phone Number" class="control">
                </div>
                <div class="form__field">
                    <input type="text" value="" placeholder="Company Name" class="control">
                </div>
                <div class="form__field">
                    <textarea name="" id="" cols="30" rows="6" placeholder="Your Message" class="control"></textarea>                  
                </div>
                <div class="button-area">
                    <a href="" class="btn btn__primary">Send Message</a>
                </div>
                </form>
            </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
            <div class="contact__illustration wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                <img src="<?= FE_IMG_PATH ?>svg/contact.svg" alt="">
            </div>
            </div>
        </div>
    </div>
</section>