$(document).ready(function() {

    $('.menu_icon').on('click', function(){
        $('#primary-menu').slideToggle("slow");
    });

    $('.search_div').on('click', function(){
        $('.search_input_div').fadeToggle();
        $(this).toggleClass('active');
    });

    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots:false,
        fade: false,
        asNavFor: '.slider-nav-thumbnails',
        /* accessibility: false,
        draggable: false,
        swipe:false, */
        autoplay: true,
        waitForAnimate:false,
        prevArrow: false,
        nextArrow:false/* ,
        responsive: [
            {
            breakpoint: 1200,
                settings: {
                    draggable: true,
                    swipe:true,
                    waitForAnimate:true
                }
            }
        ] */
    });
   
    $('.slider-nav-thumbnails').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider',
        dots: false,
        focusOnSelect: true,
        waitForAnimate:false,
        prevArrow: false,
        nextArrow:false,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
            }
        ]
    });
   
    //remove active class from all thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
   
    //set active class to first thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');
   
    // On before slide change match active thumbnail to current slide
    $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
        $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
   });
   
   //UPDATED 
     
   $('.slider').on('afterChange', function(event, slick, currentSlide){   
     $('.content').hide();
     $('.content[data-id=' + (currentSlide + 1) + ']').show();
   });



   /* Related Articles Slider Container */
   $("#related_articles_slider_container").slick({
        prevArrow: $('.prev_related_article'),
        nextArrow: $('.next_related_article'),
        dots:true,
        initialSlide: 0,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: '20px',
        autoplay: true,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
            }
        ]
    });
   /* Related Articles Slider Container */
     
});