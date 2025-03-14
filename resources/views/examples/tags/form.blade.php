<h6 class="heading-small text-muted mb-4">Datos Principales</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <x-form-input name="name" id="name" placeholder="Ingrese un nombre" label="Nombre"
                :value="$tag->name" />
        </div>
    </div>
</div>

<hr class="my-4" />
<!-- Contenido -->
<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <x-form-button type="submit" variant="primary" icon="fas fa-save" text="Registrar" />
    </div>
</div>
