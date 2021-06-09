@extends('layouts.main', ['activePage'=> 'cursos', 'titlePage' => 'Editar cursos'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('cursos.update',$curso->id)}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Curso</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="nombre_curso" class="col-sm-2 col-form-label">NOMBRE DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre_curso" value="{{old('nombre_curso',$curso->nombre_curso)}}" placeholder="Ingrese el nombre del curso" autofocus>
                                        @if($errors->has('nombre_curso'))
                                            <span class="error text-danger" for="input-nombre_curso">{{$errors->first('nombre_curso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="biografia_curso" class="col-sm-2 col-form-label">INFORMACION DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="biografia_curso" value="{{old('name',$curso->biografia_curso)}}" placeholder="Ingrese la informacion del curso">
                                        @if($errors->has('biografia_curso'))
                                            <span class="error text-danger" for="input-biografia_curso">{{$errors->first('biografia_curso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="precio" class="col-sm-2 col-form-label">PRECIO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="precio" value="{{old('precio',$curso->precio)}}" placeholder="Ingrese el precio del curso">
                                        @if($errors->has('precio'))
                                            <span class="error text-danger" for="input-precio">{{$errors->first('precio')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="multimedia" class="col-sm-2 col-form-label">MULTIMEDIA</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="multimedia" value="{{old('multimedia',$curso->multimedia)}}" placeholder="IMAGEN DEL CURSO">
                                        @if($errors->has('multimedia'))
                                            <span class="error text-danger" for="input-multimedia">{{$errors->first('multimedia')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="idusu" class="col-sm-2 col-form-label">ID DEL USUARIO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idusu" value="{{old('idusu',$curso->idusu)}}" placeholder="ID del usuario" disabled>

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
