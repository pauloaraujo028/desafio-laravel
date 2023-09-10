<div class="modal fade" id="completarCadastroModal" tabindex="-1" aria-labelledby="completarCadastroModal"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="completarCadastroModal">Título do Modal</h5>
            </div>
            <div class="modal-body">
                Conteúdo do Modal...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="fecharModal">
                    <a class="dropdown-item" href="{{ route('profile.page') }}">Completar Cadastro</a>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var completarCadastroModal = new bootstrap.Modal(document.getElementById('completarCadastroModal'));
        completarCadastroModal.hide();
    });
</script>
