var $showNav,
	$showMenu,
	$opacity,
	$nav;

function initVars() {
	$showNav 	= $('nav span#nav');
	$nav 		= $('nav > ul#mainNav');
	$showMenu	= $('span#nav');
	$opacity	= $('#opacity');
}

function showDrop(){
	$('.drop span').click(function(event){
		if ($(this).next('ul').hasClass('expanded')) {
			$(this).next('ul').removeClass('expanded');
		} else {
			$('.drop ul').removeClass('expanded');
			$(this).next('ul').addClass('expanded');
		}
		event.preventDefault()
	});
}

function showNav(){
	$showMenu.click(function(){
		if ($nav.hasClass('expand')) {
			menuOut();
		} else {
			menuIn();
		}
		return false;
	});
}
function menuOut() {
	$nav.removeClass('expand');
	$opacity.removeClass('darken');
}
function menuIn() {
	$nav.addClass('expand');
	$opacity.addClass('darken');
}

function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}
function placeholderSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}

function firstLoad() {
	initVars();
	showDrop();
	showNav();
	initPlaceholders();
}

$(function() {
	firstLoad();
});
