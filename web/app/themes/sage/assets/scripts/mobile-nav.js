(function() {

  "use strict";

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

})();

//=========================================

