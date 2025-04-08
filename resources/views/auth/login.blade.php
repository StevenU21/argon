@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Iniciar con</small></div>
                        <div class="btn-wrapper text-center">
                            <x-welcome.social-link url="#" name="Github" icon="img/icons/common/github.svg" />
                            <x-welcome.social-link url="#" name="Google" icon="img/icons/common/google.svg" />
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2>Introduce tus Credenciales</h2>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <x-welcome.form-input-alternative name="email" type="email" placeholder="Email"
                                icon="ni ni-email-83" required autocomplete="email" autofocus />
                            <x-welcome.form-input-alternative name="password" type="password" placeholder="Password"
                                icon="ni ni-lock-circle-open" required autocomplete="current-password" />
                            <x-welcome.check-box name="remember" id="remember_me" label="Recordar" />
                            <div class="text-center">
                                <x-welcome.button type="submit" variant="primary">Iniciar Sesión</x-welcome.button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <x-welcome.link href="{{ route('password.request') }}" color="light"><small>¿Olvidaste tu
                                Contraseña?</small>
                        </x-welcome.link>
                    </div>
                    <div class="col-6 text-right">
                        <x-welcome.link href="{{ route('register') }}" color="light">
                            <small>Crear una Cuenta</small>
                        </x-welcome.link>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
