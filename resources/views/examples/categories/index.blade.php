@extends('layouts.panel')
@section('title', 'Category')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Categories</h3>
                        @can('create categories')
                            <x-link href="{{ route('categories.create') }}" variant="primary" icon="fas fa-plus"
                                text="Nueva Categoria" />
                        @endcan
                    </div>
                </div>
                <div class="table-responsive">
                    <x-table>
                        <x-slot name="thead">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-heading"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-heading"></i> Description</th>
                                <th scope="col"><i class="fas fa-list-ol"></i> Slug</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </x-slot>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <span class="badge badge-pill badge-primary"> {{ $category->id }} </span>
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    {{ $category->description }}
                                </td>
                                <td>
                                    {{ $category->slug }}
                                </td>
                                <td>
                                    {{ $category->created_at }}
                                </td>
                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    @can('read categories')
                                        <x-link href="{{ route('categories.show', $category) }}" variant="primary" icon="fas fa-eye"
                                            text="Mostrar" size="sm" />
                                    @endcan
                                    @can('update categories')
                                        <x-link href="{{ route('categories.edit', $category) }}" variant="info" icon="fas fa-edit"
                                            text="Editar" size="sm" />
                                    @endcan
                                    @can('destroy categories')
                                        <x-delete-button :route="route('categories.destroy', $category)" icon="fas fa-trash"
                                            text="Eliminar" />
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
                <x-pagination :links="$categories->links()" />
            </div>
        </div>
    </div>
@endsection
