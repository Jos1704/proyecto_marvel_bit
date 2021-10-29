<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){
        //ruta de pagina de inicio
        return view('guest.welcome');
    }

    public function dashboard(){
        //ruta para pagina de inicio login
        return view('dashboard');
    }
}
