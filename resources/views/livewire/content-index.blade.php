 <div>
     <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="projects">
         <div class="w-100">
             <h2>Projects</h2>

             <div class="my-2">
                 <input type="text" class="form-control" wire:model="search" placeholder="Cari...">
             </div>

             <div class="row">
                 @foreach($projects as $project)
                 <div class="col-lg-4 mt-4">
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{ asset($project->image) }}" height="150px">
                         <div class="card-body" style="height:150px">
                             <h5 class="card-title">{{ $project->name }}</h5>
                             <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 75, '...') }}</p>
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>

             <div class="mt-3">
                 {{ $projects->links() }}
             </div>
         </div>
     </section>
 </div>
