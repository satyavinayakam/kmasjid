"use strict";
// Global vars
var TWITTER_USERNAME = 'kmasjid',
    GOOGLE_MAP_LAT = 3.002223,
    GOOGLE_MAP_LNG = 101.716995;


// Countdown
$(function() {
    $('.countdown').each(function() {
        var count = $(this);
        $(this).countdown({
            zeroCallback: function(options) {
                var newDate = new Date(),
                    newDate = newDate.setHours(newDate.getHours() + 130);

                $(count).attr("data-countdown", newDate);
                $(count).countdown({
                    unixFormat: true
                });
            }
        });
    });
});

//$(document).ready(function(){ // document ready
//
//    $(window).scroll(function(){ // scroll event
//
//    if ($(".stickee").css("display") != "none") {
//
//    var stickyTop = $('.stickee').offset().top; // returns number
//    var windowTop = $(window).scrollTop(); // returns number
//
//    if (stickyTop < windowTop) {
//    $('#sticky').css({ position: 'fixed', "margin-top": '-46px' });
//        if($(window).width() < 769) {
//        $('#sticky').css({ position: 'fixed', "margin-top": '0px' });
//	   }
//    }
//    else {
//    $('#sticky').css({ position: 'absolute', "margin-top": '0px' });
//        }
//    }
//
//    });
//});


// Bootstrap carousel
$('.carousel').carousel({
    interval: 6000
});

// Responsive video
$("body").fitVids();

// Sticky search
if ($('body').hasClass('sticky-search')) {
    var theLoc = $('.search-area').position().top;
    if ($('body').hasClass('sticky-header')) {
        var header_h = $('header.main').outerHeight();
    } else {
        header_h = 0;
    }

    $(window).scroll(function() {
        if (theLoc >= $(window).scrollTop()) {
            if ($('.search-area').hasClass('fixed')) {
                $('.search-area').removeClass('fixed').css({
                    top: 0
                });
            }
        } else {
            if (!$('.search-area').hasClass('fixed')) {
                $('.search-area').addClass('fixed').css({
                    top: header_h
                });
            }
        }
    });
}

// Sticky header
if ($('body').hasClass('sticky-header')) {
    var theLoc = $('header.main').position().top;
    $(window).scroll(function() {
        if (theLoc >= $(window).scrollTop()) {
            if ($('header.main').hasClass('fixed')) {
                $('header.main').removeClass('fixed');
            }
        } else {
            if (!$('header.main').hasClass('fixed')) {
                $('header.main').addClass('fixed');
            }
        }
    });
}

if ($('.sidebar-nicescroller').length > 0) {
		$(".sidebar-nicescroller").niceScroll({
		cursorcolor: "#121212",
		cursorborder: "0px solid #ffbf00",
		//cursorborderradius: "0px",
		cursorwidth: "0px",
		//autohidemode: false,
		enablescrollonselection: true
	}).remove();
}

// Price slider
$("#price-slider").ionRangeSlider({
    min: 130,
    max: 575,
    type: 'double',
    prefix: "$",
    prettify: false,
    hasGrid: false
});

// Responsive navigation
$('#flexnav').flexNav();



$('#star-rating > li').each(function() {
    var list = $(this).parent(),
        listItems = list.children(),
        itemIndex = $(this).index();

    $(this).hover(function() {
        for (var i = 0; i < listItems.length; i++) {
            if (i <= itemIndex) {
                $(listItems[i]).addClass('hovered');
            } else {
                break;
            }
        };
        $(this).click(function() {
            for (var i = 0; i < listItems.length; i++) {
                if (i <= itemIndex) {
                    $(listItems[i]).addClass('selected');
                } else {
                    $(listItems[i]).removeClass('selected');
                }
            };
        });
    }, function() {
        listItems.removeClass('hovered');
    });
});


// Bootstrap tooltips
$('[data-toggle="tooltip"]').tooltip();



// Twitter
$("#twitter").tweet({
    username: TWITTER_USERNAME,
    count: 3
});

$("#twitter-ticker").tweet({
    username: TWITTER_USERNAME,
    page: 1,
    count: 20
});


// Checkboxes and radio
$('.i-check, .i-radio').iCheck({
    checkboxClass: 'i-check',
    radioClass: 'i-radio'
});


// Item quantity control (shopping cart)
$(".cart-item-plus").click(function() {
    var currentVal = parseInt($(this).prev(".cart-quantity").val());

    if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

    $(this).prev(".cart-quantity").val(currentVal + 1);
});

