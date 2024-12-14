<div class="modal fade" id="showClientModal{{ $client->id }}" tabindex="-1" role="dialog"
    aria-labelledby="showClientModalLabel{{ $client->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showClientModalLabel{{ $client->id }}">
                    Mostrar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('examples.clients.show')
            </div>
        </div>
    </div>
</div>
