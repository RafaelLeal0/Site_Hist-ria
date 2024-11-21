document.getElementById('menuToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", () => {
    const addTopicBtn = document.getElementById("addTopicBtn");
    const addTopicModal = document.getElementById("addTopicModal");
    const modalOverlay = document.getElementById("modalOverlay");
    const addTopicForm = document.getElementById("addTopicForm");

    if (addTopicBtn) {
        addTopicBtn.addEventListener("click", () => {
            addTopicModal.classList.add("active");
            modalOverlay.classList.add("active");
        });
    }

    modalOverlay.addEventListener("click", () => {
        addTopicModal.classList.remove("active");
        modalOverlay.classList.remove("active");
    });

    addTopicForm.addEventListener("submit", (e) => {
        e.preventDefault();
    
        const fileInput = document.getElementById("topicImage"); 
        const formData = new FormData(addTopicForm);
    
        console.log([...formData]);
    
        if (!fileInput.value) {
            alert("Por favor, selecione um arquivo antes de enviar.");
            return;
        }
    
        fetch("add_topic.php", {
            method: "POST",
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Erro ao conectar ao servidor.");
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert("Tópico adicionado com sucesso!");
                    addTopicModal.classList.remove("active");
                    modalOverlay.classList.remove("active");
                    location.reload(); 
                } else {
                    alert(data.error || "Erro ao adicionar o tópico.");
                }
            })
            .catch(error => {
                console.error("Erro:", error);
                alert("Ocorreu um erro ao adicionar o tópico. Tente novamente.");
            });
    });
    
});     