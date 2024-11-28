<a href="sessao.php?action=delete&id=<?= $sessao['id'] ?>" 
   class="delete-btn" 
   id="delete-session-btn" 
   name="delete">
   Deletar Sessão
</a>

<div id="confirmation-modal" class="modal-container">
    <div class="modal">
        <section>
            <header class="modal-header">
                <span onclick="closeModal()">&times;</span>
                <h2>Você tem certeza de que quer deletar?</h2>
            </header>
            <section class="modal-content">
                <p>Isso não pode ser refeito</p>
            </section>
            <div class="modal-footer">
                <button class="modal-button" onclick="closeModal()">Cancelar</button>
                <button
                    class="modal-button modal-confirm-button"
                    onclick="confirmDelete()">
                    Confirmar
                </button>
            </div>
        </section>
    </div>
</div>

<script>
    let sessionId = "<?= $sessao['id'] ?>";
</script>
