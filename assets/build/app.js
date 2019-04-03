"use strict";

// Array of classes to cycle through
var images = ["stack_one", "stack_two", "stack_three"]; // Remember where we are in the array, start just before the first entry

function cycleClasses(el) {
  console.log();
  var index;

  if (el.attr("class") == "stack_three") {
    index = -1;
  } else {
    index = images.indexOf(el.attr("class"));
  }

  el.removeClass().addClass(images[index + 1]);
} // Update cycle every 5 seconds.


setInterval(function () {
  cycleClasses($(".stack ul li:first-child"));
  cycleClasses($(".stack ul li:nth-child(2)"));
  cycleClasses($(".stack ul li:last-child"));
}, 5000);
$(document).on("mouseenter", ".stack ul li", showCaption).on("click", ".burger", showMenu).on("click", ".nav_menu_close", hideMenu); // show hovered image caption

function showCaption(event) {
  event.preventDefault();
  console.log($(this).data("caption"));
}

function showMenu(event) {
  event.preventDefault();
  $(".nav_menu").addClass("active");
}

function hideMenu(event) {
  event.preventDefault();
  $(".nav_menu").removeClass("active");
} // const showCaption = () => {
//     console.log($(this).data("caption"));
// };
// When you press 'ctrl + g' show the grid element that reveals the page grid


document.onkeyup = function (e) {
  console.log(e);
  var $grid = $(".grid");

  if (e.ctrlKey && e.code == "KeyG") {
    if ($grid.hasClass("active")) {
      $grid.removeClass("active");
    } else {
      $grid.addClass("active");
    }
  }
};