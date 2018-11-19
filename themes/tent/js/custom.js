(function($) {
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

  // Fixed menu scroll
  $(window).scroll(function() {
    let heroTop = $('.home-hero').height();
    if ($(this).scrollTop() >= heroTop) {
      $('.top-navigation').removeClass('header-transparent');
    } else {
      $('.top-navigation').addClass('header-transparent');
    }
  });
})(jQuery);
