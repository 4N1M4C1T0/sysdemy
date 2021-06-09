<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoCreateRequest;
use App\Http\Requests\PedidoEditRequest;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Pedido::paginate(5);
        return view('pedidos.index',compact('pedidos'));
    }

    public function create(){
        return view('pedidos.create');
    }

    public function store(PedidoCreateRequest $request){

        $pedido = Pedido::create($request->only('importe_total', 'idusu', 'idcurso'));

        return redirect()->route('pedidos.show',$pedido->id)->with('success','Pedido creado correctamente');
    }

    public function show(Pedido $pedido){

        return view('pedidos.show', compact('pedido'));
    }

    public function edit(Pedido $pedido){
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(PedidoEditRequest $request,Pedido $pedido){

        $data = $request->only('importe_total', 'idusu', 'idcurso');

        $pedido->update($data);
        return redirect()->route('pedidos.show',$pedido->id)->with('success','Datos actualizados correctamente');
    }

    public function destroy(Pedido $pedido){
        $pedido->delete();
        return back()->with('success','Pedido eliminado correctamente');
    }
}
