<div>
    <x-flash-message />
    <form wire:submit='save'>
        <div class="mb-3">
            <label for="" class="visually-hidden">Body</label>
            <textarea placeholder="Whats on your mind ?" wire:model='form.body' class="form-control"></textarea>
            @error('form.body')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
