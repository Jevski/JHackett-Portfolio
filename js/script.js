$(document).ready(function(){
console.log('testing');


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
    $('.form-overlay, .form-container').toggleClass('inactive');
    $('.form').toggleClass('slideIn slideOut');

});



});