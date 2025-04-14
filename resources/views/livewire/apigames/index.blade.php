<div class="div">
    <div class="filter-div d-flex flex-column">
        <button type="button" class="btn bg-section-fonce" data-bs-toggle="modal" data-bs-target="#filterCategory">
            <i class="bi bi-funnel"></i>
        </button>
    </div>
    <div class="container-fluid fs-3 d-flex flex-column justify-content-center">
        
        <div class="row w-100 mt-3">
            <div class="col-12 d-flex">
                <input class="form-control me-2 w-100" type="text" wire:model.live='search'
                    placeholder="Cerca un prodotto..." aria-label="Search">
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="filterCategory" tabindex="-1" aria-labelledby="filterCategoryLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content bg-navbar">
                    <div class="modal-header bg-navbar">
                        <h1 class="modal-title fs-1 text-center w-100" id="filterCategoryLabel">Categorie</h1>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" wire:model.live='filterCategory'>
                        <div class="form-check">
                            <input class="form-check-input" name="onlyone" type="radio" for="exampleRadios1" data-bs-dismiss="modal" aria-label="Close" autocomplete="off" value = "">
                            <label class="form-check-label" >
                                Tutte le categorie
                            </label>
                        </div>
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" 
                                    value="{{$category->name}}" data-bs-dismiss="modal" aria-label="Close" autocomplete="off" name="onlyone">
                                <label class="form-check-label text-capitalize" >
                                    {{$category->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="header bg-section-claire pt-0 px-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12  container-games mt-2">
                    <div class="row" id="index-games">
                        @foreach ($apigames as $game)
                            <div class="card col-12 col-md-6 col-lg-3 gamecard p-1 product">
                                <img src="{{ $game['thumbnail'] }}" class="card-img-top" alt="...">
                                <div class="card-body text-center container p-2">
                                    <div class="row">
                                        <h5 id="gametitle" class="card-title uppercase"><span
                                                class="agdasima-regular">{{ $game['title'] }}</span></h5>
                                    </div>
                                    <h5 id="gametitle" class="card-title description-card"><span
                                            class="agdasima-regular ">{{ $game['short_description'] }}</span>
                                    </h5>
                                    <h6 id="gametitle" class="cardgame-genre " genre="{{ $game->genre }}"><span
                                            class="agdasima-regular genre btn">{{ $game->genre }}</span>
                                    </h6>
                                    <hr class="w-25 mx-auto">
                                    <div class="row">
                                        <div class="col-12 justify-content-center d-flex px-1 ">
                                            <a href="/dettaglio/{{ $game->game_id }}"
                                                class="btn btn-submit mx-1">Vedi</a>
                                            @auth
                                                <form action="/favorites/{{ $game->id }}" method="POST">
                                                    @csrf
                                                    @if (auth()->user()->apigames->contains($game->id))
                                                        @method('DELETE')
                                                    @endif
                                                    <button
                                                        class="btn {{ auth()->user()->apigames->contains($game->id) ? 'btn-like-on' : 'btn-like-off' }}"
                                                        type="submit">
                                                        <i
                                                            class="bi {{ auth()->user()->apigames->contains($game->id) ? 'bi-heart-fill' : 'bi-heart' }}"></i>
                                                    </button>
                                                </form>
                                            @endauth
                                        </div>
                                        <div class="col-6 justify-content-start d-flex px-1">
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-2">
                            </div>
                        @endforeach
                        {{ $apigames->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
