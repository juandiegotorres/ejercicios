<?php

namespace App\Http\Controllers;

use App\Rol;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::latest()->get();
        return view('users.index', compact('usuarios'));
    }

    public function create()
    {
        $roles = Rol::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'edad' => 'required|integer|gt:0|max:120',
            'sexo' => 'required',
            'rol_id' => 'required'
        ], [], ['rol_id' => 'rol']);

        User::create($request->all());

        $request->session()->flash('status', 'Usuario con éxito');

        return redirect()->action('UserController@index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Rol::all();
        return view('users.edit', compact('roles', 'user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'edad' => 'required|integer|gt:0|max:120',
            'sexo' => 'required',
            'rol_id' => 'required'
        ], [], ['rol_id' => 'rol']);

        $user->update($request->all());

        $request->session()->flash('status', 'Usuario modificado con éxito');

        return redirect()->action('UserController@index');
    }

    public function delete(User $user)
    {
        $user->borrado = 1;
        $user->save();
        return response()->json(['success' => 'Usuario dado de baja']);
    }
}
