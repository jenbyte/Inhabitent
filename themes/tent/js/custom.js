(function($) {
  // your code here
  // $('body').append('hello');
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
    $('.search-field').addClass('show');
    $('.search-field').focus();
    // $(this)
    //   .siblings()
    //   .show('slow');
  });
  $('.search-field').on('blur', function(event) {
    $('.search-field').removeClass('show');
  });
})(jQuery);
