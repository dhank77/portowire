<?php

namespace App\Http\Livewire;

use App\Description;
use Livewire\Component;

class ContentDescription extends Component
{
    public function render()
    {
        $data = Description::get()->first();
        return view('livewire.content-description', compact('data'));
    }
}
