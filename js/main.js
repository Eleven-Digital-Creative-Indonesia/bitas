$(document).ready(function(){

    // Homepage Slider
    $(".homepage").slick({
        slidesToShow: 1,
        dots: true,
        arrows: false,
        autoplay: true
    }) 

    // Latest Work Slider
    $(".project").slick({
        centerMode: true,
        slidesToShow: 3,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 1000,
        focusOnSelect: true,
        // infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    
                }
            },
        ]
    })

    // Testimonial Slider
    $(".sliderTestimonial").slick({
        slidesToShow: 1,
        dots: true,
        arrows: false,
        autoplay: true        
    }) 

    // Wow Js
    new WOW().init();

    //Back To Top
    $(window).scroll(function(){		
        if ($(this).scrollTop() >= 10){
            $('.backtop').fadeIn(300);
            $('.header').addClass("fixed");
        } else{
            $('.backtop').fadeOut(300);	
            $('.header').removeClass("fixed");
        }
    });
    $('.backtop').click(function () {
        $('body,html').animate({
            scrollTop : 0                       
        }, 100);
    });

    // Hamburger Menu 
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
        $(".navigation").toggleClass("show");
	});
})