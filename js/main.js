$(window).scroll(function() {
    if ($(this).scrollTop() > 150){  
        $('header').addClass('sticky');
    }
    
    else{
        $('header').removeClass('sticky');
    }
});

var maxHeight = 0;

$(".product-box").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".product-box").height(maxHeight);

var maxHeight = 0;

$(".sigle-decoration").each(function(){
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
 });
 
 $(".sigle-decoration").height(maxHeight);