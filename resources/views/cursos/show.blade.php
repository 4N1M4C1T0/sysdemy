@extends('layouts.main',['activePage' => 'cursos','titlePage' =>'Detalles del curso'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Cursos</div>
                            <p class="card-category">Vista detallada del curso {{$curso->nombre_curso}}</p>
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
                                                    <h5 class="title mx-3">{{$curso->nombre_curso}}</h5>
                                                </a>
                                                <p class="description">
                                                    {{$curso->nombre_curso}}<br>
                                                    {{$curso->idusu}}<br>
                                                    {{$curso->precio}}<br>
                                                    {{$curso->created_at}}<br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                {{$curso->biografia_curso}}
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('cursos.index')}}" class="btn btn-sm btn-primary mr-3">Volver</a>
                                                <a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-sm btn-success mr-3">Editar</a>
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
                                                    <h5 class="title mt-3">{{$curso->name}}</h5>
                                                </a>
                                                <p class="description">
                                                    {{$curso->tipo_usu}}<br>
                                                    {{$curso->username}}<br>
                                                    {{$curso->email}}<br>
                                                    {{$curso->created_at}}<br>
                                                    {{$curso->dni}}<br>
                                                    {{$curso->direccion}}<br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis consequatur deserunt dolores eos est eum ipsa ipsam labore.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('cursos.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
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
