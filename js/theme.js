

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


	//---Sidr

  // jQuery("#right-menu").sidr({
  //     name:"sidr-right",
  //     side:"right"
  // });


//Accordians

    jQuery('._accordian-content').hide();
    jQuery('._accordian-title').on('click', toggleAccordian);
    
//Accordian Functionality

function toggleAccordian(){
    var clicked = jQuery(this);
    clicked.siblings('._accordian-content').slideToggle();
    clicked.children('._caret').toggleClass('is-rotated');
}


