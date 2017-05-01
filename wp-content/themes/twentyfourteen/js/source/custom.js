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

	/* ========================================================================= */
	/* Bootstrap DataTable JS Integrations */
	/* ========================================================================= */

	(function (factory) {
		if (typeof define === 'function' && define.amd) {
			define(['jquery','datatables'], factory);
		}
		else {
			factory(jQuery);
		}
	}(function ($) {
		/* Set the defaults for DataTables initialisation */
		$.extend( true, $.fn.dataTable.defaults, {
			"sDom": "<'row'<'col-sm-12'<'pull-right'f><'pull-left'l>r<'clearfix'>>>t<'row'<'col-sm-12'<'pull-left'i><'pull-right'p><'clearfix'>>>",
			"sPaginationType": "bs_normal",
			"oLanguage": {
				"sLengthMenu": "Show _MENU_ Rows",
				"sSearch": ""
			}
	});

	/* Default class modification */
	$.extend( $.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	} );

	/* API method to get paging information */
	$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
	{
		return {
			"iStart":         oSettings._iDisplayStart,
			"iEnd":           oSettings.fnDisplayEnd(),
			"iLength":        oSettings._iDisplayLength,
			"iTotal":         oSettings.fnRecordsTotal(),
			"iFilteredTotal": oSettings.fnRecordsDisplay(),
			"iPage":          oSettings._iDisplayLength === -1 ?
				0 : Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
			"iTotalPages":    oSettings._iDisplayLength === -1 ?
				0 : Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
		};
	};
	/* Bootstrap style pagination control */
	$.extend( $.fn.dataTableExt.oPagination, {
		"bs_normal": {
			"fnInit": function( oSettings, nPaging, fnDraw ) {
				var oLang = oSettings.oLanguage.oPaginate;
				var fnClickHandler = function ( e ) {
					e.preventDefault();
					if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
						fnDraw( oSettings );
					}
				};
				$(nPaging).append(
					'<ul class="pagination">'+
						'<li class="prev disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;'+oLang.sPrevious+'</a></li>'+
						'<li class="next disabled"><a href="#">'+oLang.sNext+'&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>'+
					'</ul>'
				);
				var els = $('a', nPaging);
				$(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
				$(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
			},
			"fnUpdate": function ( oSettings, fnDraw ) {
				var iListLength = 5;
				var oPaging = oSettings.oInstance.fnPagingInfo();
				var an = oSettings.aanFeatures.p;
				var i, ien, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);
				if ( oPaging.iTotalPages < iListLength) {
					iStart = 1;
					iEnd = oPaging.iTotalPages;
				}
				else if ( oPaging.iPage <= iHalf ) {
					iStart = 1;
					iEnd = iListLength;
				} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
					iStart = oPaging.iTotalPages - iListLength + 1;
					iEnd = oPaging.iTotalPages;
				} else {
					iStart = oPaging.iPage - iHalf + 1;
					iEnd = iStart + iListLength - 1;
				}
				for ( i=0, ien=an.length ; i<ien ; i++ ) {
					$('li:gt(0)', an[i]).filter(':not(:last)').remove();
					for ( j=iStart ; j<=iEnd ; j++ ) {
						sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
						$('<li '+sClass+'><a href="#">'+j+'</a></li>')
							.insertBefore( $('li:last', an[i])[0] )
							.bind('click', function (e) {
								e.preventDefault();
								if ( oSettings.oApi._fnPageChange(oSettings, parseInt($('a', this).text(),10)-1) ) {
									fnDraw( oSettings );
								}
							} );
					}
					if ( oPaging.iPage === 0 ) {
						$('li:first', an[i]).addClass('disabled');
					} else {
						$('li:first', an[i]).removeClass('disabled');
					}

					if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
						$('li:last', an[i]).addClass('disabled');
					} else {
						$('li:last', an[i]).removeClass('disabled');
					}
				}
			}
		},	
		"bs_two_button": {
			"fnInit": function ( oSettings, nPaging, fnCallbackDraw )
			{
				var oLang = oSettings.oLanguage.oPaginate;
				var oClasses = oSettings.oClasses;
				var fnClickHandler = function ( e ) {
					if ( oSettings.oApi._fnPageChange( oSettings, e.data.action ) )
					{
						fnCallbackDraw( oSettings );
					}
				};
				var sAppend = '<ul class="pagination">'+
					'<li class="prev"><a class="'+oSettings.oClasses.sPagePrevDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;'+oLang.sPrevious+'</a></li>'+
					'<li class="next"><a class="'+oSettings.oClasses.sPageNextDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button">'+oLang.sNext+'&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>'+
					'</ul>';
				$(nPaging).append( sAppend );
				var els = $('a', nPaging);
				var nPrevious = els[0],
					nNext = els[1];
				oSettings.oApi._fnBindAction( nPrevious, {action: "previous"}, fnClickHandler );
				oSettings.oApi._fnBindAction( nNext,     {action: "next"},     fnClickHandler );
				if ( !oSettings.aanFeatures.p )
				{
					nPaging.id = oSettings.sTableId+'_paginate';
					nPrevious.id = oSettings.sTableId+'_previous';
					nNext.id = oSettings.sTableId+'_next';
					nPrevious.setAttribute('aria-controls', oSettings.sTableId);
					nNext.setAttribute('aria-controls', oSettings.sTableId);
				}
			},
			"fnUpdate": function ( oSettings, fnCallbackDraw )
			{
				if ( !oSettings.aanFeatures.p )
				{
					return;
				}
				var oPaging = oSettings.oInstance.fnPagingInfo();
				var oClasses = oSettings.oClasses;
				var an = oSettings.aanFeatures.p;
				var nNode;
				for ( var i=0, iLen=an.length ; i<iLen ; i++ )
				{
					if ( oPaging.iPage === 0 ) {
						$('li:first', an[i]).addClass('disabled');
					} else {
						$('li:first', an[i]).removeClass('disabled');
					}

					if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
						$('li:last', an[i]).addClass('disabled');
					} else {
						$('li:last', an[i]).removeClass('disabled');
					}
				}
			}
		},
		"bs_four_button": {
			"fnInit": function ( oSettings, nPaging, fnCallbackDraw )
				{
					var oLang = oSettings.oLanguage.oPaginate;
					var oClasses = oSettings.oClasses;
					var fnClickHandler = function ( e ) {
						e.preventDefault()
						if ( oSettings.oApi._fnPageChange( oSettings, e.data.action ) )
						{
							fnCallbackDraw( oSettings );
						}
					};
					$(nPaging).append(
						'<ul class="pagination">'+
						'<li class="disabled"><a  tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageFirst+'"><span class="glyphicon glyphicon-backward"></span>&nbsp;'+oLang.sFirst+'</a></li>'+
						'<li class="disabled"><a  tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPagePrevious+'"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;'+oLang.sPrevious+'</a></li>'+
						'<li><a tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageNext+'">'+oLang.sNext+'&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>'+
						'<li><a tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageLast+'">'+oLang.sLast+'&nbsp;<span class="glyphicon glyphicon-forward"></span></a></li>'+
						'</ul>'
					);
					var els = $('a', nPaging);
					var nFirst = els[0],
						nPrev = els[1],
						nNext = els[2],
						nLast = els[3];
					oSettings.oApi._fnBindAction( nFirst, {action: "first"},    fnClickHandler );
					oSettings.oApi._fnBindAction( nPrev,  {action: "previous"}, fnClickHandler );
					oSettings.oApi._fnBindAction( nNext,  {action: "next"},     fnClickHandler );
					oSettings.oApi._fnBindAction( nLast,  {action: "last"},     fnClickHandler );
					if ( !oSettings.aanFeatures.p )
					{
						nPaging.id = oSettings.sTableId+'_paginate';
						nFirst.id =oSettings.sTableId+'_first';
						nPrev.id =oSettings.sTableId+'_previous';
						nNext.id =oSettings.sTableId+'_next';
						nLast.id =oSettings.sTableId+'_last';
					}
				},
			"fnUpdate": function ( oSettings, fnCallbackDraw )
				{
					if ( !oSettings.aanFeatures.p )
					{
						return;
					}
					var oPaging = oSettings.oInstance.fnPagingInfo();
					var oClasses = oSettings.oClasses;
					var an = oSettings.aanFeatures.p;
					var nNode;
					for ( var i=0, iLen=an.length ; i<iLen ; i++ )
					{
						if ( oPaging.iPage === 0 ) {
							$('li:eq(0)', an[i]).addClass('disabled');
							$('li:eq(1)', an[i]).addClass('disabled');
						} else {
							$('li:eq(0)', an[i]).removeClass('disabled');
							$('li:eq(1)', an[i]).removeClass('disabled');
						}

						if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
							$('li:eq(2)', an[i]).addClass('disabled');
							$('li:eq(3)', an[i]).addClass('disabled');
						} else {
							$('li:eq(2)', an[i]).removeClass('disabled');
							$('li:eq(3)', an[i]).removeClass('disabled');
						}
					}
				}
		},
		"bs_full": {
			"fnInit": function ( oSettings, nPaging, fnCallbackDraw )
				{
					var oLang = oSettings.oLanguage.oPaginate;
					var oClasses = oSettings.oClasses;
					var fnClickHandler = function ( e ) {
						if ( oSettings.oApi._fnPageChange( oSettings, e.data.action ) )
						{
							fnCallbackDraw( oSettings );
						}
					};
					$(nPaging).append(
						'<ul class="pagination">'+
						'<li class="disabled"><a  tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageFirst+'">'+oLang.sFirst+'</a></li>'+
						'<li class="disabled"><a  tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPagePrevious+'">'+oLang.sPrevious+'</a></li>'+
						'<li><a tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageNext+'">'+oLang.sNext+'</a></li>'+
						'<li><a tabindex="'+oSettings.iTabIndex+'" class="'+oClasses.sPageButton+" "+oClasses.sPageLast+'">'+oLang.sLast+'</a></li>'+
						'</ul>'
					);
					var els = $('a', nPaging);
					var nFirst = els[0],
						nPrev = els[1],
						nNext = els[2],
						nLast = els[3];
					oSettings.oApi._fnBindAction( nFirst, {action: "first"},    fnClickHandler );
					oSettings.oApi._fnBindAction( nPrev,  {action: "previous"}, fnClickHandler );
					oSettings.oApi._fnBindAction( nNext,  {action: "next"},     fnClickHandler );
					oSettings.oApi._fnBindAction( nLast,  {action: "last"},     fnClickHandler );
					if ( !oSettings.aanFeatures.p )
					{
						nPaging.id = oSettings.sTableId+'_paginate';
						nFirst.id =oSettings.sTableId+'_first';
						nPrev.id =oSettings.sTableId+'_previous';
						nNext.id =oSettings.sTableId+'_next';
						nLast.id =oSettings.sTableId+'_last';
					}
				},
			"fnUpdate": function ( oSettings, fnCallbackDraw )
				{
					if ( !oSettings.aanFeatures.p )
					{
						return;
					}
					var oPaging = oSettings.oInstance.fnPagingInfo();
					var iPageCount = $.fn.dataTableExt.oPagination.iFullNumbersShowPages;
					var iPageCountHalf = Math.floor(iPageCount / 2);
					var iPages = Math.ceil((oSettings.fnRecordsDisplay()) / oSettings._iDisplayLength);
					var iCurrentPage = Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength) + 1;
					var sList = "";
					var iStartButton, iEndButton, i, iLen;
					var oClasses = oSettings.oClasses;
					var anButtons, anStatic, nPaginateList, nNode;
					var an = oSettings.aanFeatures.p;
					var fnBind = function (j) {
						oSettings.oApi._fnBindAction( this, {"page": j+iStartButton-1}, function(e) {
							if( oSettings.oApi._fnPageChange( oSettings, e.data.page ) ){
								fnCallbackDraw( oSettings );
							}
							e.preventDefault();
						} );
					};
					if ( oSettings._iDisplayLength === -1 )
					{
						iStartButton = 1;
						iEndButton = 1;
						iCurrentPage = 1;
					}
					else if (iPages < iPageCount)
					{
						iStartButton = 1;
						iEndButton = iPages;
					}
					else if (iCurrentPage <= iPageCountHalf)
					{
						iStartButton = 1;
						iEndButton = iPageCount;
					}
					else if (iCurrentPage >= (iPages - iPageCountHalf))
					{
						iStartButton = iPages - iPageCount + 1;
						iEndButton = iPages;
					}
					else
					{
						iStartButton = iCurrentPage - Math.ceil(iPageCount / 2) + 1;
						iEndButton = iStartButton + iPageCount - 1;
					}
					for ( i=iStartButton ; i<=iEndButton ; i++ )
					{
						sList += (iCurrentPage !== i) ?
							'<li><a tabindex="'+oSettings.iTabIndex+'">'+oSettings.fnFormatNumber(i)+'</a></li>' :
							'<li class="active"><a tabindex="'+oSettings.iTabIndex+'">'+oSettings.fnFormatNumber(i)+'</a></li>';
					}
					for ( i=0, iLen=an.length ; i<iLen ; i++ )
					{
						nNode = an[i];
						if ( !nNode.hasChildNodes() )
						{
							continue;
						}
						$('li:gt(1)', an[i]).filter(':not(li:eq(-2))').filter(':not(li:eq(-1))').remove();
						if ( oPaging.iPage === 0 ) {
							$('li:eq(0)', an[i]).addClass('disabled');
							$('li:eq(1)', an[i]).addClass('disabled');
						} else {
							$('li:eq(0)', an[i]).removeClass('disabled');
							$('li:eq(1)', an[i]).removeClass('disabled');
						}
						if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
							$('li:eq(-1)', an[i]).addClass('disabled');
							$('li:eq(-2)', an[i]).addClass('disabled');
						} else {
							$('li:eq(-1)', an[i]).removeClass('disabled');
							$('li:eq(-2)', an[i]).removeClass('disabled');
						}
						$(sList)
							.insertBefore($('li:eq(-2)', an[i]))
							.bind('click', function (e) {
								e.preventDefault();
								if ( oSettings.oApi._fnPageChange(oSettings, parseInt($('a', this).text(),10)-1) ) {
									fnCallbackDraw( oSettings );
								}
							});
					}
				}
		}	
	} );


	/*
	 * TableTools Bootstrap compatibility
	 * Required TableTools 2.1+
	 */
	if ( $.fn.DataTable.TableTools ) {
		// Set the classes that TableTools uses to something suitable for Bootstrap
		$.extend( true, $.fn.DataTable.TableTools.classes, {
			"container": "DTTT btn-group",
			"buttons": {
				"normal": "btn",
				"disabled": "disabled"
			},
			"collection": {
				"container": "DTTT_dropdown dropdown-menu",
				"buttons": {
					"normal": "",
					"disabled": "disabled"
				}
			},
			"print": {
				"info": "DTTT_print_info modal"
			},
			"select": {
				"row": "active"
			}
		} );

		// Have the collection use a bootstrap compatible dropdown
		$.extend( true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
			"collection": {
				"container": "ul",
				"button": "li",
				"liner": "a"
			}
		} );
	}
}));


 jQuery(document).ready(function() {
		jQuery('.datatable').dataTable({
		"sPaginationType": "bs_normal"
	});	
		jQuery('.datatable').each(function(){
		var datatable =  jQuery(this);
		// SEARCH - Add the placeholder for Search and Turn this into in-line form control
		var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
		search_input.attr('placeholder', 'Search');
		search_input.addClass('form-control input-sm');
		// LENGTH - Inline-Form control
		var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
		length_sel.addClass('form-control input-sm');
		datatable.bind('page', function(e){
			window.console && console.log('pagination event:', e) //this event must be fired whenever you paginate
		});
	});
});         
});

