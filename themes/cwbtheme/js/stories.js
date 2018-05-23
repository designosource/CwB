(function ($, Drupal) {
  Drupal.behaviors.Stories = {
    attach: function (context, settings) {
      document.getElementById('view_more').addEventListener("click", function(){
        //No accidental redirects
        event.preventDefault()
        //AJAX call to fetch 6 more elements from database
      })
    }
  };
})(jQuery, Drupal);

// (function($){
//     $('.center').slick({
//     centerMode: true,
//     centerPadding: '60px',
//     slidesToShow: 3,
//     responsive: [
//         {
//             breakpoint: 768,
//             settings: {
//                 arrows: false,
//                 centerMode: true,
//                 centerPadding: '40px',
//                 slidesToShow: 3
//             }
//         },
//         {
//             breakpoint: 480,
//             settings: {
//                 arrows: false,
//                 centerMode: true,
//                 centerPadding: '40px',
//                 slidesToShow: 1
//             }
//         }
//     ]
// });
// })(jQuery);


