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

document.getElementById('logout').addEventListener('click', function (event) {
    event.preventDefault();
    
    Swal.fire({
        title: 'Você tem certeza que deseja sair?',
        text: "Você não poderá desfazer essa ação!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, sair!',
        cancelButtonText: 'Não, cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = event.target.href;
        }
    });
});