<h6 class="heading-small text-muted mb-4">Datos de la Categoria</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Título</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Agregar un Nombre" value="{{ old('name', $category->name) }}">
            </div>
        </div>
    </div>
</div>
<hr class="my-4" />
<!-- Extra -->
<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea rows="4" name="description" id="description" class="form-control form-control-alternative"
            placeholder="Escriba algo...">{{ old('description', $category->description) }}</textarea>
    </div>
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
