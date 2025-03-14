@extends('layouts.panel')
@section('title', 'Category/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver Categoria</h3>
                    </div>
                    <div class="col-4 text-right">
                        <x-link href="{{ route('categories.index') }}" variant="primary" icon="fas fa-arrow-left"
                            text="Volver" />
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la Categoria</h6>
                <div class="pl-lg-4">
                    <x-form-label for="name" icon="fas fa-heading" label="Nombre" :value="$category->name" />
                    <x-form-label for="slug" icon="fas fa-link" label="Slug" :value="$category->slug" />
                    <x-form-label for="description" icon="fas fa-heading" label="Descripción" :value="$category->description" />
                    <x-form-label for="created_at" icon="fas fa-calendar" label="Creado el" :value="$category->created_at" />
                    <x-form-label for="updated_at" icon="fas fa-calendar" label="Actualizado el" :value="$category->updated_at" />
                </div>
            </div>
        </div>
    </div>
@endsection
