@extends('layouts.panel')
@section('title', 'Tags')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Etiquetas</h3>
                        @can('create tags')
                            <a href="{{ route('tags.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Nueva Etiqueda
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-cubes"></i> Slug</th>
                                <th scope="col"><i class="fas fa-palette"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-tools"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $tag->id }} </span>
                                    </td>

                                    <td>
                                        {{ $tag->name }}
                                    </td>

                                    <td>
                                        {{ $tag->slug }}
                                    </td>

                                    <td>
                                        {{ $tag->created_at }}
                                    </td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        @can('read tags')
                                            <a href="{{ route('tags.show', $tag) }}" class="btn btn-primary btn-sm"
                                                style="margin-right: 5px;">
                                                <i class="fas fa-eye"></i> Mostrar
                                            </a>
                                        @endcan
                                        @can('update tags')
                                            <a href="{{ route('tags.edit', $tag) }}" class="btn btn-info btn-sm"
                                                style="margin-right: 5px;">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                        @endcan
                                        @can('destroy tags')
                                            <form action="{{ route('tags.destroy', $tag) }}" method="POST"
                                                style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $tags->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
