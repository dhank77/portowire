<?php

namespace App\Http\Livewire;

use App\Description;
use Livewire\Component;

class DescriptionCreate extends Component
{

    public $name;
    public $description;
    public $social;
    public $address;
    public $contact;

    public function mount(){
        $desc = Description::find(1);
        $this->name = $desc->name;
        $this->description = $desc->description;
        $this->social = $desc->social;
        $this->address = $desc->address;
        $this->contact = $desc->contact;
    }

    public function render()
    {
        return view('livewire.description-create');
    }

    public function store(){

        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'social' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $desc = Description::where('id', 1)
        ->update([
            'name' => $this->name,
            'description' => $this->description,
            'social' => $this->social,
            'address' => $this->address,
            'contact' => $this->contact,
        ]);
        $this->emit('descriptionUpdated');
        session()->flash('success', 'Data berhasil diupdate');
    }
}
