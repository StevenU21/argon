<h6 class="heading-small text-muted mb-4">Datos del artículo</h6>
<div class="pl-lg-4">
    <x-welcome.form-input-alternative name="title" id="title" label="Título" icon="fas fa-heading"
        placeholder="Agregar un título" value="{{ old('title', $article->title) }}" required />
</div>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <x-welcome.form-select :options="$categories" name="category_id" id="category_id" label="Categoría"
                icon="fas fa-graduation-cap" :selected="old('category_id', $article->category_id)" />
        </div>
        <div class="col-lg-6">
            <x-welcome.form-select :options="$tags" name="tags[]" id="tags" label="Etiquetas" icon="fas fa-tags"
                :selected="old('tags', $article->tags->pluck('id')->toArray())" required="false" multiple maxItems="5"
                selectjs="true" />
        </div>
    </div>
</div>

<div class="pl-lg-4">
    <x-form-image name="image" id="image" label="Imagen" icon="fas fa-image"
        accept="image/png,image/jpg,image/jpeg,image/webp" />
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <x-welcome.form-textarea name="content" id="content" label="Contenido" icon="fas fa-align-left"
        placeholder="Agregar el contenido" value="{{ old('content', $article->content) }}" required />
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <x-form-button type="submit" icon="fas fa-save" text="Registrar" />
</div>
