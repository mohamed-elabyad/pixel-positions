<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }


    public function store()
    {
        $attributes = request()->validate([
            "email" => ["required", 'email'],
            "password" => ['required', Password::min(6)]
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                "email" => "Sorry, those Credentials don not match."
            ]);
        }

        request()->session()->regenerate();

        return redirect("/");
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}
