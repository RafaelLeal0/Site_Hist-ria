document.getElementById('menuToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});
a
function showAlert(message) {
    const alertBox = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');
    
    alertMessage.textContent = message; 
    alertBox.classList.add('show'); 

    setTimeout(() => {
        alertBox.classList.remove('show');
    }, 5000);
}

document.getElementById('close-alert').addEventListener('click', () => {
    document.getElementById('alert').classList.remove('show');
});

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('sucesso')) {
        showAlert('Alterações feitas com sucesso!');
    }
};
