<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="login">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="" wire:model='formLogin.email' id="" aria-describedby="emailHelpId"
                        placeholder="Masukkan Email..." />
                    @error('formLogin.email')
                        <small id="emailHelpId" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model='formLogin.password' name="" id="" aria-describedby="passwordHelpId"
                        placeholder="Masukkan Password.." />
                    @error('formLogin.password')
                        <small id="passwordHelpId" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
