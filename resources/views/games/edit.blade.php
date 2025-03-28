<x-layout>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 edit-col p-2 form-games-edit">
                <h1 class="text-center">Modifica <span class="color-grey-secondary agdasima-regular">{{$game->name}}</span></h1>
                <img src="{{Storage::url($game->image)}}" alt="" height="300rem">
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('games.update', $game->id)}}" method="POST" class="gestione-form"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-8">

                            <label for= "name">Nome del gioco</label>
                            <input type="text" name="name" class="form-control" value="{{$game->name}}"
                                placeholder="Inserisci il nome del gioco...">

                            <label for="name">Anno di pubblicazione</label>
                            <input type="number" name="year" class="form-control" value="{{$game->year}}"
                                placeholder="Inserisci l'anno di pubblicazione...">

                            <label for="name">Prezzo</label>
                            <input type="text" name="price" class="form-control" value="{{$game->price}}"
                                placeholder="Inserisci il prezzo...">

                            <label for="name">Copertina</label>
                            <input type="file" name="image" class="form-control"
                                placeholder="Inserisci la foto della copertina...">
                        </div>

                        <div class="col-4">
                            <h3>Filtri</h3>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class=" collapsed btn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseCategory" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Categorie <i class="bi bi-plus-lg"></i>
                                    </button>
                                </h2>
                                <div id="flush-collapseCategory" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($gamecategories as $gamecategory)
                                        <div class="form-check">
                                            <input 
                                            @if ($game->categories->contains('id', $gamecategory->id)) checked @endif
                                            class="form-check-input" type="checkbox" name="categories[]" id="category_id_{{$gamecategory->id}}"
                                                value= "{{ $gamecategory->id }}">
                                            <label class="form-check-label">
                                                {{ $gamecategory->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="btn collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePlatform" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Piattaforma <i class="bi bi-plus-lg"></i>
                                    </button>
                                </h2>
                                <div id="flush-collapsePlatform" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($platforms as $platform)
                                        <div class="form-check">
                                            <input 
                                            @if ($game->categories->contains('id', $platform->id)) checked @endif
                                            class="form-check-input" type="checkbox" name="categories[]" id="category_id_{{$platform->id}}"
                                                value= "{{ $platform->id }}">
                                            <label class="form-check-label">
                                                {{ $platform->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="btn collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePlayer" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Player <i class="bi bi-plus-lg"></i>
                                    </button>
                                </h2>
                                <div id="flush-collapsePlayer" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($players as $player)
                                        <div class="form-check">
                                            <input 
                                            @if ($game->categories->contains('id', $player->id)) checked @endif
                                            class="form-check-input" type="checkbox" name="categories[]" id="category_id_{{$player->id}}"
                                                value= "{{ $player->id }}">
                                            <label class="form-check-label">
                                                {{ $player->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-submit mt-2 ">Aggiungi</button>
                        </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>
</x-layout>