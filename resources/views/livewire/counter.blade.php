<section>
    <div class="container">
        <div class="card">

            <div class="text-center card-header">
                Counter
            </div>
            <div class="text-center card-body">
                <h5 class="card-title fs-1">{{$counter}}</h5>

                <div class="mt-5 d-flex justify-content-center align-items-center">
                    <div class="input-group" style="max-width: 400px;">
                        <input type="number" class="form-control" placeholder="Enter step" wire:model='num'>
                        <button class="btn btn-success" type="button" wire:click='handleIncrement'>Increment</button>
                        <button class="btn btn-danger" type="button" wire:click='handleDecrement'>Decrement</button>
                        <button class="btn btn-primary" type="button" wire:click='handleReset'>Reset</button>
                    </div>

                </div>
                @if ($errorMsg)
                <div class="mt-2">
                    <p class="text-danger">
                        {{$errorMsg}}
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>