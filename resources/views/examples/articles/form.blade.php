<h6 class="heading-small text-muted mb-4">Datos del artículo</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <label class="form-control-label" for="title">Título</label>
        <input type="text" id="title" name="title" class="form-control form-control-alternative"
            placeholder="Agregar un Título" value="{{ old('title', $article->title) }}" required>
    </div>
</div>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <x-welcome.form-select
                :options="$categories"
                name="category_id"
                id="category_id"
                label="Categoría"
                icon="fas fa-graduation-cap"
                :selected="old('category_id', $article->category_id)"

            />
        </div>
        <div class="col-lg-6">
            <x-welcome.form-select
                :options="$tags"
                name="tags[]"
                id="tags"
                label="Etiquetas"
                icon="fas fa-tags"
                :selected="old('tags', $article->tags->pluck('id')->toArray())"
                required="false"
                multiple
                maxItems="5"
                selectjs="true"
            />
        </div>
    </div>
</div>

<div class="pl-lg-4">
    <div class="form-group">
        <label class="form-control-label" for="image"><i class="fas fa-image"></i> Imagen</label>
        <input type="file" name="image" id="image" class="form-control form-control-alternative" accept="image/png,image/jpg,image/jpeg,image/webp">
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea rows="4" name="content" id="content" class="form-control form-control-alternative"
            placeholder="Escriba algo..." required>{{ old('content', $article->content) }}</textarea>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Registrar
        </button>
    </div>
</div>
