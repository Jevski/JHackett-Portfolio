$(document).ready(function(){

    function hideMenuAt425() {
        // Check if the screen width is less than or equal to 425 pixels
        if (window.innerWidth <= 550) {
            // Get the navigation menu element
            var menu = document.querySelector('.menu-navigation');
    
            // Check if the menu element exists
            if (menu) {
                // Hide the menu by setting its display property to 'none'
                menu.style.display = 'none';
            }
        } else {
            // If the screen width is greater than 550 pixels, show the menu
            var menu = document.querySelector('.menu-navigation');
            if (menu) {
                menu.style.display = 'block'; // or 'initial', 'inline', etc. depending on your CSS
            }
        }
    }
    
    // Call the function when the page loads and on window resize
    window.onload = hideMenuAt425;
    window.onresize = hideMenuAt425;

//Open nav menu mobile//
$(".burger-icon").click(function(){ 
    $('.open-menu-navigation').toggleClass('inactive');
})

$(".mobile-menu-item").click(function(){
    $('.open-menu-navigation').toggleClass('inactive')
})


// Click event to close the form
$(".form-close").click(function() {
    // Toggles the visibility of elements with classes 'form-overlay' and 'form-container'
    $('.form').toggleClass('slideOut slideIn');
    
    
    // Wait for the animation to complete and then toggle the display to none
    setTimeout(function() {
        $('.form-overlay, .form-container').toggleClass('inactive');
    }, 1600); // Adjust the timeout value according to your animation duration

    

});

$('.contact-menu').click(function(){
    console.log('testing');
    $('.form-overlay, .form-container').toggleClass('inactive');
    $('.form').toggleClass('slideIn slideOut');

});

$('.logo-navigation').click(function(){
    console.log('testing');

})

});