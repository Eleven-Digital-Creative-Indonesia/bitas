<!-- Banner Page -->
<div class="banner banner__contact"></div>
    
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

    <!-- Form-->
    <div class="row">
        <div class="col-sm-6">
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
            <img src="images/svg/contact.svg" alt="">
        </div>
        </div>
    </div>

    <!-- Google Maps-->
    <div class="maps round">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.262359273026!2d106.87529500000001!3d-6.180096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcce2991da9450a1a!2sEracita%20Astamida!5e0!3m2!1sen!2sus!4v1597770729046!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div>
</section>