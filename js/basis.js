$(function () {
	// glonav
	var nav = $(".globalNav");
	nav.clone().appendTo(".sp-nav-list");
	nav.clone().appendTo(".footer_navi");

	// slideDown
	$("#header_nav li").hover(
		function () {
			$("ul:not(:animated)", this).slideDown();
		},
		function () {
			$("ul.dropdown", this).slideUp();
		}
	);

	// rollover
	$(function () {
		$("img.rollover")
			.mouseover(function () {
				$(this).attr(
					"src",
					$(this)
						.attr("src")
						.replace(/^(.+)(\.[a-z]+)$/, "$1_on$2")
				);
			})
			.mouseout(function () {
				$(this).attr(
					"src",
					$(this)
						.attr("src")
						.replace(/^(.+)_on(\.[a-z]+)$/, "$1$2")
				);
			});
	});

	// active
	$("#header_nav a").each(function () {
		var $href = $(this).attr("href");
		// top
		if (location.pathname.match(".php")) {
			$("#header_nav a:eq(0)").removeClass("active");
		} else {
			$("#header_nav a:eq(0)").addClass("active");
		}
		// other
		if (location.href.match($href)) {
			$(this).addClass("active");
			$("#header_nav a:eq(0)").removeClass("active");
		} else {
			$(this).removeClass("active");
		}
	});

	// scroll
	$(function () {
		$(".smoothscroll").click(function () {
			var headerHeight = $("#l-header").outerHeight(); // headerの高さ
			var href = $(this).attr("href");
			var target = $(href == "#" || href == "" ? "html" : href);
			var position = target.offset().top - headerHeight; // スクロール値からナビの高さ分引く
			$("html, body").animate(
				{
					scrollTop: position,
				},
				550,
				"swing"
			);
			return false;
		});
	});
	// animation
	$(function () {
		if ($(window).innerWidth() >= 896) {
			Position = $(window).height() + $(window).scrollTop();
			$(".animation").each(function (i) {
				if (Position > $(this).offset().top) {
					$(this)
						.delay(60 * i)
						.queue(function () {
							$(this).addClass("on");
						});
				}
			});
			$(function () {
				var $nav = $("#l-header"),
					navPosition = $nav.offset().top;

				$(window).on("scroll", function () {
					if ($(this).scrollTop() > navPosition) {
						$nav.addClass("is-fixed");
					} else {
						$nav.removeClass("is-fixed");
					}
				});
			});
		}
	});
	$(window).scroll(function () {
		// animation
		scrollPosition = $(window).height() + $(window).scrollTop();
		$(".animation").each(function () {
			if (scrollPosition - 100 > $(this).offset().top) {
				$(this).addClass("on");
			}
		});
	});
	// page-top
	var topBtn = $("#page-top");
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$("body,html").animate(
			{
				scrollTop: 0,
			},
			500
		);
		return false;
	});

	// animation
	$(".animation-txt").wrap(
		'<div class="animation-content"><div class="animation-bar"></div></div>'
	);

	$(window).scroll(function () {
		$(".macker").each(function () {
			var position = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > position - windowHeight) {
				$(this).addClass("active");
			}
		});
		$(".animation-content").each(function () {
			var imgPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > imgPos - windowHeight + windowHeight / 4) {
				$(this).addClass("move");
			}
		});
		$(".effect_fade").each(function () {
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight) {
				$(this).addClass("effect_scroll");
			}
		});
	});

	// SP
	$("#nav-toggle").on("click", function () {
		$("body").toggleClass("open");
		$("#sp-nav a").on("click", function () {
			$("body").removeClass("open");
		});
	});

	$(window).on("load", function () {
		$(".loader-logo").delay(1000).addClass('on');
		$("#js-loader").delay(800).fadeOut(400);
	});
	setTimeout(function () {
		$('#js-loader').fadeOut(200);
	}, 4000);


	$(function () {
		if ($(window).innerWidth() <= 896) {
			var spBtn = $("#sp_btn");
			spBtn.hide();
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					spBtn.fadeIn();
				} else {
					spBtn.fadeOut();
				}
			});
		}
	});
});
$(window).on('load', function () {
	$(".page-title").delay(1000).addClass('on');
}); $(window).on('load', function () {
	$(".page-title").delay(1000).addClass('on');
});
