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

  $("#sign-up-newsletter").click(function(e) {
    e.preventDefault();
    let email = $("#email").val();

    $.ajax({
      url: "/mailchimp.php",
      data: {email: email },
      method: "POST",
    })
    .success(function(json) {
      var data = JSON.parse(json);

      if(data.status == 400 && data.title == "Member Exists") {
        $("#newsletter-status").html("You're already signed up! Go you!");
      } else {
        $("#newsletter-status").html("Signed up!");
      }

    })
    .error(function(error) {
      console.error(error);
    });

  });

});
