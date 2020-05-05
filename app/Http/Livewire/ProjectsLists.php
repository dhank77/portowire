<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsLists extends Component
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

        return view('livewire.projects-lists', compact('projects'));
    }

    public function delete($id){
        
        $project = Project::find($id);
        $project->delete();
        session()->flash('success', 'Project deleted!');

    }

}
