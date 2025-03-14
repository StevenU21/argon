@extends('layouts.panel')
@section('title', 'Tags')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Etiquetas</h3>
                        <x-link :href="route('tags.create')" variant="primary" icon="fas fa-plus" text="Nueva Etiqueta"
                            can="create tags" />
                    </div>
                </div>
                <div class="table-responsive">
                    <x-table>
                        <x-slot name="thead">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-cubes"></i> Slug</th>
                                <th scope="col"><i class="fas fa-palette"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-tools"></i> Acciones</th>
                            </tr>
                        </x-slot>
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
                                        <x-link :href="route('tags.show', $tag)" variant="primary" icon="fas fa-eye"
                                            text="Mostrar" size="sm" can="read tags" />
                                        <x-link :href="route('tags.edit', $tag)" variant="info" icon="fas fa-edit" text="Editar"
                                            size="sm" can="update tags" />
                                        <x-delete-button :route="route('tags.destroy', $tag)" icon="fas fa-trash"
                                            text="Eliminar" can="destroy tags" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                </div>
                <x-pagination :links="$tags->links()" />
            </div>
        </div>
    </div>
@endsection
