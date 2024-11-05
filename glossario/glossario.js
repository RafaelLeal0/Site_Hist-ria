// glossario.js
document.addEventListener('DOMContentLoaded', function () {
    const terms = document.querySelectorAll('.term-item');
    const content = document.getElementById('conteudo');
    let currentIndex = 0;

    function highlightTerm(term) {
        // Remove highlights anteriores
        content.innerHTML = content.innerHTML.replace(/<span class="highlight">([^<]+)<\/span>/g, "$1");

        // Destaque o termo no conteúdo
        const regex = new RegExp(`\\b(${term})\\b`, 'gi');
        content.innerHTML = content.innerHTML.replace(regex, `<span class="highlight">$1</span>`);
    }

    function showTerm(index) {
        const term = terms[index];
        highlightTerm(term.getAttribute('data-term'));
        // Centraliza o item do carrossel exibido
        terms.forEach((t, i) => t.style.display = i === index ? 'block' : 'none');
    }

    document.getElementById('prev').addEventListener('click', function () {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : terms.length - 1;
        showTerm(currentIndex);
    });

    document.getElementById('next').addEventListener('click', function () {
        currentIndex = (currentIndex < terms.length - 1) ? currentIndex + 1 : 0;
        showTerm(currentIndex);
    });

    // Exibe o primeiro termo ao carregar a página
    showTerm(currentIndex);
});
