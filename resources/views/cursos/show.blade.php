@extends('layouts.main',['activePage' => 'cursos','titlePage' =>'Detalles del curso'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Auth::user()->tipo_usu == "administrador" )
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
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                <a href="#" class="d-flex">
                                                    <img src="{{asset('images/'.$curso->imagen)}}" alt="image" width="300px" height="200px">
                                                </a>
                                            </div>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <div class="author">
                                                <a href="#" class="d-flex">
                                                    <h5 class="title mx-3">{{$curso->nombre_curso}}</h5>
                                                </a>
                                                <p class="description">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if(Auth::user()->tipo_usu == "profesor" )
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
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    <div class="author">
                                                        <a href="#" class="d-flex">
                                                            <img src="{{asset('images/'.$curso->imagen)}}" alt="image" width="300px" height="200px">
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    <div class="author">
                                                        <a href="#" class="d-flex">
                                                            <h5 class="title mx-3">{{$curso->nombre_curso}}</h5>
                                                        </a>
                                                        <p class="description">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif

                    @if(Auth::user()->tipo_usu == "alumno" )
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
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    <div class="author">
                                                        <a href="#" class="d-flex">
                                                            <img src="{{asset('images/'.$curso->imagen)}}" alt="image" width="300px" height="200px">
                                                        </a>
                                                    </div>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    <div class="author">
                                                        <a href="#" class="d-flex">
                                                            <h5 class="title mx-3">{{$curso->nombre_curso}}</h5>
                                                        </a>
                                                        <p class="description">
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
                                                        <a href="{{route('pedidos.create',$curso->id)}}" class="btn btn-link"><i class="material-icons">shopping_cart</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
