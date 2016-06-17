jQuery(document).ready(function(){

// Sidr
jQuery("#right-menu").sidr({
  name:"sidr-right",
  side:"right"
});   
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

});//End document ready

// Functions

//Accordian Functions
function toggleAccordian(){
  var clicked = jQuery(this);
  clicked.siblings('._accordian-content').slideToggle();
  clicked.children('._caret').toggleClass('is-rotated');
}
