// Dalton Murray
// Gavin Poulton
// Yousif Haddas

// ========================================================================================================================== //
// ========================================================================================================================== //
// Handles resizing the navigation so it is properly fullscreen
function resizeNav() {
    // Set the navigation height to fill the entire window
    $("#nav-fullscreen").css({"height": window.innerHeight});

    // We then set the radius of the circle to the length diagonal of the window
    // This makes it so that we don't accidentally set it to be bigger than the page
    var radius = Math.sqrt(Math.pow(window.innerHeight, 2) + Math.pow(window.innerWidth, 2));
    var diameter = radius * 2;
    $("#nav-overlay").width(diameter);
    $("#nav-overlay").height(diameter);
    $("#nav-overlay").css({"margin-top": -radius, "margin-left": -radius});
}

// This Sets up the click and window resize callbacks
$(document).ready(function() {
    $("#nav-toggle").click(function() {
        $("#nav-toggle, #nav-overlay, #nav-fullscreen").toggleClass("open");
    });

    $(window).resize(resizeNav);

    resizeNav();

	window.setTimeout(function() {
        // This would make it so that when the page loads the navigation menu is opened by default, but we don't want to do that
        // in this case
		 // $("#nav-toggle").click();
	}, 1000)
});
// ========================================================================================================================== //
// ========================================================================================================================== //


// ========================================================================================================================== //
// ========================================================================================================================== //
var mainHidden = 0;


$(function () {
    $('#nav-toggle').click(function () {
        // If it is clicked then we hide the menu button
        $('.mainHide').hide();

        mainHidden++;

        if (mainHidden % 2 == 0) {
            setTimeout(function () {
                $('.mainHide').show();
            }, 1430);
        }

    });
});


// Detects if clicked on the navigation menu state
$(function () {
    $('#more').click(function () {
        // If they click on state button it shows the hidden class, which is the state menu
        $('.hidden').show();
        // It then hides the existing items in the navigation menu
        $('.shown').hide();
        // Essentially what this is doing is checking if the list in datalist is not equal to 0, then it hides the more/state button
        // and shows the menu button to go back to the previous menu
        if ($('#datalist li').length != $('0')) {
            $('#more').hide();
            $('#menu').show();
        }
    });
});

// Detects if the menu button in the navigation menu is clicked
$(function () {
    $('#menu').click(function () {
        // If it is clicked then we hide the menu button
        $('#menu').hide();
        // Then we hide the individual states
        $('.hidden').hide();
        // Then we show the previous menu options
        $('.shown').show();
        // Then we show the state button again
        $('#more').show();
    });
});
// ========================================================================================================================== //
// ========================================================================================================================== //

