<?php

namespace App\Http\Livewire;

use App\Description;
use Livewire\Component;

class ContentDescription extends Component
{

    protected $listeners = [
        'descriptionUpdated' => '$refresh',
    ];

    public function render()
    {
        $data = Description::get()->first();
        return view('livewire.content-description', compact('data'));
    }

    public function handle(){
        
    }
}
