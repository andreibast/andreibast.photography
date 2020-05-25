//FILTER SECTION
$(document).ready(function(){ 
    $(".category_item").click(function(){
        var category = $(this).attr("id");
        if(category == "all"){
            $(".clothes_item").addClass("hide"); 
            
            setTimeout(function(){ 
                $(".clothes_item").removeClass("hide");
                $("div[style*=none]").css({'display' : ''});
            }, 100);
               
        }else{
            $(".clothes_item").addClass("hide");
            setTimeout(function(){ 
                $("." + category).removeClass("hide");
                $("div[style*=none]").css({'display' : ''}); 
                $("div .hide").css("display", "none"); 
            }, 400);
        }   
    })
})

//TOOLTIP JS ACTIVATION
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//RATING SYSTEM
$(function () {
  var $rateYo = $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5, #rateYo6, #rateYo7, #rateYo8, #rateYo9, #rateYo10").rateYo({
    rating: 0,
    starWidth: '20px',
    fullStar: true
  });

  $("#rateYo1").click(function () {
    $("#thanks1").html("Thanks for voting!");
  });
  $("#rateYo2").click(function () {
      $("#thanks2").html("Thanks for voting!");
  });
  $("#rateYo3").click(function () {
      $("#thanks3").html("Thanks for voting!");
  });
  $("#rateYo4").click(function () {
      $("#thanks4").html("Thanks for voting!");
  });
    
    $("#rateYo5").click(function () {
      $("#thanks5").html("Thanks for voting!");
  });
    $("#rateYo6").click(function () {
      $("#thanks6").html("Thanks for voting!");
  });
    $("#rateYo7").click(function () {
      $("#thanks7").html("Thanks for voting!");
  });
    $("#rateYo8").click(function () {
      $("#thanks8").html("Thanks for voting!");
  });
    $("#rateYo9").click(function () {
      $("#thanks9").html("Thanks for voting!");
  });
    $("#rateYo10").click(function () {
      $("#thanks10").html("Thanks for voting!");
  });
    
});

//DOWNLOAD FUNCTION
$(document).ready(function(){ 
    $('#download-button-1').click(function() {
        var filepath = $('#pic1').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-2').click(function() {
        var filepath = $('#pic2').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-3').click(function() {
        var filepath = $('#pic3').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-4').click(function() {
        var filepath = $('#pic4').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-5').click(function() {
        var filepath = $('#pic5').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-6').click(function() {
        var filepath = $('#pic6').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-7').click(function() {
        var filepath = $('#pic7').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-8').click(function() {
        var filepath = $('#pic8').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-9').click(function() {
        var filepath = $('#pic9').attr('src');
        top.location.href = filepath;
    });
    $('#download-button-10').click(function() {
        var filepath = $('#pic10').attr('src');
        top.location.href = filepath;
    });
})



    
    


