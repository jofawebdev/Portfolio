// Get the button
var mybutton = document.getElementById("scrollToTop");

// Scroll to the top when the button is clicked
mybutton.onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};