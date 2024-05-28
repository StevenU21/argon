<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Animales</h3>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Nuevo Post
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                            <th scope="col"><i class="fas fa-file-signature"></i> Nombre</th>
                            <th scope="col"><i class="fas fa-file-alt"></i> Descripción</th>
                            <th scope="col"><i class="fas fa-dollar-sign"></i> Precio</th>
                            <th scope="col"><i class="fas fa-boxes"></i> Stock</th>
                            <th scope="col"><i class="fas fa-image"></i> Imagen</th>
                            <th scope="col"><i class="fas fa-tools"></i> Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <span class="badge badge-pill badge-primary"> {{ $product->id }} </span>
                                </td>
                                <td>
                                    {{ $product->name }}
                                </td>

                                <td>
                                    {{ $product->description }}
                                </td>

                                <td>
                                    {{ $product->price }}
                                </td>

                                <td>
                                    {{ $product->stock }}
                                </td>

                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded"
                                        style="width: 100px; height: 100px; overflow: hidden;">
                                        <img src="{{ $product->image() }}" alt="{{ $product->name }}" class="img-fluid">
                                    </div>
                                </td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="#" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i> Mostrar
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <form action="#" method="POST"
                                        style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
