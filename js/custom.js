
$(".mobile-menu").click(function(){
    $(this).toggleClass("open") 
   $(".menu-list ul").toggleClass("menu-opned") 
    
});
 
 
// active menu


jQuery(function($) {
 var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
 $('.menu-list ul li a').each(function() {
  if (this.href === path) {
   $(this).addClass('active');
  }
 });
 
 
});

// open bio
$(".bio-content").hide();
$(document).ready(function(){
    
    $(".bio-btn").click(function(){
        $(this).parents(".spkeer-dteails").children(".bio-content").toggle();
        $(this).parents(".spkeer-dteails").children(".bio-stoyes").toggle();
        $(this).toggleClass("open-arrow") 
        
    });
});

