<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $usuarios = UserProfile::orderBy('id', 'desc')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'  => 'required|min:3',
            'email' => 'required|email|unique:user_profiles,email',
            'area'  => 'required|min:3',
        ]);

        UserProfile::create($request->only(['nome', 'email', 'area']));

        return redirect('/usuarios')->with('success', 'Usuário cadastrado com sucesso ✅');
    }

    public function edit($id)
    {
        $usuario = UserProfile::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = UserProfile::findOrFail($id);

        $request->validate([
            'nome'  => 'required|min:3',
            'email' => 'required|email|unique:user_profiles,email,' . $usuario->id,
            'area'  => 'required|min:3',
        ]);

        $usuario->update($request->only(['nome', 'email', 'area']));

        return redirect('/usuarios')->with('success', 'Usuário atualizado com sucesso ✅');
    }

    public function destroy($id)
    {
        $usuario = UserProfile::findOrFail($id);
        $usuario->delete();

        return redirect('/usuarios')->with('success', 'Usuário excluído com sucesso ✅');
    }
}