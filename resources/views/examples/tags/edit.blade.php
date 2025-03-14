@extends('layouts.panel')
@section('title', 'Tag/Update')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-plus-circle"></i> Actualizar Etiqueta</h3>
                    </div>
                    <div class="col-4 text-right">
                        <x-link :href="route('tags.index')" variant="primary" icon="fas fa-arrow-left" text="Volver"/>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <form action="{{ route('tags.update', $tag) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('examples.tags.form')
                </form>
            </div>
        </div>
    </div>
@endsection
