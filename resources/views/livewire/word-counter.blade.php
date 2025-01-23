<section>
    <div class="container">
        <div class="card">

            <div class="text-center card-header">
                Word Counter
            </div>
            <div class="card-body">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px" wire:model.live='description'>{{$description}}</textarea>
                    <label for="floatingTextarea2">Enter Your Text</label>
                </div>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <div class="buttons">
                        <button class="btn btn-sm btn-warning" wire:click='handleUppercase'>Uppercase</button>
                        <button class="btn btn-sm btn-info" wire:click='handleLowercase'>Lowercase</button>
                        <button class="btn btn-sm btn-secondary" wire:click='handleUcfirst'>UC first</button>
                        <button class="btn btn-sm btn-success" wire:click='handleReset'>Reset</button>
                    </div>
                    <div class="result">
                        <span class="text-danger">Words: {{$words}}</span> | <span class="text-success">Character:
                            {{$characters}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>