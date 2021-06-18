@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('MENU')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <div class="card-title">Cursos</div>
                                <p class="card-category">CURSOS DISPONIBLES</p>
                            </div>
                            <!--body-->
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{session('success')}}
                                    </div>
                                @endif
                                @foreach($cursos as $curso)
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                <div class="author">
                                                    <a href="#" class="d-flex">
                                                        <img src="{{asset('images/'.$curso->imagen)}}" alt="image" width="300px" height="170px">
                                                    </a>


                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--AQUI TERMINA LA FOTO-->

                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                <div class="author">
                                                    <p class="description">
                                                    <h5 class="title">{{$curso->nombre_curso}}</h5>
                                                        {{$curso->precio}}<br>
                                                        {{$curso->created_at}}<br>
                                                    </p>
                                                </div>
                                                </p>
                                                <div class="card-description">
                                                    {{$curso->biografia_curso}}
                                                </div>
                                                <div class="card-footer">
                                                    <div class="button-container">
                                                        <a href="{{route('pedidos.create',$curso->id)}}" class="btn btn-sm btn-success">COMPRAR</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                    <div class="card-footer mr-auto">
                                        {{$cursos->links()}}
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

