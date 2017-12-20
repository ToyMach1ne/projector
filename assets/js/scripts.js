// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

//OWL
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    navigation : true,
    items : 1,
    navText: [" " ,""]
  });
});

//Author modals

jQuery(".open__modal--first").click(function() {
  jQuery(".modal__first--author").toggle();
    $('.close__modal--author').on('click', function(event) {
      event.preventDefault();
      $('.modal__first--author').hide();
    });
    });

jQuery(".open__modal--second").click(function() {
  jQuery(".modal__second--author").toggle();
    $('.close__modal--author').on('click', function(event) {
      event.preventDefault();
      $('.modal__second--author').hide();
    });
    });

//Mobile menu
$('.mobile_burger').click(function(event) {
  event.preventDefault();
  $('.headnav').toggle();
});

//Hide contact-card
$( ".contacts__buttons--wrap" ).click(function() {
  $(".contact_card").toggleClass('contact--hidden');
  $('.hide__effect--paragraph').toggleClass('paragraph--hidden');
});

//Scroll to
$(document).ready(function () {
  $('.to_main').click(function() {
  $('html, body').animate({
    scrollTop: $(".first_block").offset().top
  }, 800)
}),
  $('.to_projector').click(function() {
  $('html, body').animate({
    scrollTop: $(".second__why--block").offset().top
  }, 800)
}),
  $('.to_why').click(function() {
  $('html, body').animate({
    scrollTop: $(".for__whom--block").offset().top
  }, 800)
}),
  $('.to_advantages').click(function() {
  $('html, body').animate({
    scrollTop: $(".rivalry_advantages").offset().top
  }, 800)
}),
  $('.to_programm').click(function() {
  $('html, body').animate({
    scrollTop: $(".about_project").offset().top
  }, 800)
}),
  $('.to_authors').click(function() {
  $('html, body').animate({
    scrollTop: $(".block_authors").offset().top
  }, 800)
}),
  $('.to_video').click(function() {
  $('html, body').animate({
    scrollTop: $(".video_block").offset().top
  }, 800)
}),
  $('.to_contacts').click(function() {
  $('html, body').animate({
    scrollTop: $(".form__contacts--block").offset().top
  }, 800)
}),
  $('.sign__up--block').click(function() {
  $('html, body').animate({
    scrollTop: $(".form__contacts--block").offset().top
  }, 800)
})
});

//Active menu links
$('body').on('click', '.headnav li', function() {
      $('li.active').removeClass('active');
      $(this).addClass('active');
});

//First lock button scroll
$('.scroll_img').click(function() {
  $('html, body').animate({
    scrollTop: $(".second__why--block").offset().top
  }, 800)
})

//Scroll menu items classes
$('.sign__up--block').hide();
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll >= 800) {
      $('.headnav li:first-child').removeClass('active');
      $('.sign__up--block').show();
    }
    else {
      $('.headnav li:first-child').addClass('active');
      $('.sign__up--block').hide();
    }
   // $('.to_why').toggleClass('active',
     //add 'ok' class when div position match or exceeds else remove the 'ok' class.
     // scroll >= $('.for__whom--block').offset().top
   // );
});
//trigger the scroll
$(window).scroll();

//Full block scroll
function ScrollHandler(pageId) {
  var page = $('#' + pageId);
  var pageStart = page.offset().top;
  var pageJump = false;

  function scrollToPage() {
    pageJump = true;
      $('html, body').animate({
      scrollTop: pageStart
    }, {
      duration: 500,
      complete: function() {
        pageJump = false;
      }
    });
  }
  window.addEventListener('wheel', function(event) {
   var viewStart = $(window).scrollTop();
   if (!pageJump) {
      var pageHeight = page.height();
      var pageStopPortion = pageHeight / 2;
      var viewHeight = $(window).height();

      var viewEnd = viewStart + viewHeight;
      var pageStartPart = viewEnd - pageStart;
      var pageEndPart = (pageStart + pageHeight) - viewStart;

      var canJumpDown = pageStartPart >= 0;
      var stopJumpDown = pageStartPart > pageStopPortion;

      var canJumpUp = pageEndPart >= 0;
      var stopJumpUp = pageEndPart > pageStopPortion;

      var scrollingForward = event.deltaY > 0;
      if (  ( scrollingForward && canJumpDown && !stopJumpDown)
         || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
        event.preventDefault();
        scrollToPage();
      }
   } else {
     event.preventDefault();
   }
  });
}
new ScrollHandler('one');
new ScrollHandler('two');
new ScrollHandler('three');
new ScrollHandler('four');
new ScrollHandler('five');
new ScrollHandler('six');
new ScrollHandler('seven');
new ScrollHandler('eight');
