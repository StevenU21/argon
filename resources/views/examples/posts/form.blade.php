<h6 class="heading-small text-muted mb-4">Datos del Post</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Título</label>
                <input type="text" id="title" name="title" class="form-control form-control-alternative"
                    placeholder="Agregar un Título" value="{{ old('title', $post->title) }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_id"><i class="fas fa-graduation-cap"></i> Categoria</label>

                <select name="category_id" id="category_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar una Categoria</option>
                    @foreach ($categories as $id => $name)
                        <option value="{{ $id }}" @selected(old('category_id', $post->category_id) == $id)>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const categorySelect = document.getElementById('category_id');
                        const choices = new Choices(categorySelect, {
                            searchEnabled: true,
                            itemSelectText: '',
                            shouldSort: false
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<hr class="my-4" />
<!-- Extra -->
<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <label for="description">Contenido</label>
        <textarea rows="4" name="content" id="content" class="form-control form-control-alternative"
            placeholder="Escriba algo...">{{ old('content', $post->content) }}</textarea>
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
