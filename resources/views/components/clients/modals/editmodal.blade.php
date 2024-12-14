<div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editClientModalLabel{{ $client->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientModalLabel{{ $client->id }}">Editar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm{{ $client->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('examples.clients.form')
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Enviar formulario de edición con AJAX
    $('form[id^="editForm"]').on('submit', function(event) {
        event.preventDefault();

        let form = $(this);
        let formData = new FormData(this);
        let clientId = form.attr('id').replace('editForm', '');

        $.ajax({
            url: '/clients/' + clientId,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                'X-HTTP-Method-Override': 'PUT'
            },
            success: function(response) {
                // Manejar éxito
                console.log('Client updated successfully:', response);
                $('#editClientModal' + clientId).modal('hide');
                location.reload(); // Recargar la página para reflejar los cambios
            },
            error: function(xhr) {
                // Manejar errores
                console.error('Error:', xhr.responseText);
            }
        });
    });
</script>