$(".cart-item-minus").click(function() {
    var currentVal = parseInt($(this).next(".cart-quantity").val());
    if (currentVal == "NaN") currentVal = 0;
    if (currentVal > 0) {
        $(this).next(".cart-quantity").val(currentVal - 1);
    }
});


// Card form
$('.form-group-cc-number input').payment('formatCardNumber');
$('.form-group-cc-date input').payment('formatCardExpiry');
$('.form-group-cc-cvc input').payment('formatCardCVC');


// Google map
if ($('#map-canvas').length) {
    var map,
        service;
    jQuery(function($) {
        $(document).ready(function() {
            var latlng = new google.maps.LatLng(GOOGLE_MAP_LAT, GOOGLE_MAP_LNG);
            var myOptions = {
                zoom: 14,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            marker.setMap(map);


            $('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(latlng);
            });
        });
    });
}


$('.bg-parallax').each(function() {
    var $obj = $(this);

    $(window).scroll(function() {
        // var yPos = -($(window).scrollTop() / $obj.data('speed'));
        var animSpeed;
        if ($obj.hasClass('bg-blur')) {
            animSpeed = 10;
        } else {
            animSpeed = 15;
        }
        var yPos = -($(window).scrollTop() / animSpeed);
        var bgpos = '100% ' + yPos + 'px';
        $obj.css('background-position', bgpos);

    });
});

// Document ready functions
$(document).ready(function() {
    
     $('html').niceScroll({
        cursorcolor: "#000",
        cursorborder: "0px solid #fff",
        railpadding: {
            top: 0,
            right: 0,
            left: 0,
            bottom: 0
        },
        cursorwidth: "5px",
        cursorborderradius: "0px",
        cursoropacitymin: 0,
        cursoropacitymax: 0.7,
        boxzoom: true,
        horizrailenabled: false,
        zindex: 9999,
        autohidemode:false
    });


    // Owl Carousel
    var owlCarousel = $('#owl-carousel'),
        owlItems = owlCarousel.attr('data-items'),
        owlCarouselSlider = $('#owl-carousel-slider'),
        owlProductSlider = $('#owl-product'),
        owlProductSlider2 = $('#owl-product-2'),
        owlNav = owlCarouselSlider.attr('data-nav');
    // owlSliderPagination = owlCarouselSlider.attr('data-pagination');

    owlCarousel.owlCarousel({
        items: owlItems,
        navigation: true,
        navigationText: ['', '']
    });

    owlCarouselSlider.owlCarousel({
        slideSpeed: 1300,
        paginationSpeed: 1400,
        // pagination: owlSliderPagination,
        singleItem: true,
        navigation: true,
        navigationText: ['', ''],
        transitionStyle: 'fade',
        items:1,
        autoPlay: true
    });
    
    owlProductSlider.owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        navigation : false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false
            }
        }
    });
    
    owlProductSlider2.owlCarousel({
        loop:true,
        margin:20,
        nav: false,
        navigation : false,
//        navText: ["<",">"],
//        navClass:["btn btn-primary btn-sm owlmag","btn btn-primary btn-sm owlmag"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false
            }
        }
    });


    // Twitter Ticker
    var ul = $('#twitter-ticker').find(".tweet-list");
    var ticker = function() {
        setTimeout(function() {
            ul.find('li:first').animate({
                marginTop: '-9em',
                opacity: 0
            }, 700, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
            });
            ticker();
        }, 5000);
    };
    ticker();


     // footer always on bottom
    var docHeight = $(window).height();
   var footerHeight = $('#main-footer').height();
   var footerTop = $('#main-footer').position().top + footerHeight;
   
   if (footerTop < docHeight) {
    $('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
   }

});


$(window).load(function() {
    if ($(window).width() > 992) {
        $('#masonry').masonry({
            itemSelector: '.col-masonry'
        });
    }
});

