jQuery(document).ready(function($) {

  // init Masonry
  var $grid = $('.grid').masonry({
    temSelector: '.grid-item',
    percentPosition: true,
    fitWidth: true,
    horizontalOrder: true,
    columnWidth: '.grid-sizer',
  });
  
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });

  $(".container").fitVids();

  $("#showMenu").click(function(e) {
    e.preventDefault();
    $(".header-mobile").toggleClass("active");
  });

});
