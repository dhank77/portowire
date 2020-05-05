<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class ProjectsCreate extends Component
{

    public $name;
    public $description;
    private $image;

    protected $listeners = ['ImageUploaded'];

    public function render()
    {
        return view('livewire.projects-create');
    }

    public function ImageUploaded($file){
        $this->image = $file;
        $this->save();
    }

    public function store(){
        $this->validate([
            'name' => 'required:max:20',
            'description' => 'required'
        ]);
    }

    private function save(){
        Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
        ]);

        $this->name = '';
        $this->description = '';
        $this->image = '';
        
        session()->flash('success', 'Project was created!');
        return redirect()->to('/projects/lists');
    }
}
