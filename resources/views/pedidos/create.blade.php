@extends('layouts.main', ['activePage'=> 'users', 'titlePage' => 'Nuevo usuario'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                {{--@if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif--}}
                                <div class="row">
                                    <label for="tipo_usu" class="col-sm-2 col-form-label">Tipo de usuario</label>
                                    <div class="col-sm-7">
                                        <select id="tipo_usu" class="form-control" name="tipo_usu">
                                            <option value="" selected="selected">- SELECCIONE -</option>
                                            <option value="profesor">PROFESOR</option>
                                            <option value="alumno">ALUMNO</option>
                                        </select>
                                        @if($errors->has('tipo_usu'))
                                            <span class="error text-danger" for="input-tipo_usu">{{$errors->first('tipo_usu')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="dni" class="col-sm-2 col-form-label">DNI</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="dni" placeholder="Ingrese su dni" value="{{old('dni')}}" autofocus>
                                        @if($errors->has('dni'))
                                            <span class="error text-danger" for="input-dni">{{$errors->first('dni')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}">
                                        @if($errors->has('name'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion" value="{{old('direccion')}}">
                                        @if($errors->has('direccion'))
                                            <span class="error text-danger" for="input-direccion">{{$errors->first('direccion')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="username" placeholder="Ingrese su username" value="{{old('username')}}">
                                        @if($errors->has('username'))
                                            <span class="error text-danger" for="input-username">{{$errors->first('username')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" placeholder="Ingrese su e-mail" value="{{old('email')}}">
                                        @if($errors->has('email'))
                                            <span class="error text-danger" for="input-email">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="Ingrese su password">
                                        @if($errors->has('password'))
                                            <span class="error text-danger" for="input-password">{{$errors->first('password')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
