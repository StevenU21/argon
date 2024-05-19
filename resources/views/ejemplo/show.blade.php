@extends('layouts.panel')
@section('title', 'Ejemplo/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i> Ver Ejemplo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('ejemplo.index') }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-arrow-left"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Ejemplo</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="table_number"><i class="fas fa-signature"></i>
                                    Numero de Mesa</label>
                                <p>A1</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="table_number"><i class="fas fa-signature"></i>
                                    Tipo de Mesa</label>
                                <p>Pareja</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="status"><i
                                        class="fas fa-toggle-on"></i>Estado</label>
                                <p>
                                    <span class="badge badge-success">Disponible</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date"><i class="fas fa-calendar-alt"></i>
                                    Capacidad</label>
                                <p>2 Personas</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date"><i class="fas fa-calendar-alt"></i>
                                    Precio</label>
                                <p>C$ 80</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date"><i class="fas fa-calendar-alt"></i>
                                    Fecha de Registro</label>
                                <p>21/05/2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
