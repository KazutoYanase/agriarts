// スムーズスクロール
$(document).ready(function() {
	$('a[href^=#]').click(function() {
		var adjust = 75;
		var speed = 450;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - adjust;
		$('html,body').animate({ scrollTop: position }, speed, 'swing');
		return false;
	});
});
// FADE-IN ANIMATION
scroll_effect();

$(window).scroll(function() {
	scroll_effect();
});


function scroll_effect() {
	$('.fade, .fade_right, .fade_left').each(function() {
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight + 60) {
			$(this).addClass('effect-scroll');
		}
	});
}

// 別ページアンカーリンク位置調整
$(window).on('load', function() {
	var url = $(location).attr('href');
	if (url.indexOf("#") != -1) {
		var anchor = url.split("#");
		var target = $('#' + anchor[anchor.length - 1]);
		if (target.length) {
			var pos = Math.floor(target.offset().top) - 75;
			$("html, body").animate({ scrollTop: pos }, 500);
		}
	}
});