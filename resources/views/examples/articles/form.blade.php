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
            <div class="form-group">
                <label class="form-control-label" for="category_id"><i class="fas fa-graduation-cap"></i> Categoría</label>
                <select name="category_id" id="category_id" class="form-control form-control-alternative" required>
                    <option value="" disabled selected>Seleccionar una Categoría</option>
                    @foreach ($categories as $id => $name)
                        <option value="{{ $id }}" @selected(old('category_id', $article->category_id) == $id)>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tags"><i class="fas fa-tags"></i> Etiquetas</label>
                <select name="tags[]" id="tags" class="form-control form-control-alternative" multiple required>
                    <option value="" disabled>Seleccionar Etiquetas</option>
                    @foreach ($tags as $id => $name)
                        <option value="{{ $id }}" @if(in_array($id, old('tags', $article->tags->pluck('id')->toArray()))) selected @endif>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tagSelect = document.getElementById('tags');
        const choices = new Choices(tagSelect, {
            searchEnabled: true,
            itemSelectText: '',
            shouldSort: false,
            maxItemCount: 5
        });

        tagSelect.addEventListener('change', function () {
            if (tagSelect.selectedOptions.length > 5) {
                alert('Sólo puedes seleccionar un máximo de 5 etiquetas.');
                // Remover la opción seleccionada
                tagSelect.options[tagSelect.selectedIndex].selected = false;
            }
        });
    });
</script>
