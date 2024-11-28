document.addEventListener("DOMContentLoaded", () => {
    const adicionarFilmeBtn = document.getElementById("adicionar-filme");
    const modalSessao = new bootstrap.Modal(document.getElementById("modalSessao"));

    if (adicionarFilmeBtn) {
        adicionarFilmeBtn.addEventListener("click", (e) => {
            const shouldShowModal = adicionarFilmeBtn.getAttribute("data-modal") === "true";
            
            if (shouldShowModal) {
                e.preventDefault(); // Impede a navegação padrão
                modalSessao.show(); // Exibe o modal
            } else {
                // Continue normalmente (redirecionar ou realizar outra ação)
                console.log("Sessão criada, pode adicionar o filme.");
            }
        });
    }
});
