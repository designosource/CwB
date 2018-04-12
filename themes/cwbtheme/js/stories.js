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
