<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ContentIndex extends Component
{

    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.content-index', [
            'projects' => Project::paginate(6),
        ]);
    }
}
