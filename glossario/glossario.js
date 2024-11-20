document.getElementById('menuToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});


function moveCarousel(direction) {
    const carousel = document.querySelector('.alfabeto_carrossel');
    const scrollAmount = carousel.offsetWidth / 5; // Mover uma fração do carrossel
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

