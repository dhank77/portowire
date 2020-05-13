<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class ProjectsCreate extends Component
{

    public $name;
    public $description;
    public $image;

    protected $listeners = ['fileUpload'];

    public function render()
    {
        return view('livewire.projects-create');
    }

    public function store(){
        
        $this->validate([
            'name' => 'required:max:20',
            'description' => 'required',
        ]);

        $this->image = $this->saveImage();
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

    private function saveImage(){
        if(!$this->image){
            return null;
        }

        $image = ImageManagerStatic::make($this->image)->encode('jpg');
        $name = "uploads/" . Str::random() . ".jpg";
        Storage::disk('public')->put($name, $image);

        return $name;
    }

}
