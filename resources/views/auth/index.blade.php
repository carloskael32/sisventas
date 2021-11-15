@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Administradores</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <a href="{{ route('register.store') }}" class="btn btn-success btn-sm">Nuevo Registro</a>


                    <hr>
                    <table class=" table table-light">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach( $users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <!-- <a href="{{ url('/user/'.$user->id.'/edit') }}" class="btn btn-info btn-sm"> Editar </a> -->
                                    <!-- {{ url('/user/'.$user->id.'/edit') }}-->
                                    &nbsp;
                                    <form action="{{ url('/register/'.$user->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                @include('auth.register')
            </form>
        </div>
    </div>
</div>

<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reportModal"> Open Modal</button>
Modal 
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
-->

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop