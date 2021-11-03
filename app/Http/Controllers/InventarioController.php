<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Sucursale;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InventarioController extends Controller
{
    public function index(Request $request, $page = 1){
        $sucursales = Sucursale::where('status', Sucursale::STATUS_ACTIVE)->get();

        $timestamp = time();
        $publicKey = env('MARVEL_PUBLIC_KEY'); //llaves para peticion
        $privateKey = env('MARVE_PRIVATE_KEY'); //llaes para peticion
        $hash = md5($timestamp . $privateKey . $publicKey);
        $offset = ($page - 1) * 16;
        $series = Http::get('https://gateway.marvel.com/v1/public/series', [
            'contains' => 'comic',
            'orderBy' => 'title',
            'limit' => '16',
            'offset' => $offset,
            'ts' => $timestamp,
            'apikey' => $publicKey,
            'hash' => $hash,
        ])->json();
        $totalPages = ceil($series['data']['total'] / 50);

        abort_if($page > $totalPages, 204);

        $series = $series['data']['results'];

        if(isset($request->sucursal_id)){
            $inventario_all = Inventario::whre('sucursal_id', $request->sucursal_id)->get();
            return back()->with('inventario_all', $inventario_all);
        }
        
        return view('inventario.index', compact('sucursales', 'series'));
    }
}
