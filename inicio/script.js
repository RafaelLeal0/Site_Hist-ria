document.getElementById('menuToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
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
