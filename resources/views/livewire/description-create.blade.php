<div>
    <div class="container-fluid p-0">
        <section class="p-3 p-lg-5 align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Create Description</div>

                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form wire:submit.prevent="store">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Anda</label>
                                        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama dan gelar dipisahkan dengan koma (,)" name="name">
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact</label>
                                        <input type="text" wire:model="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" placeholder="Contact pisahkan dengan spasi" name="contact">
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea wire:model="address" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address" rows="2"></textarea>
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="social">Social</label>
                                        <textarea wire:model="social" class="form-control @error('social') is-invalid @enderror" id="social" name="social" placeholder="Social pisahkan dengan tanda ~" rows="2"></textarea>
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description" rows="5"></textarea>
                                        @error('name')
                                        <span class="invalid-feedback"></span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
