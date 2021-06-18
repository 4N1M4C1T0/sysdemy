<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoCreateRequest;
use App\Http\Requests\CursoEditRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate(5);
        return view('cursos.index',compact('cursos'));
    }

    public function segundoindex(){
        $cursos = Curso::paginate(2);
        return view('home', compact('cursos'));
    }

    public function  create(){
        return view('cursos.create');
    }

    public function store(CursoCreateRequest $request){

        $curso = new Curso();
        $curso->nombre_curso=$request->nombre_curso;
        $curso->biografia_curso=$request->biografia_curso;
        $curso->precio=$request->precio;
        $curso->idusu=$request->idusu;
        $imageName = time().'.'.$request->imagen->extension();
        $request->imagen->move(public_path('images'),$imageName);
        $curso->imagen = $imageName;
        $curso->save();

        //$curso = Curso::create($request->only('nombre_curso', 'biografia_curso','imagen', 'precio', 'idusu'));

        return redirect()->route('cursos.show',$curso->id)->with('success'.'Curso creado correctamente');
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(CursoEditRequest $request,Curso $curso){

        $curso->nombre_curso = $request->nombre_curso;
        $curso->biografia_curso = $request->biografia_curso;
        $curso->precio = $request->precio;

        $imageName = time().'.'.$request->imagen->extension();
        $request->imagen->move(public_path('images'),$imageName);
        $curso->imagen =$imageName;
        //$data = $request->only('nombre_curso', 'biografia_curso', 'precio', 'idusu','multimedia');
        $curso->save();
        return redirect()->route('cursos.show',$curso->id)->with('success','Datos actualizados correctamente');
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return back()->with('success','Curso eliminado correctamente');
    }
}
