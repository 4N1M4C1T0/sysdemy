@extends('layouts.main', ['activePage'=> 'pedidos', 'titlePage' => 'Nuevo pedido'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('pedidos.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Pedido</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="idusu" class="col-sm-2 col-form-label">ID DEL USUARIO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idusu" placeholder="IDE DEL USUARIO" value="{{old('idusu')}}" autofocus>
                                        @if($errors->has('idusu'))
                                            <span class="error text-danger" for="input-idusu">{{$errors->first('idusu')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="idcurso" class="col-sm-2 col-form-label">ID DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idcurso" placeholder="IDE DEL CURSO" value="{{old('idcurso')}}">
                                        @if($errors->has('idcurso'))
                                            <span class="error text-danger" for="input-idcurso">{{$errors->first('idcurso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="importe_total" class="col-sm-2 col-form-label">IMPORTE TOTAL</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="importe_total" placeholder="PRECIO TOTAL" value="{{old('importe_total')}}">
                                        @if($errors->has('importe_total'))
                                            <span class="error text-danger" for="input-importe_total">{{$errors->first('importe_total')}}</span>
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
