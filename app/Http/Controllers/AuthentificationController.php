<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\utilisateur;


class AuthentificationController extends Controller
{
    public function RegisterForm()
    {
      
        return view('register');
    }
    public function register(Request $request)
    {

        $validated = $request->validate([
                "Nom" => "required",
                 "Prénom" => "required",
                 "Email" => "required|email|unique:utilisateur",
                 "Password" => "required",
                 "confirmPassword" => "required|same:Password"

        ]);

        
        utilisateur::create(
            [
                "Password" => $validated['Password'],
                "Nom" => $validated['Nom'],
                "Prénom" => $validated['Prénom'],
                "Email" => $validated['Email'],
                "Role" => "client",
                "Status" => "Active",

            ]
            );

            return redirect('/login');

        // $validated = $request->validate([
        //     "name" => "required|string|max:255",
        //     "prenom" => "required|string|max:255",
        //     "email" => "required|email",
        //     "password" => "required",
        // ]);

        

            
    }
}
