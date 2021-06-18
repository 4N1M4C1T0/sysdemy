@extends('layouts.main', ['activePage'=> 'users', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">

                            @if(Auth::user()->tipo_usu == "administrador" )
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Usuarios</h4>
                                        <p class="card-category">Usuarios registrados</p>
                                    </div>
                                    <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="success">
                                                {{session('success')}}
                                            </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <a href="{{route('users.create')}}" class="btn btn-sm btn-primary">Añadir usuario</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                <th>ID</th>
                                                <th>TIPO DE USUARIO</th>
                                                <th>DNI</th>
                                                <th>NOMBRE</th>
                                                <th>DIRECCION</th>
                                                <th>USERNAME</th>
                                                <th>E-MAIL</th>
                                                <th>CREATED_AT</th>
                                                <th class="text-right">ACCIONES</th>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$user->id}}</td>
                                                        <td>{{$user->tipo_usu}}</td>
                                                        <td>{{$user->dni}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->direccion}}</td>
                                                        <td>{{$user->username}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->created_at}}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{route('users.show',$user->id)}}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{route('users.delete',$user->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('¿Estas seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer mr-auto">
                                        {{$users->links()}}
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->tipo_usu == "profesor" )
                                <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title">Usuario</h4>
                                            <p class="card-category">Tu usuario</p>
                                        </div>
                                        <div class="card-body">
                                            @if(session('success'))
                                                <div class="alert alert-success" role="success">
                                                    {{session('success')}}
                                                </div>
                                            @endif

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="text-primary">
                                                    <th>ID</th>
                                                    <th>TIPO DE USUARIO</th>
                                                    <th>DNI</th>
                                                    <th>NOMBRE</th>
                                                    <th>DIRECCION</th>
                                                    <th>USERNAME</th>
                                                    <th>E-MAIL</th>
                                                    <th>CREATED_AT</th>
                                                    <th class="text-right">ACCIONES</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->tipo_usu}}</td>
                                                            <td>{{$user->dni}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->direccion}}</td>
                                                            <td>{{$user->username}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>{{$user->created_at}}</td>
                                                            <td class="td-actions text-right">
                                                                <a href="{{route('users.show',$user->id)}}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer mr-auto">
                                            {{$users->links()}}
                                        </div>
                                    </div>
                            @endif

                            @if(Auth::user()->tipo_usu == "alumno" )
                                <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title">Usuarios</h4>
                                            <p class="card-category">Tu usuario</p>
                                        </div>
                                        <div class="card-body">
                                            @if(session('success'))
                                                <div class="alert alert-success" role="success">
                                                    {{session('success')}}
                                                </div>
                                            @endif
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="text-primary">
                                                    <th>ID</th>
                                                    <th>TIPO DE USUARIO</th>
                                                    <th>DNI</th>
                                                    <th>NOMBRE</th>
                                                    <th>DIRECCION</th>
                                                    <th>USERNAME</th>
                                                    <th>E-MAIL</th>
                                                    <th>CREATED_AT</th>
                                                    <th class="text-right">ACCIONES</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->tipo_usu}}</td>
                                                            <td>{{$user->dni}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->direccion}}</td>
                                                            <td>{{$user->username}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>{{$user->created_at}}</td>
                                                            <td class="td-actions text-right">
                                                                <a href="{{route('users.show',$user->id)}}" class="btn btn-info"><i class="material-icons">person</i></a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer mr-auto">
                                            {{$users->links()}}
                                        </div>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
