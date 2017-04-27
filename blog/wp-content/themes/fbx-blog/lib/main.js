jQuery(document).ready(function($) {


  $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    percentPosition: true,
    fitWidth: true,
    horizontalOrder: true,
    columnWidth: '.grid-sizer',
  });

  $(".container").fitVids();

  $("#showMenu").click(function(e) {
    e.preventDefault();
    $(".header-mobile").toggleClass("active");
  });

});