/* ========================================================================= */
/*	Ourportfolio Carousel Section 
/* ========================================================================= */

jQuery(function ($) { "use strict";
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
	$(document).ready(function () {
			//stick in the fixed 100% height behind the navbar but don't wrap it
			$('#navigation.navbar .container').append($('<div id="navbar-height-col"></div>'));

			// Enter your ids or classes
			var toggler = '.navbar-toggle';
			var pagewrapper = '#page-content';
			var navigationwrapper = '.navbar-header';
			var menuwidth = '100%'; // the menu inside the slide menu itself
			var slidewidth = '80%';
			var menuneg = '-100%';
			var slideneg = '-80%';


			$("#navigation").on("click", toggler, function (e) {

				var selected = $(this).hasClass('slide-active');

				$('#slidemenu').stop().animate({
					left: selected ? menuneg : '0px'
				});

				$('#navbar-height-col').stop().animate({
					left: selected ? slideneg : '0px'
				});

				$(pagewrapper).stop().animate({
					left: selected ? '0px' : slidewidth
				});

				$(navigationwrapper).stop().animate({
					left: selected ? '0px' : slidewidth
				});
				$(this).toggleClass('slide-active', !selected);
				$('#slidemenu').toggleClass('slide-active');
				$('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');
			});
			var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';
			$(window).on("resize", function () {

				if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
					$(selected).removeClass('slide-active');
				}
			});
			$.fn.pageMe = function(opts){
			var $this = this,
				defaults = {
					perPage: 7,
					showPrevNext: false,
					hidePageNumbers: false
				},
				settings = $.extend(defaults, opts);
			var listElement = $this;
			var perPage = settings.perPage; 
			var children = listElement.children();
			var pager = $('.pager');
		
			if (typeof settings.childSelector!="undefined") {
				children = listElement.find(settings.childSelector);
			}
			
			if (typeof settings.pagerSelector!="undefined") {
				pager = $(settings.pagerSelector);
			}
			
			var numItems = children.size();
			var numPages = Math.ceil(numItems/perPage);

			pager.data("curr",0);
			
			if (settings.showPrevNext){
				$('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
			}
			
			var curr = 0;
			while(numPages > curr && (settings.hidePageNumbers==false)){
				$('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
				curr++;
			}
			
			if (settings.showPrevNext){
				$('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
			}
			
			pager.find('.page_link:first').addClass('active');
			pager.find('.prev_link').hide();
			if (numPages<=1) {
				pager.find('.next_link').hide();
			}
			pager.children().eq(1).addClass("active");
			
			children.hide();
			children.slice(0, perPage).show();
			
			pager.find('li .page_link').click(function(){
				var clickedPage = $(this).html().valueOf()-1;
				goTo(clickedPage,perPage);
				return false;
			});
			pager.find('li .prev_link').click(function(){
				previous();
				return false;
			});
			pager.find('li .next_link').click(function(){
				next();
				return false;
			});
			
			function previous(){
				var goToPage = parseInt(pager.data("curr")) - 1;
				goTo(goToPage);
			}
			
			function next(){
				goToPage = parseInt(pager.data("curr")) + 1;
				goTo(goToPage);
			}
			
			function goTo(page){
				var startAt = page * perPage,
					endOn = startAt + perPage;
				
				children.css('display','none').slice(startAt, endOn).show();
				
				if (page>=1) {
					pager.find('.prev_link').show();
				}
				else {
					pager.find('.prev_link').hide();
				}
				
				if (page<(numPages-1)) {
					pager.find('.next_link').show();
				}
				else {
					pager.find('.next_link').hide();
				}
				
				pager.data("curr",page);
				pager.children().removeClass("active");
				pager.children().eq(page+1).addClass("active");
			
			}
		};

		$(document).ready(function(){
			setTimeout(function(){ 
				$('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
			}, 3000);
		});
	});

	$(document).on('click', '#close-preview', function(){ 
		$('.image-preview').popover('hide');
		// Hover befor close the preview
		$('.image-preview').hover(
			function () {
			$('.image-preview').popover('show');
			}, 
			function () {
			$('.image-preview').popover('hide');
			}
		);    
	});

	$(function($) {
		// Create the close button
		var closebtn = $('<button/>', {
			type:"button",
			text: 'x',
			id: 'close-preview',
			style: 'font-size: initial;',
		});
		closebtn.attr("class","close pull-right");
		// Set the popover default content
		$('.image-preview').popover({
			trigger:'manual',
			html:true,
			title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
			content: "There's no image",
			placement:'bottom'
		});
		// Clear event
		$('.image-preview-clear').click(function(){
			$('.image-preview').attr("data-content","").popover('hide');
			$('.image-preview-filename').val("");
			$('.image-preview-clear').hide();
			$('.image-preview-input input:file').val("");
			$(".image-preview-input-title").text("Browse"); 
		}); 
		// Create the preview image
		$(".image-preview-input input:file").change(function (){     
			var img = $('<img/>', {
				id: 'dynamic',
				width:250,
				height:200
			});      
			var file = this.files[0];
			var reader = new FileReader();
			// Set preview image into the popover data-content
			reader.onload = function (e) {
				$(".image-preview-input-title").text("Change");
				$(".image-preview-clear").show();
				$(".image-preview-filename").val(file.name);            
				img.attr('src', e.target.result);
				$(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
			}        
			reader.readAsDataURL(file);
		});  
	});
});



/************************************************Data Table*********************************************************/

