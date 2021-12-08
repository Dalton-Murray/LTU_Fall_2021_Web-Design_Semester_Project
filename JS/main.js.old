// Dalton Murray //
// Gavin Poulton //
// Yousif Haddas //

// ========================================================================================================================== //
// Handles resizing the navigation so it is properly fullscreen
function resizeNav() {
    // Set the navigation height to fill the entire window
    $("#navigationFull").css({"height": window.innerHeight});

    // We then set the radius of the circle to the length diagonal of the window
    // This makes it so that we don't accidentally set it to be bigger than the page
    var radius = Math.sqrt(Math.pow(window.innerHeight, 2) + Math.pow(window.innerWidth, 2));
    // Set the diamter to double the radius
    var diameter = radius * 2;
    // Set navigationOverlay id so its width is the diameter
    $("#navigationOverlay").width(diameter);
    // Set navigationOverlay id so its height is the diameter
    $("#navigationOverlay").height(diameter);
    // Set navigationOverlay css so that margin-top has radius and margin-left has radius
    $("#navigationOverlay").css({"margin-top": -radius, "margin-left": -radius});
}

// This Sets up the click and window resize callbacks
$(document).ready(function() {
    $("#navigationToggle").click(function() {
        $("#navigationToggle, #navigationOverlay, #navigationFull").toggleClass("open");
    });

    $(window).resize(resizeNav);

    resizeNav();

});

// ========================================================================================================================== //
// Variable for counter
var mainHidden = 0;

// Detects if clicked on navigation button
$(function () {
    $('#navigationToggle').click(function () {
        // If it is clicked then we hide the menu button
        $('.mainHide').hide();
        // Add 1 to mainHidden variable
        mainHidden++;

        // Ensures overflow is hidden on click
        document.body.style.overflow = "hidden";

        // Calculates if number is odd/even
        if (mainHidden % 2 == 0) {
            // Adds a delay
            setTimeout(function () {
                // Shows everythign in mainHide class
                $('.mainHide').show();
                // Sets overflow back to auto
                document.body.style.overflow = "auto";
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
// Handles scrolling to the top
$(window).scroll(function() {
    // Only if you've scrolled 50 pixels down, it shows the button
    if ($(this).scrollTop() >= 50) {
        // We start to allow the button/arrow to fade in, allowing it to be shown more gently than instantly shown
        $('#goToTop').fadeIn(200);
    } else {
        // Fades it out if we're not less than 50 pixels down
        $('#goToTop').fadeOut(200);
    }
});
// If the arrow is clicked
$('#goToTop').click(function() {
    $('body,html').animate({
        // Scroll to the top of the page/body
        scrollTop : 0
    }, 500);
});