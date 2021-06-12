@extends('layouts.main', ['activePage'=> 'pedidos', 'titlePage' => 'Pedidos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Pedidos</h4>
                                    <p class="card-category">Pedidos registrados</p>
                                </div>
                                    <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="success">
                                            {{session('success')}}
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <a href="{{route('pedidos.create')}}" class="btn btn-sm btn-primary">Añadir pedidos</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                <th>ID DEL USUARIO</th>
                                                <th>ID DEL CURSO</th>
                                                <th>IMPORTE TOTAL</th>
                                                <th>CREATED_AT</th>
                                                <th class="text-right">ACCIONES</th>
                                                </thead>
                                                <tbody>
                                                @foreach($pedidos as $pedido)
                                                    <tr>
                                                        <td>{{$pedido->idusu}}</td>
                                                        <td>{{$pedido->idcurso}}</td>
                                                        <td>{{$pedido->importe_total}}</td>
                                                        <td>{{$pedido->created_at}}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{route('pedidos.show',$pedido->id)}}" class="btn btn-info"><i class="material-icons">store</i></a>
                                                            <a href="{{route('pedidos.edit',$pedido->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{route('pedidos.delete',$pedido->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('¿Estas seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <div class="card-footer mr-auto">
                                    {{$pedidos->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
