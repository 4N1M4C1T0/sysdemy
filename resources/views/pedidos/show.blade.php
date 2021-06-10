@extends('layouts.main',['activePage' => 'pedidos','titlePage' =>'Detalles del pedido'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                                <a href="#" class="d-flex">
                                                    <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                </a>
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
                                </div><!--AQUI TERMINA 1-->

                               {{-- <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <div class="author">
                                                <a href="#">
                                                    <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{$pedido->name}}</h5>
                                                </a>
                                                <p class="description">
                                                    {{$pedido->tipo_usu}}<br>
                                                    {{$pedido->username}}<br>
                                                    {{$pedido->email}}<br>
                                                    {{$pedido->created_at}}<br>
                                                    {{$pedido->dni}}<br>
                                                    {{$pedido->direccion}}<br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis consequatur deserunt dolores eos est eum ipsa ipsam labore.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{route('pedidos.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
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
