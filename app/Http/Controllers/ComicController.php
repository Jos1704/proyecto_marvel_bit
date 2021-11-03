<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComicController extends Controller
{
    public function comic($id){
        //ruta para pagina de comic por separados
        $timestamp = time();
        $publicKey = env('MARVEL_PUBLIC_KEY'); //llaves para peticion
        $privateKey  = env('MARVE_PRIVATE_KEY'); //llaes para peticion
        $hash = md5($timestamp.$privateKey.$publicKey);

        $comic = Http::get('https://gateway.marvel.com/v1/public/comics/'.$id , [
            'ts' => $timestamp,
            'apikey' => $publicKey,
            'hash' => $hash,
        ])->json();
        $comic = $comic['data']['results'][0];
    //    dd($comic);
        return view('guest.comic', compact('comic'));
    }
    public function comicPersonaje(Request $request){
        //ruta para pagina de comics
        $timestamp = time();
        $publicKey = env('MARVEL_PUBLIC_KEY'); //llaves para peticion
        $privateKey  = env('MARVE_PRIVATE_KEY'); //llaes para peticion
        $hash = md5($timestamp.$privateKey.$publicKey);

        $character = Http::get($request['url'] , [
            'ts' => $timestamp,
            'apikey' => $publicKey,
            'hash' => $hash,
        ])->json();

        return response()->json($character['data']['results']);
    }
}
