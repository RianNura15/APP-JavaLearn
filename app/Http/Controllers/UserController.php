<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function login()
    {
        return Inertia::render('Login');
    }
    
    public function registrasi()
    {
        return Inertia::render('Registrasi');
    }
}
