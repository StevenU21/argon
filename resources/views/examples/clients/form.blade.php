<h6 class="heading-small text-muted mb-4">Datos del Cliente</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombres</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Agregar un Nombre" value="{{ old('name', $client->name) }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_name">Apellidos</label>
                <input type="text" id="last_name" name="last_name" class="form-control form-control-alternative"
                    placeholder="Agregar un Apellido" value="{{ old('last_name', $client->last_name) }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone">Teléfono</label>
                <input type="phone" id="phone" name="phone" class="form-control form-control-alternative"
                    placeholder="Agregar un Teléfono" value="{{ old('phone', $client->phone) }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Agregar un Correo" value="{{ old('email', $client->email) }}">
            </div>
        </div>
    </div>
</div>
<hr class="my-4" />
<h6 class="heading-small text-muted mb-4">Información Adicional</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <label class="form-control-label" for="image">Imágen</label>
        <input type="file" id="image" name="image" class="form-control form-control-alternative">
        <img id="imagePreview" src="#" alt="Vista previa de la imagen" class="img-fluid mt-2"
            style="display: none; max-height: 200px;">
    </div>
    <div class="form-group">
        <label class="form-control-label" for="gender">Género</label>
        <div class="d-flex">
            <div class="form-check form-check-inline mr-3">
                <input class="form-check-input" type="radio" id="male" name="gender" value="male"
                    {{ old('gender', $client->gender) == 'male' ? 'checked' : '' }} value="male">
                <label class="form-check-label" for="male">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="female" name="gender" value="female"
                    {{ old('gender', $client->gender) == 'female' ? 'checked' : '' }} value="female">
                <label class="form-check-label" for="female">Femenino</label>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>

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
