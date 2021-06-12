@extends('layouts.main', ['activePage'=> 'cursos', 'titlePage' => 'Nuevo Curso'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('cursos.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Curso</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="nombre_curso" class="col-sm-2 col-form-label">NOMBRE DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre_curso" placeholder="Ingrese el nombre del curso" value="{{old('nombre_curso')}}" autofocus>
                                        @if($errors->has('nombre_curso'))
                                            <span class="error text-danger" for="input-nombre_curso">{{$errors->first('nombre_curso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="biografia_curso" class="col-sm-2 col-form-label">BIOGRAFIA</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="biografia_curso" placeholder="Ingrese informacion del curso" value="{{old('biografia_curso')}}">
                                        @if($errors->has('biografia_curso'))
                                            <span class="error text-danger" for="input-biografia_curso">{{$errors->first('biografia_curso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="precio" class="col-sm-2 col-form-label">PRECIO DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="precio" placeholder="Ingrese el precio" value="{{old('precio')}}">
                                        @if($errors->has('precio'))
                                            <span class="error text-danger" for="input-precio">{{$errors->first('precio')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="imagen" class="col-sm-2 col-form-label">IMAGEN</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="btn btn-primary" name="imagen">
                                        @if($errors->has('imagen'))
                                            <span class="error text-danger" for="input-imagen">{{$errors->first('imagen')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="idusu" class="col-sm-2 col-form-label">ID DEL USUARIO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idusu" placeholder="IDE DEL USUARIO" value="{{old('idusu')}}">
                                        @if($errors->has('idusu'))
                                            <span class="error text-danger" for="input-idusu">{{$errors->first('idusu')}}</span>
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
