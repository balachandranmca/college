// $( document ).ready(function() {
// 	var $item = $('.carousel .item'); 
// 	var $wHeight = $(window).height();
// 	$item.eq(0).addClass('active');
// 	$item.height($wHeight-150); 
// 	$item.addClass('full-screen');

// 	$('.carousel img').each(function() {
// 	var $src = $(this).attr('src');
// 	var $color = $(this).attr('data-color');
// 	$(this).parent().css({
// 		'background-image' : 'url(' + $src + ')',
// 		'background-color' : $color
// 	});
// 	$(this).remove();
// 	});

// 	$(window).on('resize', function (){
// 	var $footer = $('#footer');
// 	$wHeight = $(window).height();
// 	$item.height($wHeight);
// 	});

// 	$('.carousel').carousel({
// 	interval: 6000,
// 	pause: "false"
// 	});

// 	$(function(){
//     	$(".dropdown").hover(            
// 			function() {
// 				$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
// 				$(this).toggleClass('open');
// 				$('b', this).toggleClass("caret caret-up");                
// 			},
// 			function() {
// 				$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
// 				$(this).toggleClass('open');
// 				$('b', this).toggleClass("caret caret-up");                
// 		});
//     });
// });
