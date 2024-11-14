
const backToTopButton = document.querySelector('.backToTop');


function toggleBackToTopButton() {
    if (window.scrollY > 300) {
        
        backToTopButton.style.display = 'block';
    } else {
        
        backToTopButton.style.display = 'none';
    }
}


window.addEventListener('scroll', toggleBackToTopButton);


backToTopButton.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});