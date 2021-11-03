<?php

namespace App\Http\Controllers;

use App\Models\Sucursale;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $sucursales = Sucursale::where('status', Sucursale::STATUS_ACTIVE)->get();
        
        return view('sucursales.index', compact('sucursales'));
    }

    public function show()
    {
        $sucursales = Sucursale::all();
        return view('sucursales.show', compact('sucursales'));
    }

    public function create()
    {
        return view('sucursales.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'no_number' => 'required|min:1|max:4',
            'location' => 'required|min:3',
            'hours' => 'required|min:1',
            'status' => 'required',
            'phone' => 'required|min:2|max:9'
        ]);
        $request->hours = implode(',', $request->hours);
        Sucursale::create([
            'namme' => $request->name,
            'no_number' => $request->no_number,
            'location' => $request->location,
            'hours' => $request->hours,
            'status' => $request->status,
            'phone' => $request->phone,
            'img' => $request->img,
        ]);
    }
}
