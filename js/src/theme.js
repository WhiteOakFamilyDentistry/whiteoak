var $ = jQuery;
var current_title = $(document).attr('title');

function testimonials(){
	$('#testimonials').slick({
		dots: true,
		infinite: true,
		slidesToShow: 3,
		prevArrow: '<div class="prev-arrow"><span class="review-nav"><i class="fa fa-angle-left" aria-hidden="true"></i></span></div>',
		nextArrow: '<div class="next-arrow"><span class="review-nav"><i class="fa fa-angle-right" aria-hidden="true"></i></span></div>',
		responsive: [
    {
    	breakpoint: 991,
      settings: {
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        arrows: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ] 
	});
}

function mobileNav(){
	var $menu = $('#mobile-menu').mmenu({
		"extensions": [
		"pagedim-black",
		"fx-menu-zoom",
		"fx-listitems-slide",
		"border-full"
		],
		backbutton: {
			close: true
		},
		navbar: {
			title: current_title
		}
	});
}

function loggedIn() {
	if ($('#wpadminbar')[0])
		$('#header-container').css('top', '32px')
}

function scrollUp() {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$('.scrollup').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});

}

$(document).ready(function() {
	testimonials();
	mobileNav();
	loggedIn();
	scrollUp();
});