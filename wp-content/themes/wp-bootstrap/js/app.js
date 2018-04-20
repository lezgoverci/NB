$(document).ready(function() {
    $(window).on("scroll", function() {
      if ($(window).scrollTop() >= 676 && $(window).width() >= 640) {
        $("#fixed-nav").show();
        $("#fixed-nav").addClass("fixed-top");
        $("#fixed-nav").css("box-shadow","0px 5px 10px rgba(0, 0, 0,0.3)");
      } else {
        $("#fixed-nav").removeClass("fixed-top");
        $("#fixed-nav").css("box-shadow","");
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

    $(".carousel .carousel-item:first-child").addClass('active');

  });
  