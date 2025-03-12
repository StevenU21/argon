<h6 class="heading-small text-muted mb-4">Datos de la Categoria</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <x-form-input label="Nombre" id="name" name="name" value="{{ $category->name }}" placeholder="Ingrese el nombre..." />
        </div>
    </div>
</div>
<hr class="my-4" />
<!-- Extra -->
<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <x-form-textarea label="Descripción" id="description" name="description" value="{{ $category->description }}" placeholder="Escribe aquí..." />
</div>

<hr class="my-4" />
<!-- Contenido -->
<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Registrar
        </button>
    </div>
</div>
