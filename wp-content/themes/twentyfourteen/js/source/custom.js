jQuery(function ($) { "use strict";
	
	/* ========================================================================= */
	/*	Page Preloader
	/* ========================================================================= */
	
	window.onload = function () {
		document.getElementById('loading-mask').style.display = 'none';
	}
	/* =========================================================================== */
	/*	FitVids js
	/* =========================================================================== */
	$(".media-wrapper").fitVids();
	
	/* ========================================================================= */
	/*	Nice Scroll - Custom Scrollbar
	/* ========================================================================= */

	var nice = $("html").niceScroll({
		cursorborderradius: 0,
		cursorwidth: "8px",
		cursorfixedheight: 150,
		cursorcolor: "#6CB670",
		zindex: 9999,
		cursorborder: 0,
	});

	/* ========================================================================= */
	/*	Scroll Up / Back to top
	/* ========================================================================= */
	
	$(window).scroll(function() {
		if ($(window).scrollTop() > 400) {
			$("#scrollUp").fadeIn(200);
		} else {
			$("#scrollUp").fadeOut(200);
		}
	});
	
	$('#scrollUp').click(function() {
		$('html, body').stop().animate({
			scrollTop : 0
		}, 1500, 'easeInOutExpo');
	});

	/* ========================================================================= */
	/*	Post image slider
	/* ========================================================================= */
	
	$("#post-thumb, #gallery-post").owlCarousel({

		navigation : true,
		pagination : false,
		slideSpeed : 800,
		autoHeight : true,
		paginationSpeed : 800,
		singleItem:true,
		navigationText : ["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"]

	});
	
	$("#features").owlCarousel({
		navigation : false,
		pagination : true,
		slideSpeed : 800,
		singleItem : true,
		transitionStyle : "fadeUp",
		paginationSpeed : 800,
	});


	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */

	$("#navigation").sticky({
		topSpacing : 0
	});
	
	// $('#nav').onePageNav({
	// 	currentClass: 'current',
	// 	changeHash: false,
	// 	scrollSpeed: 1500,
	// 	scrollThreshold: 0.5,
	// 	filter: '',
	// 	easing: 'easeInOutExpo'
	// });
	
	/* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */	

	var slideHeight = $(window).height();
	
	$('#slitSlider, .sl-slider, .sl-content-wrapper').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#slitSlider, .sl-slider, .sl-content-wrapper').css('height',slideHeight);
	});

	/* ========================================================================= */
	/*	Timer count
	/* ========================================================================= */

	(function() {
		var count = {
		  initialized : false,
		  initialize : function() {
			if (this.initialized)
			  return;
			this.initialized = true;
			this.build();
		  },
		  build : function() {
			this.animations();
		  },
		  animations : function() {
			// Count To
			$(".counters-item [data-to]").each(function() {
			  var $this = $(this);
			  $this.appear(function() {
				$this.countTo({});
			  }, {
				accX : 0,
				accY : -150
			  });
			});
		  },
		};
		count.initialize();
	})();

	/* ========================================================================= */
	/*	Home page Slider
	/* ========================================================================= */

	$(function() {

		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slitSlider' ).slitslider( {
				
				    speed : 1600,
				
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {
					initEvents();				
				},
				initEvents = function() {
					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {
						slitslider.next();
						return false;
					} );

					$navArrows.children( ':first' ).on( 'click', function() {					
						slitslider.previous();
						return false;
					});

					$nav.each( function( i ) {				
						$( this ).on( 'click', function( event ) {						
							var $dot = $( this );						
							if( !slitslider.isActive() ) {
								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );						
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						});					
					});
				};
				return { init : init };

		})();

		Page.init();

	});

	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	/* ========================================================================= */
	/*	Home Page, News Box and News Ticker Marquee 
	/* ========================================================================= */

		/****************************Animate Home page Navigation*****************************************/
	$('a.navigation').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top
			}, 1500);
			return false;
		}
		}
	});

	/****************************Home Page call for paper/conference/seminar News Panel*****************************************/
	$(".demo1").bootstrapNews({
		newsPerPage: 3,
		autoplay: true,
		pauseOnHover: true,
		direction: 'down',
		newsTickerInterval: 2000,
		onToDo: function () {
		//console.log(this);
		}
	});
	$(".demo2").bootstrapNews({
		newsPerPage: 4,
		autoplay: true,
		pauseOnHover: true,
		direction: 'down',
		newsTickerInterval: 2000,
		onToDo: function () {
		//console.log(this);
		}
	});

	/****************************NewTicker Js *****************************************/
	$('#tick2').html($('#tick').html());
		var temp=0,intervalId=0;
	$('#tick li').each(function(){
		var offset=$(this).offset();
		var offsetLeft=offset.left;
	$(this).css({'left':offsetLeft+temp});
		temp=$(this).width()+temp+10;
	});
	$('#tick').css({'width':temp+40, 'margin-left':'20px'});
	temp=0;
	$('#tick2 li').each(function(){
		var offset=$(this).offset();
		var offsetLeft=offset.left;
	$(this).css({'left':offsetLeft+temp});
		temp=$(this).width()+temp+10;
	});
	$('#tick2').css({'width':temp+40,'margin-left':temp+40});

	function abc(a,b) {  

		var marginLefta=(parseInt($("#"+a).css('marginLeft')));
		var marginLeftb=(parseInt($("#"+b).css('marginLeft')));
		if((-marginLefta<=$("#"+a).width())&&(-marginLefta<=$("#"+a).width())){
			$("#"+a).css({'margin-left':(marginLefta-1)+'px'});
		} else {
			$("#"+a).css({'margin-left':temp});
		}
		if((-marginLeftb<=$("#"+b).width())){
			$("#"+b).css({'margin-left':(marginLeftb-1)+'px'});
		} else {
			$("#"+b).css({'margin-left':temp});
		}
	} 

	function start() { intervalId = window.setInterval(function() { abc('tick','tick2'); }, 20) }
	$(function(){
		$('#outer').mouseenter(function() { window.clearInterval(intervalId); });
		$('#outer').mouseleave(function() { start(); })
		start();
	});
	
	$('#Carousel').carousel({
		interval: 4000
	});         
});

