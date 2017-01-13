/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  $(document).ready(function ($) {

    $('.section-ondernemers .section-ondernemers-image a').click(function(e) {
      e.preventDefault();

      if(!$(this).is('.selected')) {

        $('.section-ondernemers .section-ondernemers-image a.selected').removeClass('selected');
        $(this).addClass('selected');

        var ondernemerIdClass = $.grep(this.className.split(" "), function(v, i){
            return v.indexOf('section-ondernemers-image-list-') === 0;
        }).join();

        var ondernemerId = ondernemerIdClass.match(/\d+/);
        var string = 'ul.section-ondernemers-text-list .section-ondernemers-text-list-' + ondernemerId;

        $('ul.section-ondernemers-text-list li.selected').removeClass('selected');

        $(string).addClass('selected');
      }
    });

    $(window).scroll(function () {

      var scroll = $(window).scrollTop();

      if (scroll >= 1) {
        $(".navbar").addClass("scrolling");
      } else {
        $(".navbar").removeClass("scrolling");
      }
    });


    // Instantiate the Bootstrap carousel
    // $('#theCarousel').carousel({
    //   interval: 1000
    // });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    //     $('#theCarousel .item').each(function(){
    //       var next = $(this).next();
    //       if (!next.length) {
    //         next = $(this).siblings(':first');
    //       }
    //       next.children(':first-child').clone().appendTo($(this));
    //
    //       if (next.next().length>0) {
    //         next.next().children(':first-child').clone().appendTo($(this));
    //       } else {
    //         $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    //       }
    //     });

    // $('.carousel').carousel({
    //   interval: 1000
    // });

    // $('.carousel .carousel-item').each(function(){
    //   var next = $(this).next();
    //   if (!next.length) {
    //     next = $(this).siblings(':first');
    //   }
    //   next.children(':first-child').clone().appendTo($(this));
    //
    //   if (next.next().length>0) {
    //     next.next().children(':first-child').clone().appendTo($(this));
    //   }
    //   else {
    //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    //   }
    // });

  });


  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
