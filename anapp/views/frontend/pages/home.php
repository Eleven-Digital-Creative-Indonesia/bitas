<!--Cover-->
<section class="page cover" id="home">
    <!--Content-->      
    <div class="content">
        <div class="container">
            <div class="row valign">
                <div class="col-lg-6 col-sm-6">              
                    <div class="tagline">
                    <?php if(!empty($homedata['homepage']) && $homedata['homepage']->status == 1) : ?>
                        <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="">
                            <?php echo $homedata['homepage']->title; ?>
                        </h1>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <?php echo $homedata['homepage']->content; ?>
                        </p>
                        <div class="shadowTitle shadowTitle__1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                            <?php echo $homedata['homepage']->title; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="button-area">
                    <a href="<?php echo base_url(); ?>about" class="btn btn__primary wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Explore Lebih Jauh</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="hero wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="hero round-1">
                        <img src="<?= FE_IMG_PATH ?>hero-banner.png">
                    </div>
                    </div>
                </div>                
            </div>
            
            <!--Social-->
            <div class="social hidden-xs">
            <ul>
                <li><a href=""><img src="<?= FE_IMG_PATH ?>icon/twitter.svg" alt=""></a></li>
                <li><a href=""><img src="<?= FE_IMG_PATH ?>icon/facebook.svg" alt=""></a></li>
                <li><a href=""><img src="<?= FE_IMG_PATH ?>icon/instagram.svg" alt=""></a></li>
            </ul>
            </div>
        </div>  
    </div>
    
    <!--Scroll Down-->
    <div id="scrollMouse">
        <div class="mouse" id="view-initiatives-button">
            <div class="wheel"></div>
        </div>
    <div>
        <span class="unu"></span> 
        <span class="doi"></span> 
        <span class="trei"></span>
    </div>
    </div>  
</section>

<!--Content About -->
<?php $this->load->view(VIEW_FRONT . 'pages/home/about.php'); ?>
<!--Content Product -->
<?php $this->load->view(VIEW_FRONT . 'pages/home/product.php'); ?>
<!--Content Services -->
<?php $this->load->view(VIEW_FRONT . 'pages/home/services.php'); ?>
<!--Content Contact -->
<?php $this->load->view(VIEW_FRONT . 'pages/home/contact.php'); ?>