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
                                                    <img src="{{asset('images/'.$curso->imagen)}}" alt="image" class="avatar">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
