@extends('layouts.panel')
@section('title', 'Client')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Clientes</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createClientModal">
                            <i class="fas fa-plus"></i> Nuevo Cliente
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="createClientModal" tabindex="-1" role="dialog"
                    aria-labelledby="createClientModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="createClientModalLabel">Nuevo Cliente</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @include('examples.clients.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-heading"></i> Nombres</th>
                                <th scope="col"><i class="fas fa-list-ol"></i> Apellidos</th>
                                <th scope="col"><i class="fas fa-envelope"></i> Correo</th>
                                <th scope="col"><i class="fas fa-phone"></i> Teléfono</th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i> Género</th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i> Imágen</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $client->id }} </span>
                                    </td>
                                    <td>
                                        {{ $client->name }}
                                    </td>

                                    <td>
                                        {{ $client->last_name }}
                                    </td>

                                    <td>
                                        {{ $client->email }}
                                    </td>

                                    <td>
                                        {{ $client->phone }}
                                    </td>

                                    <td>
                                        {{ $client->gender }}
                                    </td>

                                    <td class="align-middle">
                                        <div class="d-flex align-items-center justify-content-center bg-light rounded"
                                            style="width: 100px; height: 100px; overflow: hidden;">
                                            <img src="{{ $client->image() }}" alt="{{ $client->name }}" class="img-fluid">
                                        </div>
                                    </td>

                                    <td>
                                        {{ $client->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('clients.show', $client) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $clients->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
