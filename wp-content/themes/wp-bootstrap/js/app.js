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

    $("#header .nav li").addClass('nav-item');
    $("#header .nav a").addClass('nav-link');
    $("#footer .nav li").addClass('nav-item');
    $("#footer .nav a").addClass('nav-link');
    $("#fixed-nav .nav li").addClass('nav-item');
    $("#fixed-nav .nav a").addClass('nav-link');
  });
  