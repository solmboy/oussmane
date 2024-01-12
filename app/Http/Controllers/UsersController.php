<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function index() 
    {
    	$users = User::all();
    	return view('users.index', compact('users'));
    }

    public function show(User $user) {
    	return view('users.show', compact('user'));
    }

    public function edit(User $user) {
        $this->isAbleToEdit($user);
    	return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $this->isAbleToEdit($user);
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'email' => 'required|email',
        ]);

        $user->update($validatedData);

        return redirect()->back()->with('success', 'Les informations ont bien été modifiées');
    }

    public function destroy(User $user) {
    	$user->delete();
    	return redirect()->back()->with('success', 'L\'utilisateur a bien été supprimé');
    }

    private function isAbleToEdit(User $user) {
        if($user->id == request()->user()->id and !request()->user()->admin) {
            abort(403);
        }
    }
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Créez l'utilisateur
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirigez l'utilisateur après l'ajout
        return redirect()->route('users');
    }
}
