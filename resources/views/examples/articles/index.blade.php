@extends('layouts.panel')
@section('title', 'Articles')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Articulos</h3>
                        @can('create articles')
                            <a href="{{ route('articles.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Nuevo Articulo
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-heading"></i> Título</th>
                                <th scope="col"><i class="fas fa-align-left"></i> Contenido</th>
                                <th scope="col"><i class="fas fa-tags"></i> Categoria</th>
                                <th scope="col"><i class="fas fa-tags"></i> Etiquetas</th>
                                <th scope="col"><i class="fas fa-tags"></i> Imagen</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $article->id }} </span>
                                    </td>
                                    <td>
                                        {{ $article->title }}
                                    </td>

                                    <td>
                                        {{ Str::limit($article->content, 20) }}
                                    </td>

                                    <td class="d-none d-lg-table-cell">
                                        <span class="badge badge-dot mr-4">
                                            <span class="badge badge-success"> {{ $article->category->name }}</span>
                                        </span>
                                    </td>

                                    <td class="d-none d-lg-table-cell">
                                        @foreach ($article->tags as $tag)
                                            <span class="badge badge-dot mr-4">
                                                <span class="badge badge-success">{{ $tag->name }} </span>
                                            </span>
                                        @endforeach
                                    </td>

                                    <td>
                                        <img src="{{ $article->image() }}" alt="{{ $article->title }}" style="width: 100px; height: auto;">
                                    </td>

                                    <td>
                                        {{ $article->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        @can('read articles')
                                            <a href="{{ route('articles.show', $article) }}" class="btn btn-primary btn-sm"
                                                style="margin-right: 5px;">
                                                <i class="fas fa-eye"></i> Mostrar
                                            </a>
                                        @endcan
                                        @if (Auth::id() === $article->user_id)
                                            @can('update articles')
                                                <a href="{{ route('articles.edit', $article) }}" class="btn btn-info btn-sm"
                                                    style="margin-right: 5px;">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                            @endcan
                                            @can('destroy articles')
                                                <form action="{{ route('articles.destroy', $article) }}" method="POST"
                                                    style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Eliminar
                                                    </button>
                                                </form>
                                            @endcan
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $articles->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
