 <div>
     <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="projects">
         <div class="w-100">
             <h2 class="mb-5">Projects</h2>
             
             <div class="my-3">
                <input type="text" class="form-control" wire:model="search" placeholder="Cari...">
             </div>
             
             <div class="row">
                 @foreach($projects as $project)
                 <div class="col-lg-4 mt-4">
                     <div class="card" style="width: 18rem;">
                         {{-- <img class="card-img-top" src="{{ asset($blog->image) }}" height="150px"> --}}
                         <div class="card-body" style="height:200px">
                             <h5 class="card-title">{{ $project->name }}</h5>
                             <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 50, '...') }}</p>
                             <a href="#" class="btn btn-primary">Detail</a>
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
