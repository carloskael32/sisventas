@extends('adminlte::page')

<br>
<div class="container-fluid">



    <div class="row justify-content-center">



        <div class="col-md-6">



            <div class="card">
                <div class="card-header">
                    
                    <h2 class="text-center">Administradores</h2>
                </div>
                <div class="card-body">

                    @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

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
                                    <a href="{{ url('/user/'.$user->id.'/edit') }}" class="btn btn-warning"> Editar </a>


                                    <!-- {{ url('/user/'.$user->id.'/edit') }}-->
                                    &nbsp;

                                    <form action="{{ url('/user/'.$user->id) }}" class="d-inline" method="POST">
                                        @csrf

                                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
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


    </div>


</div>
@endsection