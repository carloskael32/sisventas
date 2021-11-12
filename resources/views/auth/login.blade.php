@extends('layouts.app')
@section ('title','Login')
@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
            <br>
            <br>

            <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">
                    <h2> <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesion </h2>
                </div>
                <div class="card-body text">

                    <form method="POST" action="{{ url('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" required autocomplete="name" autofocus>

                            <label for="floatingInput"><i class="bi bi-person-circle"></i> Nombre de Usuario</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required autocomplete="name" autofocus>
                            <label for="floatingInput"><i class="bi bi-key-fill "></i> Contraseña</label>
                        </div>

                        <div class="md-4 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ingresar') }}
                            </button>
                        </div>

                    </form>

                </div>
                <div class="card-footer text-muted">
                    Derechos reservados 2021
                </div>
            </div>



            <!--  <div class="card">
                <div class="card-header">{{ __('VENTAS') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesion') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div> -->


        </div>
    </div>
</div>
@endsection