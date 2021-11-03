<?php

namespace App\Http\Livewire;

use App\Models\Serie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GuestController extends Component
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function render($page = 1)
    {
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

        return view('livewire.guest-controller', compact('series'))->layout('layouts.guest');
    }
}
