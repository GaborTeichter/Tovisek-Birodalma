//Hamburger icon 
function hamburger() {
    var x = document.getElementById("topNavbar");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  
$(document).ready(function () {
  
    $('.icon').on('click', function () {
  
      $('.animated-icon').toggleClass('open');
    });
});