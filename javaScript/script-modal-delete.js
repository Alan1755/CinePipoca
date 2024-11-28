// Seleção de elementos
const openModalBtnDelete = document.getElementById('openModalBtnDelete');
const modalDelete = document.getElementById('modalDelete');
const closeModalBtnDelete = document.getElementById('closeModalBtnDelete');

// Abrir o modal
openModalBtnDelete.addEventListener('click', () => {
    modalDelete.style.display = 'flex';
});

// Fechar o modal ao clicar no "X"
closeModalBtnDelete.addEventListener('click', () => {
    modalDelete.style.display = 'none';
});

// Fechar ao clicar fora do conteúdo do modal
window.addEventListener('click', (event) => {
    if (event.target === modalDelete) {
        modalDelete.style.display = 'none';
    }
});
