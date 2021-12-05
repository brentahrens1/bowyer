const nav = document.querySelector('.bowyer-nav')

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
    nav.style.backgroundColor = "#F7F2EE"
  } else {
    nav.style.top = "-100%";
    nav.style.backgroundColor = "transparent"
  }
  prevScrollpos = currentScrollPos;
}