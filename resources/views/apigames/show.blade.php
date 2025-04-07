    <x-layout>
        <div class="container mt-5" id="game-details">
            <!-- Game Title and Basic Info -->
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="display-4 agdasima-bold color-grey-secondary text-center">{{ $game['title'] }}</h1>
                    <div class="d-flex gap-3 mb-3">
                        <span class="badge bg-primary">{{ $game['genre'] }}</span>
                        <span class="badge bg-secondary">{{ $game['platform'] }}</span>
                        <span class="badge bg-success">{{ $game['status'] }}</span>
                    </div>
                </div>
            </div>
    
            <!-- Game Images -->
            <div class="row mb-4">
                <div class="col-12">
                    <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($game['screenshots'] as $index => $screenshot)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ $screenshot['image'] }}" class="d-block w-100 rounded" alt="Screenshot {{ $index + 1 }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Game Description -->
            <div class="row mb-4">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body ">
                            <h4 class="card-title text-center">Descrizione</h4>
                            <p class="card-text">{{ $game['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Game Details -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body ">
                            <h4 class="card-title text-center">Informazioni</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Editore:</strong> {{ $game['publisher'] }}</li>
                                <li class="list-group-item"><strong>Sviluppatore:</strong> {{ $game['developer'] }}</li>
                                <li class="list-group-item"><strong>Data di rilascio:</strong> {{ $game['release_date'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 mt-3 mt-md-0">
                    @if (isset($game['minimum_system_requirements']) && $game['minimum_system_requirements'])
                    <div class="card h-100">
                        <div class="card-body ">
                            <h4 class="card-title text-center">Requisiti minimi</h4>
                            <ul class="list-group list-group-flush mt-1">
                                <li class="list-group-item"><strong>OS:</strong> {{ $game['minimum_system_requirements']['os'] }}</li>
                                <li class="list-group-item"><strong>Processore:</strong> {{ $game['minimum_system_requirements']['processor'] }}</li>
                                <li class="list-group-item"><strong>Memoria:</strong> {{ $game['minimum_system_requirements']['memory'] }}</li>
                                <li class="list-group-item"><strong>Grafica:</strong> {{ $game['minimum_system_requirements']['graphics'] }}</li>
                                <li class="list-group-item"><strong>Memoria:</strong> {{ $game['minimum_system_requirements']['storage'] }}</li>
                            </ul>
                            @else
                            <div></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Action Buttons -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <a href="{{ $game['game_url'] }}" class="btn btn-submit btn-lg me-3" target="_blank">
                        Vai al sito
                    </a>
                </div>
            </div>
        </div>
        <x-profileimg/>
    </x-layout>
