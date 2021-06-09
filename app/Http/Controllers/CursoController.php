<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoCreateRequest;
use App\Http\Requests\CursoEditRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index',compact('cursos'));
    }

    public function  create(){
        return view('cursos.create');
    }

    public function store(CursoCreateRequest $request){
        $curso = Curso::create($request->only('nombre_curso', 'biografia_curso', 'precio', 'idusu','multimedia'));

        return redirect()->route('cursos.show',$curso->id)->with('success'.'Curso creado correctamente');
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(CursoEditRequest $request,Curso $curso){
        $data = $request->only('nombre_curso', 'biografia_curso', 'precio', 'idusu','multimedia');
        $curso->update($data);
        return redirect()->route('cursos.show',$curso->id)->with('success','Datos actualizados correctamente');
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return back()->with('success','Curs eliminado correctamente');
    }
}
