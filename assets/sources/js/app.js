console.log('gulp is fine')

(function ($) {
    $(function() {
      
console.log('coucou slick');
        $('.events-caroussel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
           
        })
    });
})(jQuery);
