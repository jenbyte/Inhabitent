(function($) {
  // your code here
  // $('body').append('hello');
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
    // $('.search-field').toggle(1000);
    // $('.search-field').focus();

    $('.search-field').addClass('show');
    $('.search-field').focus();
  });
  $('.search-field').on('blur', function(event) {
    $('.search-field').removeClass('show');
  });
})(jQuery);
