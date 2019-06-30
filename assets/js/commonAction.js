$(document).ready(function(){

  $(".navShowHide").on("click", function() {
    var main = $("#mainSectionContainer");
    var nav = $("#sideContainer");

    if(main.hasClass("leftPadding")) {
      nav.hide();
    }
    else {
      nav.show();
    }

    main.toggleClass("leftPadding");
  });

});

