jQuery(document).ready(function(){

//---Headroom
var header=document.querySelector("#header");
new Headroom(header,{
tolerance:{down:2,up:5},
offset:100,
classes:{
  initial:"slide",
  pinned:"slide--reset",
  unpinned:"slide--up"}
}).init();

//---Fade Menu
jQuery("#mobile-menu-btn").fadeMenu('#mobile-menu');

//  Back to top
var offset = 500;
var duration = 300;

jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > offset) {
    jQuery('.back-to-top').fadeIn(duration);
  } else {
    jQuery('.back-to-top').fadeOut(duration);
  }
});

jQuery('.back-to-top').click(function(event) {
  event.preventDefault();
  jQuery('html, body').animate({scrollTop: 0}, duration);
  return false;
});

// Accordian 
jQuery('._accordian-content').hide();
jQuery('._accordian-title').on('click', toggleAccordian);

});
//End document ready

// Functions

//Accordian Functions
function toggleAccordian(){
  var clicked = jQuery(this);
  clicked.siblings('._accordian-content').slideToggle();
  clicked.children('._caret').toggleClass('is-rotated');
}
