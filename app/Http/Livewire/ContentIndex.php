<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ContentIndex extends Component
{

    use WithPagination;

    public $search;
    protected $updatesQueryString = ['search'];

    public function render()
    {
        $projects = Project::latest()->paginate(6);

        if($this->search != null){
            $projects = Project::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(6);
        }

        return view('livewire.content-index', compact('projects'));
    }
}
