document.getElementById('menuToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});

const sections = document.querySelectorAll('.new-section, .new-section2, .new-section3, .new-section4, .new-section5');

sections.forEach(section => {
    section.addEventListener('mouseover', () => {
        window.scrollBy(0, 50);
    });
});

