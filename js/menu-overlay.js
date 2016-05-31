jQuery.fn.fademenu = function(target) {
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