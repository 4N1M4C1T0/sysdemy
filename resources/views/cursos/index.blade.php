@extends('layouts.main', ['activePage'=> 'cursos', 'titlePage' => 'Cursos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Cursos</h4>
                                    <p class="card-category">Cursos registrados</p>
                                </div>
                                    <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success" role="success">
                                            {{session('success')}}
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <a href="{{route('cursos.create')}}" class="btn btn-sm btn-primary">Añadir curso</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                <th>ID</th>
                                                <th>NOMBRE DEL CURSO</th>
                                                <th>PRECIO</th>
                                                <th>CREATED_AT</th>
                                                <th class="text-right">ACCIONES</th>
                                                </thead>
                                                <tbody>
                                                @foreach($cursos as $curso)
                                                    <tr>
                                                        <td>{{$curso->id}}</td>
                                                        <td>{{$curso->nombre_curso}}</td>
                                                        <td>{{$curso->precio}}</td>
                                                        <td>{{$curso->created_at}}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-info"><i class="material-icons">book</i></a>
                                                            <a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{route('cursos.delete',$curso->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('¿Estas seguro?')">
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
                                    {{$cursos->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
