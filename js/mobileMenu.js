jQuery(document).ready(function() {
  // jQuery('.toggle-mob-nav').click(function(e) {
  //   jQuery('.mob-modal').slideToggle(500);
  //   e.preventDefault();
  // });

  // jQuery('.mob-modal__close-trigger').click(function (e) {
  //   jQuery('.mob-modal').slideToggle(500);
  //   e.preventDefault();
  // });

  jQuery('.toggle-mob-nav').click(function() {
    // Set effect options
    var effect = 'slide';
    var options = { direction: 'right' };
    var duration = 700;

    jQuery('.mob-modal').toggle(effect, options, duration);
  });

  jQuery('.mob-modal__close-trigger').click(function() {
    // Set effect options
    var effect = 'slide';
    var options = { direction: 'right' };
    var duration = 700;

    jQuery('.mob-modal').toggle(effect, options, duration);
  });
});
