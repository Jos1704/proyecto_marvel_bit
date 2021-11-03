<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'comic');
    }

    public function index(){
        //ruta de pagina de inicio
        return view('guest.welcome');
    }

}
