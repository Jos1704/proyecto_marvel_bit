<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sucursale;
use App\Models\Inventario;
use Illuminate\Support\Facades\Http;

class InventarioLiveWire extends Component
{
    public $sucursal_id = 1;
    public function render($page = 1)
    {
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

        $inventario_all = Inventario::where('sucursal_id', $this->sucursal_id)->get();
        if($this->sucursal_id != 0){
            foreach ($inventario_all as $comic) {
                $arrat_comic[$comic->comic_id] = $comic->name_comic;
            }
            foreach ($series as $key => $value) {
                if(empty($arrat_comic[$value['id']])){
                    unset($series[$key]);
                }
            }
        }
        return view('livewire.inventario-live-wire', compact('series', 'sucursales'));
    }
}
