const sections = document.querySelectorAll('.section')

const options = {
    root: null,
    threshold: 0,
    rootMargin: "-120px"
}

const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            entry.target.classList.remove("scroll-into-view")
        } else {
            entry.target.classList.add("scroll-into-view")
        }
    })
}, options)

sections.forEach(section => {
    observer.observe(section)
})