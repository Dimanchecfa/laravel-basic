<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginPage() {
        return view('pages.auth.login');
    }



    public function registerPage() {
        return view('pages.auth.register');
    }

    public function login(Request $request) {
        // récupérer les données du formulaire
        // vérifier les données
        // si les données sont correctes, on redirige vers la page d'accueil
        // si les données sont incorrectes, on redirige vers la page de connexion avec un message d'erreur
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);
        $authUser = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if($authUser) {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('loginPage')->with('error', 'Email ou mot de passe incorrect');
        }
    }


    public function logout() {
        auth()->logout();
        return redirect()->route('loginPage');
    }


    public function register(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:255'
        ]);
        $input = $request->all();
        $email = $input['email'];
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input); // insere l'utilisateur dans la base de données
        Mail::to($email)->send(new RegisterMail($user)); // envoie de l'email
        auth()->login($user);
        return redirect()->route('products.index');
    }
}
