@extends('layouts.main',['activePage' => 'users','titlePage' =>'Detalles de usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Usuarios</div>
                            <p class="card-category">Vista detallada del usuario {{$user->username}}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success" role="success">
                                    {{session('success')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                <a href="#" class="d-flex">
                                                    <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                    <h5 class="title mx-3">{{$user->name}}</h5>
                                                </a>
                                                <p class="description">
                                                    {{$user->tipo_usu}}<br>
                                                    {{$user->username}}<br>
                                                    {{$user->email}}<br>
                                                    {{$user->created_at}}<br>
                                                    {{$user->dni}}<br>
                                                    {{$user->direccion}}<br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis consequatur deserunt dolores eos est eum ipsa ipsam labore.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('users.index')}}" class="btn btn-sm btn-primary mr-3">Volver</a>
                                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-success mr-3">Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--AQUI TERMINA 1-->

                               {{-- <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <div class="author">
                                                <a href="#">
                                                    <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{$user->name}}</h5>
                                                </a>
                                                <p class="description">
                                                    {{$user->tipo_usu}}<br>
                                                    {{$user->username}}<br>
                                                    {{$user->email}}<br>
                                                    {{$user->created_at}}<br>
                                                    {{$user->dni}}<br>
                                                    {{$user->direccion}}<br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis consequatur deserunt dolores eos est eum ipsa ipsam labore.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('users.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <button class="btn btn-sm btn-primary">Editar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--AQUI EL OTRO-->--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
