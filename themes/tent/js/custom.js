(function($) {
  $(function() {
    const $search = $('.search-field');

    $('.icon-search').on('click', function(event) {
      event.preventDefault();

      $search.addClass('show');
      $search.focus();
    });
    $search.on('blur', function() {
      $search.removeClass('show');
    });

    const $header = $('#site-navigation');

    if ($header.hasClass('reverse-header')) {
      console.log('yes');
      $header.parent().removeClass('frontpage-header');
      reverseHeader();
    }

    function reverseHeader() {
      const bannerHeight = $('.entry-header').height();
      console.log(bannerHeight);

      $(window).on('scroll', function() {
        // console.log('scrolling');
        if ($(window).scrollTop() > bannerHeight) {
          console.log('working!');

          $header.removeClass('reverse-header');
          $header.addClass('main-navigation');
          $header.parent().addClass('frontpage-header');
          // $header.addClass('fixed-header');
        } else {
          $header.parent().removeClass('frontpage-header');
          $header.removeClass('main-navigation');
          $header.addClass('reverse-header');
        }
      });
    } // end of reverseHeader
  }); //end of fx
})(jQuery);
