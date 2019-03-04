var images = ["one", "two", "three"];

// Remember where we are in the array, start just before the first entry

function cycleClasses(el) {
    console.log();
    let index;
    if (el.attr("class") == "three") {
        index = -1;
    } else {
        index = images.indexOf(el.attr("class"));
    }
    el.removeClass().addClass(images[index + 1]);
}

setInterval(function() {
    cycleClasses($(".stack ul li:first-child"));
    cycleClasses($(".stack ul li:nth-child(2)"));
    cycleClasses($(".stack ul li:last-child"));
}, 5000);

$(document).on("mouseenter", ".stack ul li", showCaption);

function showCaption() {
    console.log($(this).data("caption"));
}
// const showCaption = () => {
//     console.log($(this).data("caption"));
// };
