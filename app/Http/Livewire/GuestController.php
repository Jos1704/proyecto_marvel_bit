<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuestController extends Component
{
    public function render()
    {
        return view('livewire.guest-controller')->layout('layouts.guest');
    }
}
