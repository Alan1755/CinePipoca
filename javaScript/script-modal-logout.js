// Seleção de elementos
const openModalBtnLogout = document.getElementById('openModalBtnLogout');
const modalLogout = document.getElementById('modalLogout');
const closeModalBtnLogout = document.getElementById('closeModalBtnLogout');

// Abrir o modal
openModalBtnLogout.addEventListener('click', () => {
    modalLogout.style.display = 'flex';
});

// Fechar o modal ao clicar no "X"
closeModalBtnLogout.addEventListener('click', () => {
    modalLogout.style.display = 'none';
});

// Fechar ao clicar fora do conteúdo do modal
window.addEventListener('click', (event) => {
    if (event.target === modalLogout) {
        modalLogout.style.display = 'none';
    }
});
