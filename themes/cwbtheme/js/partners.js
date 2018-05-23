(function ($, Drupal) {
  Drupal.behaviors.cwbtheme = {
    attach: function(context, settings) {
      // $('.center').slick({
      //     centerMode: true,
      //     centerPadding: '60px',
      //     dots: false,
      //     infinite: false,
      //     speed: 300,
      //     slidesToShow: 3,
      //     slidesToScroll: 3,
      //     responsive: [
      //         {
      //             breakpoint: 1024,
      //             settings: {
      //                 slidesToShow: 3,
      //                 slidesToScroll: 3,
      //                 infinite: true,
      //                 dots: false
      //             }
      //         },
      //         {
      //             breakpoint: 600,
      //             settings: {
      //                 slidesToShow: 2,
      //                 slidesToScroll: 2
      //             }
      //         },
      //         {
      //             breakpoint: 480,
      //             settings: {
      //                 slidesToShow: 1,
      //                 slidesToScroll: 1
      //             }
      //         }
      //         // You can unslick at a given breakpoint now by adding:
      //         // settings: "unslick"
      //         // instead of a settings object
      //     ]
      // })
      // $('.slider-nav').on('mouseenter', '.slick-slide', function (e) {
      //     var $currTarget = $(e.currentTarget),
      //     index = $currTarget.data('slick-index'),
      //     slickObj = $('.slider-for').slick('getSlick');
      //     slickObj.slickGoTo(index);
      // });
    }
  }
}(jQuery, Drupal));
