// <!-- === back to top === -->
function animateToTop(e) {
    window.scrollTo(0, 0);
}
window.addEventListener('scroll', (e) => {
    var scrollTopBtn = document.getElementsByClassName('scrolimg')[0];
    if (window.scrollY >= 950) {
        scrollTopBtn.style.visibility = 'visible';
    } else {
        scrollTopBtn.style.visibility = 'hidden';
    }
});
// <!-- === scroll menu effect === -->

   window.addEventListener("scroll", function(){
        const header = document.querySelector(".header")
        header.classList.toggle("scrolled-header", window.scrollY > 0)
        })

// menu 
let show = true; 

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial"

    menuSection.classList.toggle("on", show)
    show = !show;
})