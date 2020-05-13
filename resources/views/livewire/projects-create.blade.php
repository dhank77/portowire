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
                                        <input type="text" wire:model="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Title" name="name">
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror"
                                            wire:model="description" id="description" name="description"
                                            placeholder="Description" rows="5"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        @if($image)
                                            <div class="col-lg-12 my-3">
                                                <img src="{{ $image }}" alt="priview" 
                                                    width="200px">
                                            </div>
                                        @endif
                                        <input type="file" class="form-control-file" id="image" name="image"
                                            wire:change="$emit('ProjectCreated')">
                                        <span class="invalid-feedback">Your file isn't image file</span>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary">Submit</button>
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
    window.livewire.on('ProjectCreated', function () {
        let photoInput = document.getElementById('image');
        let file = photoInput.files[0];
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result);
        }
        reader.readAsDataURL(file);
    });
</script>
@endpush
