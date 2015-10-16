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

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        /**
         * Cache variables
         */
        var menu = document.querySelector(".mobile-nav");
        var toggle = document.querySelector(".hamburger-menu");
        var links = document.querySelectorAll(".mobile-nav-link");
        var mask = document.createElement("div");
        var activeClass = "is-active";

        /**
         * Create mask
         */
        mask.classList.add("mask");
        document.body.appendChild(mask);

        /**
         * Listen for clicks on the toggle
         */
        toggle.addEventListener("click", function(e) {
          e.preventDefault();
          toggle.classList.contains(activeClass) ? deactivateMenu() : activateMenu();
        });

        /**
         * Listen for clicks on the menu links, which should close the menu and mask
         */

        for (var i = 0; i < links.length; i++) {
          links[i].addEventListener("click", function() {
            deactivateMenu();
          });
        };

        /**
         * Listen for clicks on the mask, which should close the menu
         */
        mask.addEventListener("click", function() {
          deactivateMenu();
        });

        /**
         * Activate the menu 
         */
        function activateMenu() {
          document.body.classList.add(activeClass);
          menu.classList.add(activeClass);
          toggle.classList.add(activeClass);
          mask.classList.add(activeClass);
        }

        /**
         * Deactivate the menu 
         */
        function deactivateMenu() {
          document.body.classList.remove(activeClass);
          menu.classList.remove(activeClass);
          toggle.classList.remove(activeClass);
          mask.classList.remove(activeClass);
        }
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        // Hover function for work showcase
        $(".frame").mouseenter(
          function() {
            $(".frame").not(this).stop(true, true).fadeTo(0, 0.4);
            $(this).stop(true, true).fadeTo(0, 1);
            $(this).css("box-shadow", "0 3px 6px rgba(0, 0, 0, 0.4)");
          }
        );
        $(".frame").mouseleave(function(){
          $(this).css("box-shadow", "0 2px 3px rgba(0, 0, 0, 0.3");
        })
        $("#work").mouseleave(function() {
            $(".frame").fadeTo(0, 1);
          }
        );

        // Smooth scroll for anchor links
        var $root = $('html, body');
        $('a').click(function() {
          $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
          return false;
        });
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
