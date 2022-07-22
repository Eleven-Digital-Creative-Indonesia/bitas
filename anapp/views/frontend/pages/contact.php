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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6514163314037!2d106.8382342!3d-6.4387938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea3ee3176a6f%3A0x8efb94ab92047d13!2sJl.%20Raya%20Abdul%20Gani%20Blok%20Cilodong%20No.3%2C%20RT.5%2FRW.3%2C%20Kalibaru%2C%20Kec.%20Cilodong%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016413!5e0!3m2!1sid!2sid!4v1658507392923!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
</section>