/* ========================================================================= */
/*	Ourportfolio Carousel Section 
/* ========================================================================= */

(function ($) {
	$(function () {
		var jcarousel = $('.jcarousel');
		var prev = $('.jcarousel-control-prev');
		var next = $('.jcarousel-control-next');
		var wide4 = 830;
		var wide3 = 639;
		var wide2 = 360;

		jcarousel.on('jcarousel:reload jcarousel:create', function () {
			var carousel = $(this),
				width = carousel.innerWidth();

			if (width >= wide4) {
				width = width / 4;
				
				prev.jcarouselControl({
					target: '-=1'
				});
		
				next.jcarouselControl({
					target: '+=1'
				});
			} else if (width >= wide3) {
				width = width / 3;
				
				prev.jcarouselControl({
					target: '-=1'
				});
		
				next.jcarouselControl({
					target: '+=1'
				});
			} else if (width >= wide2) {
				width = width / 2;
				
				prev.jcarouselControl({
					target: '-=1'
				});
		
				next.jcarouselControl({
				interval: 3000,
					target: '+=1'
				});
			} else {
				prev.jcarouselControl({
					target: '-=1'
				});
		
				next.jcarouselControl({
					target: '+=1'
				});
			}

			carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		}).jcarouselAutoscroll({
			interval: 2000,
			target: '+=1',
		});

		$('.jcarousel-pagination')
			.on('jcarouselpagination:active', 'a', function () {
			$(this).addClass('active');
		})
			.on('jcarouselpagination:inactive', 'a', function () {
			$(this).removeClass('active');
		})
			.on('click', function (e) {
			e.preventDefault();
		})
		.jcarouselPagination({
			item: function (page) {
				return '<a href="#' + page + '">' + page + '</a>';
			}
		});

		$(".jcarousel").swipe({
			swipeLeft: function (event, direction, distance, duration, fingerCount) {
				next.trigger('click');
			},
			swipeRight: function (event, direction, distance, duration, fingerCount) {
				prev.trigger('click');
			},
			//Default is 75px+ set to 0 for demo so any distance triggers swipe
			threshold: 30,
			excludedElements: "label, button, input, select, textarea, .noSwipe"
		});
	});
})(jQuery);