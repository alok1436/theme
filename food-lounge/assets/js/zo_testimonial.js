(function($) {
    "use strict";

    $(document).ready(function () {
        $('.food-slick-wrap').find('.food-testimonial-default').each(function() {
            $('.food-testimonial-wrap', $(this)).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                dots: true,
                asNavFor: $('.food-testimonial-nav', $(this))
            });
            $('.food-testimonial-nav', $(this)).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: $('.food-testimonial-wrap', $(this)),
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    });
}(jQuery));