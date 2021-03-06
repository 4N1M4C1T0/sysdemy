<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        return view('users.index',compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(UserCreateRequest $request){
        //$request->validate([
        //    'name' => 'required|min:3|max:100',
        //    'username'=> 'required|min:3|max:100|unique:users',
        //    'tipo_usu'=> 'required',
        //    'dni'=> 'required|min:8|max:8',
        //    'email'=> 'required|email|unique:users',
        //    'direccion'=> 'required|min:3|max:150',
        //    'password'=> 'required',
        //]);
        $user= User::create($request->only('name','username','tipo_usu','dni','email','direccion')
        +[
            'password' => bcrypt($request->input('password'))
            ]);
        return redirect()->route('users.show',$user->id)->with('success','Usuario creado correctamente');
    }

    public function show(User $user){
        //$user = User::findOrFail($id);
        //dd($user);
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(UserEditRequest $request,User $user){
        //$user=User::findOrFail($id);
        $data = $request->only('name','username','tipo_usu','dni','email','direccion');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        //if (trim($request->password)==''){
        //   $data=$request->except('password');
        //}
        //else{
        //   $data=$request->all();
        //    $data['password']=bcrypt($request->password);
        //}
        $user->update($data);
        return redirect()->route('users.show',$user->id)->with('success','Datos actualizados correctamente');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success','Usuario eliminado correctamente');
    }
}
