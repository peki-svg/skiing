<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistracijaController extends Controller
{
    public function store(Request $request)
    {
        // Validacija
        $request->validate([
            'name' => 'required|string|max:255',
            /*'surname' => 'required|string|max:255',*/
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Spremanje u bazu
        User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('welcome')->with('success', 'Uspješna registracija!');
    }
}
