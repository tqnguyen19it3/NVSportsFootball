jQuery(document).ready(function($) {
	$(window).load(function() {
		if ($('.tg-header').length > 0) {
			var _top = $('.tg-header').offset().top - parseFloat($('.tg-header').css('marginTop').replace(/auto/, 0));
			$(window).scroll(function(evt) {
				var _y = $(this).scrollTop();
				if (_y > _top) {
					$('.tg-header').addClass('fixed-2');
					$('.row').addClass('fixed-1');
					// $('.icon-tim-kiem').addClass('fixed-3');
				} else {
					$('.tg-header').removeClass('fixed-2');
					$('.row').removeClass('fixed-1');
					// $('.icon-tim-kiem').removeClass('fixed-3');
				}
			})
		}
	});
});


// jQuery(document).ready(function($) {
// 	$(window).load(function() {
// 		if ($('.tg-header').length > 0) {
// 			var _top = $('.tg-header').offset().top - parseFloat($('.tg-header').css('marginTop').replace(/auto/, 0));
			
// 			console.log(_top);

// 		}
// 	});
// });