@extends('layouts.main',['activePage' => 'pedidos','titlePage' =>'Detalles del pedido'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Auth::user()->tipo_usu == "administrador" )
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Pedidos</div>
                            <p class="card-category">Vista detallada del pedido {{$pedido->username}}</p>
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

                                                <p class="description">
                                                    {{$pedido->idusu}}<br>
                                                    {{$pedido->idcurso}}<br>
                                                    {{$pedido->importe_total}}<br>
                                                    {{$pedido->created_at}}<br>
                                                </p>
                                            </div>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('pedidos.index')}}" class="btn btn-sm btn-primary mr-3">Volver</a>
                                                <a href="{{route('pedidos.edit',$pedido->id)}}" class="btn btn-sm btn-success mr-3">Editar</a>
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
                                    <div class="card-title">Pedidos</div>
                                    <p class="card-category">Vista detallada del pedido {{$pedido->username}}</p>
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

                                                        <p class="description">
                                                            {{$pedido->idusu}}<br>
                                                            {{$pedido->idcurso}}<br>
                                                            {{$pedido->importe_total}}<br>
                                                            {{$pedido->created_at}}<br>
                                                        </p>
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="button-container">
                                                        <a href="{{route('pedidos.index')}}" class="btn btn-sm btn-primary mr-3">Volver</a>
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
                                    <div class="card-title">Pedidos</div>
                                    <p class="card-category">Vista detallada del pedido {{$pedido->username}}</p>
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

                                                        <p class="description">
                                                            {{$pedido->idusu}}<br>
                                                            {{$pedido->idcurso}}<br>
                                                            {{$pedido->importe_total}}<br>
                                                            {{$pedido->created_at}}<br>
                                                        </p>
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="button-container">
                                                        <a href="{{route('pedidos.index')}}" class="btn btn-sm btn-primary mr-3">Volver</a>
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
