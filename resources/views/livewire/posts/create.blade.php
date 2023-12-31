<div>
   <x-flash-message/>
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">New Post</h5>
                <form action="" wire:submit='save'>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" wire:model="form.title" class="form-control" name="" id=""
                            placeholder="" />
                        @error('form.title')
                            <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Body</label>
                        <textarea wire:model='form.body' class="form-control" name="" id="" rows="3"></textarea>
                        @error('form.body')
                            <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