$(function () {
    // Remove Search if user Resets Form or hits Escape!
    $('body, .navbar-collapse form[role="search"] button[type="reset"]').on('click keyup', function(event) {
        console.log(event.currentTarget);
        if (event.which == 27 && $('.navbar-collapse form[role="search"]').hasClass('active') ||
            $(event.currentTarget).attr('type') == 'reset') {
            closeSearch();
        }
    });

    function closeSearch() {
        var $form = $('.navbar-collapse form[role="search"].active')
        $form.find('input').val('');
        $form.removeClass('active');
    }

    // Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
    $(document).on('click', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
        event.preventDefault();
        var $form = $(this).closest('form'),
            $input = $form.find('input');
        $form.addClass('active');
        $input.focus();

    });
    
    jQuery('#sub-menu ul.sub-menu').each(function() {
        var $parentMenu = jQuery(this).parent('li');
        $parentMenu.addClass('has-children').prepend('<div class="action-expand"><span class="opened"></span><span class="closed"></span></div>');
        $parentMenu.children('.action-expand').on('click', function(e){e.preventDefault();
            var $this = jQuery(this).closest('.has-children');
            $this.siblings('li.menu-open').removeClass('menu-open').children('.sub-menu').slideUp('fast');
            $this.toggleClass('menu-open');
            if ($this.hasClass('menu-open')) {
                $this.children('.sub-menu').slideDown('fast');
            } else {
                $this.children('.sub-menu').slideUp('fast');
            }
            return false;
        });
    });
    
});

$(function () {
    
    var maxL = 500;
    
    $('.limit-text').each(function (i, div) {
        
        var text = $(div).text();
        if(text.length > maxL) {
            
            var begin = text.substr(0, maxL),
                end = text.substr(maxL);

            $(div).html(begin)
                .append($('<span/>').html('...'))
                //.append($('<div class="hidden" />').html(end));
                
            
        }
        
        
    });      
    
    
});

$(document).ready(function(){

/** BUTTON TOGGLE FUNCTION **/
    $(".menu-left").click(function(){
        "use strict";
        $(".top-navbar").toggleClass("toggle");
        $(".sidebar-left").toggleClass("toggle");
        $(".side-menu").toggleClass("toggle"); 
        
    });

/** SIDEBAR FUNCTION **/
    $('.sidebar-left ul.sidebar-menu li a').click(function() {
        "use strict";
        $('.sidebar-left li').removeClass('active');
        $(this).closest('li').addClass('active');   
        var checkElement = $(this).next();
            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('fast');
            }
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('.sidebar-left ul.sidebar-menu ul:visible').slideUp('fast');
                checkElement.slideDown('fast');
            }
            if($(this).closest('li').find('ul').children().length == 0) {
                return true;
                } else {
                return false;   
            }       
    });

    if ($(window).width() < 1025) {
        $(".sidebar-left").removeClass("sidebar-nicescroller");
        $(".sidebar-right").removeClass("right-sidebar-nicescroller");
        $(".nav-dropdown-content").removeClass("scroll-nav-dropdown");
    }
    /** END SIDEBAR FUNCTION **/
    
});

//$(document).ready(function(){
//
//	"use strict";
//
//	var options = {
//		events_source: 'events.json.php',
//		view: 'month',
//		tmpl_path: 'tmpls/',
//		tmpl_cache: false,
//		//day: '2013-03-12',
//		onAfterEventsLoad: function(events) {
//			if(!events) {
//				return;
//			}
//			var list = $('#eventlist');
//			list.html('');
//
//			$.each(events, function(key, val) {
//				$(document.createElement('li'))
//					.html('<a href="' + val.url + '">' + val.title + '</a>')
//					.appendTo(list);
//			});
//		},
//		onAfterViewLoad: function(view) {
//			$('.page-header h3').text(this.getTitle());
//			$('.btn-group button').removeClass('active');
//			$('button[data-calendar-view="' + view + '"]').addClass('active');
//		},
//		classes: {
//			months: {
//				general: 'label'
//			}
//		}
//	};
//
//	var calendar = $('#calendar').calendar(options);
//
//	$('.btn-group button[data-calendar-nav]').each(function() {
//		var $this = $(this);
//		$this.click(function() {
//			calendar.navigate($this.data('calendar-nav'));
//		});
//	});
//
//	$('.btn-group button[data-calendar-view]').each(function() {
//		var $this = $(this);
//		$this.click(function() {
//			calendar.view($this.data('calendar-view'));
//		});
//	});
//
//});

$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
    
    $(".waktu-solat").click(function(){
        "use strict";
        $(".search-area").toggleClass("toggle");
        $(".side-menu").toggleClass("buka");
    });
    
    var myDiv = $('.limit-car');
    myDiv.text(myDiv.text().substring(0,90) + '...')
});


