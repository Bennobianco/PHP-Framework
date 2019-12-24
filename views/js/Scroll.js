//JavaScript by Captinpast

//execute this function will scroll smoot to the top of the page
function scrollToTop() {
  setTimeout(function() {
    document.documentElement.scrollTop = document.documentElement.scrollTop-100
    if (document.documentElement.scrollTop > 0) {
      scrollToTop()
    }
  }, 10)
}

//you have to create a button wiht the id "upButton" an plache it on the screen, the function will do the rest
document.addEventListener("DOMContentLoaded", function () {
  //suhe the button wiht the id "upButton"
  var button = document.getElementById("upButton")

  //if you scroll, it will chech in witch direction
  window.onscroll = function() {
   if (document.documentElement.scrollTop > 20) {
     //make the button visible
     button.style.display = "block"
   } else {
     //make the button invisible
     button.style.display = "none"
   }
  }
})
