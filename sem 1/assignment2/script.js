$(document).ready(function(){
  $("button#continue").click(function(){
    $(".container#instruction").fadeOut(300);
    $(".container#pics").fadeIn(200);
    $(".container#input").fadeIn(200);
  });
  });
$(document).ready(function(){
$("p#pic1").click(function() {
  $("p").fadeOut(500);
  $("h1").fadeIn(1000);
  $("h1").css("color","yellow");
  $("h1").html("Medieval oil painting");
    });
});
$(document).ready(function(){
  $("img#Renaissance").click(function(){
    alert("Sorry, not me!");
  });
});

$(document).ready(function(){
  $("img#baroque").click(function(){
    alert("Oops, try it again!");
  });
});

$(document).ready(function(){
  $("#middleage").click(function(){
      $(".detail").slideDown("slow");
      $("#startover").show(500);
      $(".container#input").fadeOut(100);
  });
});

  $(document).ready(function() {
    $("#start").click(function(){
    $(".detail").slideUp("slow");
    $("#startover").hide();
    $("#input").show();
});
});
