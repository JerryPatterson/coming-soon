var header=document.querySelector("#header");
new Headroom(header,{
	tolerance:{down:2,up:5},
	offset:100,
	classes:{
		initial:"slide",
		pinned:"slide--reset",
		unpinned:"slide--up"}
	}).init(),

jQuery(document).ready(function(){
  jQuery("#right-menu").sidr({
      name:"sidr-right",
      side:"right"
  });
//accordians
	jQuery('.pwd-drop-list').hide();
	jQuery('.pwd-list-div').on('click',function(e){
		e.preventDefault();
		jQuery('.list-div').siblings(".pwd-drop-list").slideUp();
		//if (jQuery(this).siblings(".pwd-drop-list").is(':hidden')) {
			jQuery(this).siblings(".pwd-drop-list").slideToggle();
		//}
	});
});