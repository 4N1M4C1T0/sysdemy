@extends('layouts.main', ['activePage'=> 'pedidos', 'titlePage' => 'Editar pedido'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('pedidos.update',$pedido->id)}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Pedido</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="idusu" class="col-sm-2 col-form-label">ID DEL USUARIO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idusu" value="{{$pedido->idusu}}" placeholder="ID DE USUARIO" autofocus>
                                        @if($errors->has('idusu'))
                                            <span class="error text-danger" for="input-idusu">{{$errors->first('idusu')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="idcurso" class="col-sm-2 col-form-label">ID DEL CURSO</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="idcurso" value="{{$pedido->idcurso}}" placeholder="ID DE CURSO">
                                        @if($errors->has('idcurso'))
                                            <span class="error text-danger" for="input-idcurso">{{$errors->first('idcurso')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="importe_total" class="col-sm-2 col-form-label">IMPORTE TOTAL</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="importe_total" value="{{$pedido->importe_total}}" placeholder="IMPORTE TOTAL">
                                        @if($errors->has('importe_total'))
                                            <span class="error text-danger" for="input-importe_total">{{$errors->first('importe_total')}}</span>
                                        @endif
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
