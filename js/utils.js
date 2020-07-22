jQuery(document).ready(function() {
  jQuery('.masy-grid').masonry({
    // options
    percentPosition: true,
    columnWidth: '.masy-grid__grid-sizer',
    gutter: '.masy-grid__gutter-sizer',
    itemSelector: '.masonry-item'
    // isFitWidth: true
  });
});
