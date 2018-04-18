$(document).ready(function() {
    $(window).on("scroll", function() {
      if ($(window).scrollTop() >= 656 && $(window).width() >= 640) {
        $("#fixed-nav").show();
        $("#fixed-nav").addClass("fixed-top");
      } else {
        $("#fixed-nav").removeClass("fixed-top");
      }
    });

    $(window).on("resize",function(){
        if($(window).width() < 640){
          $("#fixed-nav").hide();
        }
        else{
          $("#fixed-nav").show();
        }
    });
  });
  