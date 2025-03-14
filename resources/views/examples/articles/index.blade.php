@extends('layouts.panel')
@section('title', 'Articles')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Articulos</h3>
                        <x-link :href="route('articles.create')" variant="primary" icon="fas fa-plus" text="Nuevo Articulo"
                            can="create articles" />
                    </div>
                </div>
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            <x-table.th icon="fas fa-list-ol"> ID</x-table.th>
                            <x-table.th icon="fas fa-heading"> Título</x-table.th>
                            <x-table.th icon="fas fa-align-left"> Contenido</x-table.th>
                            <x-table.th icon="fas fa-tags"> Categoria</x-table.th>
                            <x-table.th icon="fas fa-tags"> Etiquetas</x-table.th>
                            <x-table.th icon="fas fa-tags"> Imagen</x-table.th>
                            <x-table.th icon="fas fa-calendar-check"> Fecha de Registro</x-table.th>
                            <x-table.th icon="fas fa-cogs"> Acciones</x-table.th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($articles as $article)
                            <tr>
                                <x-table.td>
                                    <x-welcome.badge color="primary">{{ $article->id }}</x-welcome.badge>
                                </x-table.td>
                                <x-table.td> {{ $article->title }} </x-table.td>
                                <x-table.td limit="20">{{ $article->content }}</x-table.td>
                                <x-table.td>
                                    <x-welcome.badge color="primary">{{ $article->category->name }}</x-welcome.badge>
                                </x-table.td>
                                <x-table.td>
                                    @foreach ($article->tags as $tag)
                                        <x-welcome.badge color="info">{{ $tag->name }}</x-welcome.badge>
                                    @endforeach
                                </x-table.td>
                                <x-table.td>
                                    <img src="{{ $article->image() }}" class="img-fluid" style="width: 100px">
                                </x-table.td>
                                <x-table.td> {{ $article->created_at }} </x-table.td>
                                <x-table.td styleType="action">
                                    <x-link :href="route('articles.show', $article)" variant="primary" icon="fas fa-eye"
                                        text="Mostrar" size="sm" can="read articles" />
                                    <x-link :href="route('articles.edit', $article)" variant="info" icon="fas fa-edit"
                                        text="Editar" size="sm" can="update articles" />
                                    <x-delete-button :route="route('articles.destroy', $article)" icon="fas fa-trash"
                                        text="Eliminar" can="destroy articles" />
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <x-pagination position="left" :links="$articles->links()" />
            </div>
        </div>
    </div>
@endsection
