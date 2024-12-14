<h6 class="heading-small text-muted mb-4">Información del Cliente</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"><i class="fas fa-user"></i> Nombre</label>
                <p>{{ $client->name }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_name"><i class="fas fa-user-tag"></i> Apellido</label>
                <p>{{ $client->last_name }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email"><i class="fas fa-envelope"></i> Email</label>
                <p>{{ $client->email }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone"><i class="fas fa-phone-alt"></i> Teléfono</label>
                <p>{{ $client->phone }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender"><i class="fas fa-venus-mars"></i> Género</label>
                <p>{{ $client->gender }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="image"><i class="fas fa-image"></i> Imágen</label>
                <p><img src="{{ $client->image() }}" alt="Imagen del Cliente" class="img-fluid"></p>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">
        <i class="fas fa-times"></i> Cerrar</button>
</div>
