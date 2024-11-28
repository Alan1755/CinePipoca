function openModal() {
    document.getElementById("confirmation-modal").classList.add("modal-open");
}

function closeModal() {
    document.getElementById("confirmation-modal").classList.remove("modal-open");
}

function confirmDelete() {
    closeModal();
    window.location.href = "sessao.php?action=delete&id=" + sessionId;
}

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("delete-session-btn").addEventListener("click", (event) => {
        event.preventDefault();
        openModal();
    });
});

