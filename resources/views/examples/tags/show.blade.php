@extends('layouts.panel')
@section('title', 'Tag/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i> Ver Etiqueta</h3>
                    </div>
                    <div class="col-4 text-right">
                        <x-link :href="route('tags.index')" variant="primary" icon="fas fa-arrow-left" text="Volver" />
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="heading-small text-muted mb-4">Datos de la Etiqueta</h6>
                        <div class="pl-lg-4">
                            <x-form-label name="name" for="name" icon="fas fa-graduation-cap" label="Nombre" :value="$tag->name" />
                            <x-form-label name="slug" for="slug" icon="fas fa-link" label="Slug" :value="$tag->slug" />
                            <x-form-label name="created_at" for="created_at" icon="fas fa-calendar" label="Creado el" :value="$tag->created_at" />
                            <x-form-label name="updated_at" for="updated_at" icon="fas fa-calendar" label="Actualizado el" :value="$tag->updated_at" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
