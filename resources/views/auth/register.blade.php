@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2>Introduce tus Credenciales</h2>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <x-welcome.form-input-alternative name="name" type="text" placeholder="Name"
                                icon="ni ni-circle-08" required autofocus autocomplete="name" />
                            <x-welcome.form-input-alternative name="email" type="email" placeholder="Email"
                                icon="ni ni-email-83" required autocomplete="email" />
                            <x-welcome.form-input-alternative name="password" placeholder="New Password"
                                icon="ni ni-lock-circle-open" type="password" required autocomplete="new-password" />
                            <x-welcome.form-input-alternative name="password_confirmation" placeholder="Confirm Password"
                                icon="ni ni-lock-circle-open" type="password" required autocomplete="new-password" />

                            <div class="text-center">
                                <x-welcome.button type="submit" color="primary">Registrarse</x-welcome.button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <x-welcome.link href="{{ route('login') }}" color="light">
                            <small>¿Ya tienes una cuenta?</small></x-welcome.link>
                    </div>
                    <div class="col-6 text-right">
                        <x-welcome.link href="{{ route('register') }}" color="light">
                            <small>Ir al Login</small></x-welcome.link>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
