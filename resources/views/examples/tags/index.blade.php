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
                            can="create tags" outline/>
                    </div>
                </div>
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            <x-table.th icon="fas fa-list-ol">ID</x-table.th>
                            <x-table.th icon="fas fa-user">Nombre</x-table.th>
                            <x-table.th icon="fas fa-cubes">Slug</x-table.th>
                            <x-table.th icon="fas fa-palette">Fecha de Registro</x-table.th>
                            <x-table.th icon="fas fa-tools">Acciones</x-table.th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($tags as $tag)
                            <tr>
                                <x-table.td>
                                    <x-welcome.badge color="primary" :text="$tag->id" />
                                </x-table.td>
                                <x-table.td> {{ $tag->name }} </x-table.td>
                                <x-table.td> {{ $tag->slug }} </x-table.td>
                                <x-table.td> {{ $tag->created_at }} </x-table.td>
                                <x-table.td styleType="action">
                                    <x-link :href="route('tags.show', $tag)" variant="primary" icon="fas fa-eye" text="Mostrar"
                                        size="sm" can="read tags" outline/>
                                    <x-link :href="route('tags.edit', $tag)" variant="info" icon="fas fa-edit" text="Editar"
                                        size="sm" can="update tags" outline/>
                                    <x-delete-button :route="route('tags.destroy', $tag)" icon="fas fa-trash" text="Eliminar"
                                        can="destroy tags" outline/>
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <x-pagination :links="$tags->links()" />
            </div>
        </div>
    </div>
@endsection
