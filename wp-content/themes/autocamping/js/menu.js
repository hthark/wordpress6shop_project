$(document).ready(function){
	$('#main-nav').prepend('<div id="manu-button">Menu</div>');
	$('#main-nav #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')){
			menu.removeClass('open');
		}else{
			menu.addClass('open');
		}
	});
});