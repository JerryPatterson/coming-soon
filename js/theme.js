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