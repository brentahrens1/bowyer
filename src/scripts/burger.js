const targetNorm = document.querySelector('.target-norm')
const targetClicked = document.querySelector('.target-clicked')
const burger = document.querySelector('.bowyer-nav__burger')
const overlay = document.querySelector('.bowyer-nav__overlay')

burger.addEventListener('click', function() {
    targetClicked.classList.toggle("clicked-open")
    targetNorm.classList.toggle("norm-open")
    overlay.classList.toggle("show")
})