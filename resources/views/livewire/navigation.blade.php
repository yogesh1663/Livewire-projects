<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="/">Livewire</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{route('counter')}}">Counter</a>
                    <a class="nav-link" href="{{route('word-counter')}}">Word-Counter</a>
                    <a class="nav-link" href="{{route('todo')}}">Todo</a>
                </div>
            </div>
        </div>
    </nav>
</div>