(function($) {
  /* --------- colors --------- */
  wp.customize('main_background_color', function(value) {
    value.bind(function(newval) {
      $('body').css('background-color', newval);
    });
  });

  wp.customize('header_background_color', function(value) {
    value.bind(function(newval) {
      $('.site-header').css('background-color', newval);
    });
  });

  wp.customize('footer_background_color', function(value) {
    value.bind(function(newval) {
      $('.site-footer').css('background-color', newval);
    });
  });

  wp.customize('main_text_color', function(value) {
    value.bind(function(newval) {
      $('body').css('color', newval);
    });
  });

  wp.customize('header_text_color', function(value) {
    value.bind(function(newval) {
      $('.site-header').css('color', newval);
    });
  });

  wp.customize('footer_text_color', function(value) {
    value.bind(function(newval) {
      $('.site-footer').css('color', newval);
    });
  });
})(jQuery);
