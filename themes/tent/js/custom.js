(function($) {
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
    $('.search-field').addClass('show');
    $('.search-field').focus();
  });
  $('.search-field').on('blur', function(event) {
    $('.search-field').removeClass('show');
  });
})(jQuery);
