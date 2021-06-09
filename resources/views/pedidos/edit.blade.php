@extends('layouts.main', ['activePage'=> 'users', 'titlePage' => 'Editar usuario'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.update',$user->id)}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="tipo_usu" class="col-sm-2 col-form-label">Tipo de usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo_usu" value="{{$user->tipo_usu}}" placeholder="Tipo de usuario" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="dni" class="col-sm-2 col-form-label">DNI</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="dni" value="{{old('dni',$user->dni)}}" placeholder="Ingrese su dni" autofocus>
                                        @if($errors->has('dni'))
                                            <span class="error text-danger" for="input-dni">{{$errors->first('dni')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}" placeholder="Ingrese su nombre">
                                        @if($errors->has('name'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="direccion" value="{{old('direccion',$user->direccion)}}" placeholder="Ingrese su direccion">
                                        @if($errors->has('direccion'))
                                            <span class="error text-danger" for="input-direccion">{{$errors->first('direccion')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="username" value="{{old('username',$user->username)}}" placeholder="Ingrese su username">
                                        @if($errors->has('username'))
                                            <span class="error text-danger" for="input-username">{{$errors->first('username')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" value="{{old('email',$user->email)}}" placeholder="Ingrese su e-mail">
                                        @if($errors->has('email'))
                                            <span class="error text-danger" for="input-email">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="Ingrese una nueva contraseña si desea">
                                        @if($errors->has('password'))
                                            <span class="error text-danger" for="input-password">{{$errors->first('password')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                            <!--End footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
