let carouselBlock = document.querySelectorAll('.carousel-inner__block')
let itemArray = Array.from(carouselBlock)
let btnRight = document.querySelector('.carousel-right')
let btnLeft = document.querySelector('.carousel-left')
let count = 0
let transformMove = 0

function moveLeft() {
    if (window.innerWidth >= 800) {
        if (count === 1) {
            itemArray.map(s => s.style.transform = "translateX(0)")
            count = 0;
        }
    } else if (window.innerWidth < 800) {
        if (count !== 0) {
            transformMove = transformMove - 100
            itemArray.map(s => s.style.transform = `translateX(-${transformMove}%)`)
            count--
        }
    }
}

function moveRight() {
    if (window.innerWidth >= 800) {
        count = 1;
        itemArray.map(s => s.style.transform = "translateX(-100%)");
    } else if (window.innerWidth < 800) {
        count++
        if (count >= 3) {
            count = 3
        }
        transformMove = transformMove + 100
        if (transformMove >= 300) {
            transformMove = 300
        }
        if (count > 0 && count <= 3) {
            itemArray.map(s => s.style.transform = `translateX(-${transformMove}%)`)
        }
    }
}

btnRight.addEventListener('click', moveRight)
btnLeft.addEventListener('click', moveLeft)