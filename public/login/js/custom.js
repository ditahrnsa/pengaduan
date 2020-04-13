	$(document).ready(function () {
		// commit
		// config
		$('a').smoothScroll();
		valueParallax = $(".parallax").data('value');
		$(".parallax").parallax("50%", valueParallax);
		// $('.person').load('assets/img/person.html');

		// search
		$('#search').change(function (event) {
			$('#submit-search').submit(function (event) {

			});
			// window.location = "result";
		});

		$('.navbar .menu ul li .fa.fa-search').click(function () {
			if ($('.search').data('active') == true) {
				$('.search').removeClass('active').data('active', false);
			} else {
				$('.search').addClass('active').data('active', true);
			}
		})
		$('.search .close').click(function () {
			$('.search').removeClass('active').data('active', false);
		});
		// arrow top
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.arrow-top').addClass('in').removeClass('out');
			} else {
				$('.arrow-top').addClass('out').removeClass('in');
			}
		})
		// slider
		$('.dots-thumb').click(function () {
			// define
			target = $(this).data('slide');
			slide = $('.slide.' + target);
			slideActive = $('.slide-banner').find('.slide.active');

			// slide active out
			slideActive.css({
				"display": "none"
			}).removeClass('active');

			// slide in
			slide.css({
				"display": "block"
			}).addClass('active');
			// component
			bgImage = slide.find('.slide-image img');
			label = slide.find('.slide-content .caption label');
			heading = slide.find('.slide-content .caption h2');
			button = slide.find('.slide-content .caption button');
			border = slide.find('.slide-content .caption .border');
			locate = slide.find('.slide-banner .slide .locate');
			// animating component
			animatingComponent(bgImage, label, heading, button, border, locate);

			// dot active
			$('.slide-banner').find('.dots-thumb.active').removeClass('active');
			$(this).addClass('active');
		});

		// autoplay slider
		$('.slide-banner .loader').addClass('animate-bannerLoader');

		var slider = setInterval(function () {
			var slideActive = $('.slide-banner').find('.slide.active');
			var slideNow = slideActive.data('slide');
			if (slideNow == 1) {
				var slideTarget = "two";
			} else if (slideNow == 2) {
				var slideTarget = "three";
			} else if (slideNow == 3) {
				var slideTarget = "four";
			} else {
				var slideTarget = "one";
			}

			// define
			var slide = $('.slide.' + slideTarget);

			// slide active out
			slideActive.css({
				"display": "none"
			}).removeClass('active');

			// slide in
			slide.css({
				"display": "block"
			}).addClass('active');

			bgImage = slide.find('.slide-image img');
			label = slide.find('.slide-content .caption label');
			heading = slide.find('.slide-content .caption h2');
			button = slide.find('.slide-content .caption button');
			border = slide.find('.slide-banner .caption .border');
			locate = slide.find('.slide-banner .slide .locate');

			animatingComponent(bgImage, label, heading, button, border, locate)

			$('.slide-banner').find('.dots-thumb.active').removeClass('active');
			$('.slide-banner .dots .dots-thumb.' + slideTarget).addClass('active');
		}, 15000);

		// animating components
		function animatingComponent(bgImage, label, heading, button) {
			bgImage.addClass('animate-bgImage').removeClass('animate-bgImageInfinite');
			label.addClass('animate-label');
			heading.addClass('animate-heading');
			button.addClass('animate-button');
			border.addClass('animate-border');
			locate.addClass('animate-locate');
			// border.css({
			// 	"width" : "100%"
			// });

			setTimeout(function () {
				bgImage.addClass('animate-bgImageInfinite').removeClass('animate-bgImage');
			}, 1000);
		}

		// carousel info - index
		$('.intro .bottom .container .dots li').click(function () {
			var info = $(this).data('info');

			$('.intro .bottom .container .items.active').removeClass('active');
			$('.intro').find('.dots .active').removeClass('active');
			$('.intro .bottom .container .items#item-' + info).addClass('active');
			$(this).addClass('active');
		})

		// carousel destination
		$('.top .content .dots li').click(function () {
			target = $(this).data('destination');

			$(this).siblings('.active').removeClass('active');
			$('.top .content .list').find('.active').removeClass('active');
			$(this).addClass('active');
			$('.top .content .list li#destination-' + target).addClass('active');
		});

		// carousel developer
		$('.about-me .content .dots li').click(function () {
			var target = $(this).data('target');

			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			$(this).parent('.dots').siblings('.card.active').removeClass('active');
			$('.about-me .content').find('.card:nth-child(' + target + ')').addClass('active');
		})

		// testimonial
		$('.testimonial .container .content .image ul li img').click(function (event) {
			target = $(this).data('target');
			$(this).parent('li').addClass('selected');
			$(this).parent('li').siblings('li.selected').removeClass('selected');

			$('.testimonial .container .content').find('.caption-switcher.selected').removeClass('selected');
			$('.caption-switcher#' + target).addClass('selected');
		});

		$(".fa-times").click(function () {
			$(".sidebar").addClass("hide");
			$(".toggle-menu").addClass("opacity-one");
		});

		$('.toggle-menu').click(function () {
			$('.sidebar').removeClass("hide");
			$('.toggle-menu').removeClass("opacity-one");
		});

		$('g').click(function (event) {
			if ($(this).parent('svg').data('svg') != "category") {
				kec = $(this).attr('id');
				var text = $('.kecamatan-text').find('.' + kec).html();
				var destinations = $('.kecamatan-destination').find('.' + kec).html();

				$('.some-place .content .in-right .in-top h2.title').html("Kecamatan " + kec).css({
					"text-transform": "capitalize"
				});
				$('.some-place .content .in-right .in-top p.description').html(text);
				if (destinations) {
					$('.some-place .content .in-right .in-bottom ul.items').html(destinations);
				} else {
					$('.some-place .content .in-right .in-bottom ul.items').html($('.kecamatan-destination').find('.empty').html());
				}
				$('svg').find('.st1').removeClass('st1');
				$("#" + kec + " path").addClass('st1');
			}
		});

		$('g path.active').click(function () {
			kec = $(this).parent('g').attr('id');

			var text = $('.kecamatan-text').find('.' + kec).html();
			var destinations = $('.kecamatan-destination').find('.' + kec).html();

			$('.some-place .content .in-right .in-top h2.title').html("Kecamatan " + kec).css({
				"text-transform": "capitalize"
			});
			$('.some-place .content .in-right .in-top p.description').html(text);
			if (destinations) {
				$('.some-place .content .in-right .in-bottom ul.items').html(destinations);
			} else {
				$('.some-place .content .in-right .in-bottom ul.items').html($('.kecamatan-destination').find('.empty').html());
			}

			$('svg').find('path').removeClass('selected');
			$("g#" + kec + " path").addClass('selected');
		})

		// load destination
		$('.load-destination').click(function () {
			$('.loaded').css({
				"text-align": "center",
				"height": "30px",
				"line-height": "30px",
				"margin-top": "10px",
				"margin-bottom": "10px",

			}).html("");

			$('<div/>', {
				"class": "lds-ellipsis"
			}).appendTo('.loaded');

			var dataCss = {
				"background": "rgb(231, 235, 36)",
				"top": "10%",
				"transform": "translateY(-50%)"
			};
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');

			setTimeout(function () {

				$('.loaded').html('Destination telah habis.');

			}, 1000);
		});

		$('.load-poster').click(function () {

			$('.loaded').css({
				"text-align": "center",
				"height": "30px",
				"line-height": "30px",
				"margin-top": "10px",
				"margin-bottom": "10px",

			}).html("");
			$('.all-destination .content').css({
				"height": "calc(230vh + 50px)"
			});
			$('<div/>', {
				"class": "lds-ellipsis"
			}).appendTo('.loaded');

			var dataCss = {
				"background": "rgb(231, 235, 36)",
				"top": "10%",
				"transform": "translateY(-50%)"
			};
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');
			$('<div/>').css(dataCss).appendTo('.lds-ellipsis');

			setTimeout(function () {
				// $.getJSON('assets/js/data-gallery.json', function(json, textStatus) {

				// });
				var countImage = 10;

				if ($(this).data('image-load') >= countImage) {
					$('.loaded').html("gambar dan poster telah hapbis.");
				} else {
					$.ajax({
						url: '../../pages/galery/data/datagalery.html',
						success: function (r) {
							$('.gallery .container .items').append(r);
							// console.info("rrrr  "+r)
						}
					});
					$('.loaded').html('');
				}

				$(this).data('image-load', 10);
			}, 1000);


		})

		// steps
		$('.step').click(function () {
			step = $(this).data('step');
			step1 = '.step.one';
			step2 = '.step.two';
			step3 = '.step.three';
			step4 = '.step.four';
			stephr1 = '.step-hr.one';
			stephr2 = '.step-hr.two';
			stephr3 = '.step-hr.three';

			if (step == 1) {
				$(step2).removeClass('active');
				$(step3).removeClass('active');
				$(step4).removeClass('active');
				$(stephr1).removeClass('active');
				$(stephr2).removeClass('active');
				$(stephr3).removeClass('active');
			} else if (step == 2) {
				$(step1).addClass('active');
				$(step3).removeClass('active');
				$(step4).removeClass('active');
				$(stephr1).addClass('active');
				$(stephr2).removeClass('active');
				$(stephr3).removeClass('active');
			} else if (step == 3) {
				$(step1).addClass('active');
				$(step2).addClass('active');
				$(step4).removeClass('active');
				$(stephr1).addClass('active');
				$(stephr2).addClass('active');
				$(stephr3).removeClass('active');
			} else {
				$(step1).addClass('active');
				$(step2).addClass('active');
				$(step3).addClass('active');
				$(stephr1).addClass('active');
				$(stephr2).addClass('active');
				$(stephr3).addClass('active');
			}
			$(this).addClass('active');
			$('.description').find('.active').removeClass('active');
			$('.description').find('#description-' + step).addClass('active');
			$('.image').find('.active').removeClass('active');
			$('.image').find('#image-' + step).addClass('active');
		});

		// info destination
		// $('.info-destination').addClass('active');
		$('.info-destination .content').find('button').click(function (event) {
			$('.info-destination').removeClass('active');
		});
		$('.panorama .container .buttons').find('.button-info').click(function (event) {
			$('.info-destination').addClass('active');
			$(this).css({
				"transform": "translateX(120%)"
			})
		});
		$('.panorama .info-destination .content button').click(function (event) {
			$('.panorama .container .buttons').find('.button-info').css({
				"transform": "translateX(0%)"
			})
		});
		// arrow top
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.panorama .container .buttons').removeClass('in');
				$('.panorama .container .buttons').removeClass('half');
			} else {
				if ($('.panorama .container .buttons').data('class') == "half") {
					$('.panorama .container .buttons').addClass('half');
				} else {
					$('.panorama .container .buttons').addClass('in');
				}
			}
		})
		// arrow right
		$('.panorama .container .buttons').find('.arrow-right').click(function (event) {
			// alert("heo");
			$('.panorama .container .buttons').removeClass('in').addClass('half').data('class', 'half');
		});
		// arrow left
		$('.panorama .container .buttons').find('.arrow-left').click(function (event) {
			$('.panorama .container .buttons').removeClass('half').addClass('in').data('class', 'in');
		});
		// animate video


		// });
		// commit

		$('#dots-preloader').delay(5000).fadeOut(500, function () {
			// $('#bg_left').animate({left: '-50%'},300);
			// $('#bg_right').animate({right: '-50%'},300,function() {
			$('#bg_left').fadeOut(500);
			$('#bg_right').fadeOut(500);
			$('#preloader').fadeOut(500);
			// });
		});

		// Hover Portfolio
		$('.thumbnail').hover(
			function () {
				$(this).find('.caption').css({
					"transform": "translateY(0%)"
				});
				$(this).find('.text').css({
					"transform": "translateY(0%)"
				});
			},
			function () {
				$(this).find('.caption').css({
					"transform": "translateY(-100%)"
				});
				$(this).find('.text').css({
					"transform": "translateY(100%)"
				});
			}
		);

		// Tourism
		// $('.some-place .content .in-left').load('assets/img/maps-bw.svg');
	});

	$('body').delegate('.gallery .container .items li .caption button.action', 'click', function () {
		
		var image = $(this).parent('div').siblings('img').attr('src');
		var title = $(this).parent('div').siblings('.description').children('.title').html();
		var text = $(this).parent('div').siblings('.description').children('.text').html();
		var userUpload = $(this).parent('div').siblings('.description').children('.user-upload').html();
		var view = $('.viewed');

		view.addClass('active');
		view.find('.title').html(title);
		view.find('.text').html(text);
		view.find('#img-viewed').attr('src', image);
		view.find('.user-upload').html(userUpload);

		$('body').css({
			"overflow": "hidden"
		})
	});

	$('.viewed .close').click(function () {
		$('.viewed').removeClass('active');
		$('body').css({
			"overflow": "auto"
		})
	});

	function selectStep(n) {
		$(".caption-switcher").hide();
		$("#caption" + n).show();
	}
	// loaded
	function dataView(argument) {
		alert("heo");
	}
	$('.data-view').on('click', function () {
		dataView();
		// var image = $(this).parent('div').siblings('img').attr('src');
		// var title = $(this).parent('div').siblings('.description').children('.title').html();
		// var text = $(this).parent('div').siblings('.description').children('.text').html();
		// var userUpload = $(this).parent('div').siblings('.description').children('.user-upload').html();
		// var view = $('.viewed');

		// view.addClass('active');
		// view.find('.title').html(title);
		// view.find('.text').html(text);
		// view.find('#img-viewed').attr('src', image);
		// view.find('.user-upload').html(userUpload);

		// $('body').css({
		// 	"overflow": "hidden"
		// })
	});

	// $('.viewed .close').click(function () {
	// 	$('.viewed').removeClass('active');
	// 	$('body').css({
	// 		"overflow": "auto"
	// 	})
	// });

	// function selectStep(n) {
	// 	$(".caption-switcher").hide();
	// 	$("#caption" + n).show();
	// }


	// var slideIndex = 1;
	//
	// showImage(slideIndex);
	//
	// function plusIndex(n) {
	// 	showImage(slideIndex += n);
	// }
	//
	// function currentSlide(n) {
	// 	showImage(slideIndex = n);
	// }
	//
	// function showImage(n) {
	// 	var slide = document.getElementsByClassName("slide");
	// 	var dots = document.getElementsByClassName("dots-thumb");
	//
	// 	if (n > slide.length) {
	// 		slideIndex = 1;
	// 	}
	// 	else if (n < 1) {
	// 		slideIndex = slide.length;
	// 	}
	//
	// 	for (var i = 0; i < slide.length; i++) {
	// 		slide[i].style.display = "none";
	// 	}
	// 	slide[slideIndex-1].style.display = "block";
	//
	// 	for (var i = 0; i < dots.length; i++) {
	// 		dots[i].className = dots[i].className.replace(" active","");
	// 	}
	// 	dots[slideIndex-1].className += " active";
	// }