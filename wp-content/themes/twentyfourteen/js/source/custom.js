// jQuery(function($){

// 	jQuery(document).ready(function() {
//         //#main-slider
//         if(jQuery(window).width() >= 768){
//             var slideHeight = $(window).height();
//             $('#amazingslider-1 .amazingslider-space-1').css('height',slideHeight);

//             $(window).resize(function(){'use strict',
//                 $('#amazingslider-1 amazingslider-space-1').css('height',slideHeight);
//             });
//         }
// 	});
//     jQuery(window).resize(function() {
//         if(jQuery(window).width() >= 768){
//             var slideHeight = $(window).height();
//             $('#amazingslider-1 .amazingslider-space-1').css('height',slideHeight);

//             $(window).resize(function(){'use strict',
//                 $('#amazingslider-1 amazingslider-space-1').css('height',slideHeight);
//             });
//         }
//     });
// 	$('#wpadminbar').hide();
// });

// $(function(){ 

// // Scroll to anchor
// // Source: http://css-tricks.com/snippets/jquery/smooth-scrolling
//   $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
//         || location.hostname == this.hostname) {

//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {                
//         $('html,body')
//         // added the stop() function to prevent animations from queueing up 
//         .stop().animate({
//           scrollTop: target.offset().top
//         }, 1000).find("h2 > a")

//         // added a top padding to make the title visible on my fixed top nav menu
//         .css("padding-top","50px");
//         return false;       
//       }
//     }
//   });

// //scroll to Top	
// $(window).scroll(function(){
//             if ($(this).scrollTop() > 500) {
//                 $('.backToTop').fadeIn();
//             } else {
//                 $('.backToTop').fadeOut();
//             }
//         });		 

// $('.backToTop').click(function(){
//         $("html, body").animate({ scrollTop: 0 }, 1500, "easeOutQuint");
//         return false;
//         });

// //Scroll to bottom
// $(window).scroll(function(){
//             if ($(this).scrollTop() > 0 && $(this).scrollTop() < 500 ) {
//                 $('.backToBottom').fadeIn();
//             } else {
//                 $('.backToBottom').fadeOut();
//             }
//         }); 

// $('.backToBottom').click(function(){
//         $("html, body").animate({ scrollTop: $(document).height()}, 800);
//         return false;
//         });		
// });

$(document).ready(function () {
  //Variable Declarations  
  var $item = $('.carousel .item');
  var $wHeight = $(window).height();

  if ($(window).width() >= 768) {
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');
  }
  $('#myCarousel').carousel({
    interval: 4000,
    pause: "false"
  });

  $('.carousel img').each(function () {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
      'background-image': 'url(' + $src + ')',
      'background-color': $color
    });
    $(this).remove();
  });

  $(window).resize(function () {
    if ($(window).width() >= 768) {
      $wHeight = $(window).height();
      $item.height($wHeight);
    }
  });

  // Initialize Tooltip
  //$('[data-toggle="tooltip"]').tooltip(); 

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage'], .scroll-down a[href='#section04']").on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function () {
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
jQuery(function ($) {
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
    newsPerPage: 3,
    autoplay: true,
    pauseOnHover: true,
    direction: 'down',
    newsTickerInterval: 2000,
    onToDo: function () {
      //console.log(this);
    }
  });
});

$('#tick2').html($('#tick').html());
//alert($('#tick2').offset.left);

var temp = 0,
  intervalId = 0;
$('#tick li').each(function () {
  var offset = $(this).offset();
  var offsetLeft = offset.left;
  $(this).css({
    'left': offsetLeft + temp
  });
  temp = $(this).width() + temp + 10;
});
$('#tick').css({
  'width': temp + 40,
  'margin-left': '20px'
});
temp = 0;
$('#tick2 li').each(function () {
  var offset = $(this).offset();
  var offsetLeft = offset.left;
  $(this).css({
    'left': offsetLeft + temp
  });
  temp = $(this).width() + temp + 10;
});
$('#tick2').css({
  'width': temp + 40,
  'margin-left': temp + 40
});

function abc(a, b) {

  var marginLefta = (parseInt($("#" + a).css('marginLeft')));
  var marginLeftb = (parseInt($("#" + b).css('marginLeft')));
  if ((-marginLefta <= $("#" + a).width()) && (-marginLefta <= $("#" + a).width())) {
    $("#" + a).css({
      'margin-left': (marginLefta - 1) + 'px'
    });
  } else {
    $("#" + a).css({
      'margin-left': temp
    });
  }
  if ((-marginLeftb <= $("#" + b).width())) {
    $("#" + b).css({
      'margin-left': (marginLeftb - 1) + 'px'
    });
  } else {
    $("#" + b).css({
      'margin-left': temp
    });
  }
}

function start() {
  intervalId = window.setInterval(function () {
    abc('tick', 'tick2');
  }, 20)
}

$(function () {
  $('#outer').mouseenter(function () {
    window.clearInterval(intervalId);
  });
  $('#outer').mouseleave(function () {
    start();
  })
  start();
});