var header=document.querySelector("#header");new Headroom(header,{tolerance:{down:2,up:5},offset:100,classes:{initial:"slide",pinned:"slide--reset",unpinned:"slide--up"}}).init(),jQuery(document).ready(function(){jQuery("#right-menu").sidr({name:"sidr-right",side:"right"})});