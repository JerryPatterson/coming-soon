jQuery.fn.fadeMenu = function(target) {
	jQuery(target).hide();
	jQuery(target).wrapInner('<div class="mobile-menu-table"></div>')
  jQuery(this).on('click', function(e){
    e.preventDefault();
    jQuery(target).fadeToggle();
    jQuery(this).toggleClass('active');
  });
  jQuery(target+' a').on('click', function(e){
    jQuery(target).fadeOut();
  });

  return this;
};