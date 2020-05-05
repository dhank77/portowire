<div>
    <div class="container-fluid p-0 mt-1">
        <section class="p-3 p-lg-5 align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Create Project</div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form wire:submit.prevent="store">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Title" name="name">
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" id="description" name="description" placeholder="Description" rows="5"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <div class="col-lg-12 my-3">
                                            <img src="{{ asset('img/img.png') }}" alt="priview" id="image-preview" width="200px">
                                        </div>
                                        <input type="file" class="form-control-file" id="image" name="image" onchange="previewImage()">
                                        <span class="invalid-feedback">Your file isn't image file</span>
                                    </div>
                                    <button wire:click="$emit('ProjectCreated')" type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('projects.lists') }}" class="btn btn-secondary">Back</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@push('js')
<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>
<script>
    let photoInput = document.getElementById('image');
    window.livewire.on('ProjectCreated', function() {
        let formData = new FormData();
        formData.append('image', photoInput.files[0]);
        axios.post('/upload'
            , formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(
            res => window.livewire.emit('ImageUploaded', res.data.image)
        ).catch(
            err => photoInput.classList.add('is-invalid')
        );

    });

</script>
@endpush
