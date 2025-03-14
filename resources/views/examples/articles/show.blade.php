@extends('layouts.panel')
@section('title', 'Article/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Articulo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('articles.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h1 class="display-4">{{ $article->title }}</h1>
                <p class="lead">by <a href="#">{{ $article->user->name }}</a></p>
                <hr>
                <p><i class="fas fa-calendar-check"></i> Publicado el {{ $article->created_at->format('d M Y') }}</p>
                <hr>
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded mb-4"
                        alt="Imagen del artículo">
                @endif

                <div id="article-content" class="lead">{{ $article->content }}</div>

                <hr>
                <div class="mb-3">
                    <i class="fas fa-tags"></i> Categoría: <span
                        class="badge badge-success">{{ $article->category->name }}</span>
                </div>
                <div class="mb-3">
                    <i class="fas fa-tag"></i> Tags:
                    @foreach($article->tags as $tag)
                        <span class="badge badge-info">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
