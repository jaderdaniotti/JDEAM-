<x-layout>
    <div class="container">
      <form class="d-flex p-2 mt-3" role="search">
        <input class="form-control me-2" type="text" placeholder="Cerca un prodotto..." aria-label="Search" id="searchInput" >
      </form>
    </div>
  <section class="header bg-section-claire pt-0">
      <div class="container-fluid">
          <div class="row">
            <div id="risultatiRicerca" class="text-white container">
              <hr>
            </div>
            {{-- filtri su pc --}}
            <div class="d-none d-lg-block d-xl-block col-2 col-md-none mt-2">
                  <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Categorie
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            @foreach ($gamecategories as $gamecategory)
                            <div class="form-check">
                                <input class="form-check-input checkboxcategory" type="checkbox" 
                                name="categories[]" value= "{{$gamecategory->name}}">
                                <label class="form-check-label capitalize"  >
                                    {{$gamecategory->name}}
                                </label>
                            </div>
                            @endforeach 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Piattaforma
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            @foreach ($platforms as $platform)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                name="categories[]" value= "{{$platform->name}}">
                                <label class="form-check-label"  >
                                    {{$platform->name}}
                                </label>
                            </div>
                            @endforeach 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Numero giocatori
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            @foreach ($players as $player)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                name="categories[]" value= "{{$player->name}}">
                                <label class="form-check-label"  >
                                    {{$player->name}}
                                </label>
                            </div>
                            @endforeach 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsePrice" aria-expanded="false" aria-controls="panelsStayOpen-collapsePrice">
                            Prezzo
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapsePrice" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkgratis" value= "0">
                                <label class="form-check-label" for="checktratis"  >
                                    Gratis
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check5" value= "5">
                                <label class="form-check-label" for="check5"  >
                                    &lt;5$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check10" value= "10">
                                <label class="form-check-label" for="check10"  >
                                    &lt;10$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check15" value= "15">
                                <label class="form-check-label" for="check15"  >
                                    &lt;15$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check20" value= "20">
                                <label class="form-check-label" for="check20"  >
                                    &lt;20$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check25" value= "25">
                                <label class="form-check-label" for="check25"  >
                                    &lt;25$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check30" value= "30">
                                <label class="form-check-label" for="check30"  >
                                    &lt;30$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check50" value= "50">
                                <label class="form-check-label" for="check50"  >
                                    &lt;50$
                                </label><br>
                                <input class="form-check-input" type="checkbox" id="check80" value= "80">
                                <label class="form-check-label" for="check80"  >
                                    &lt;80$
                                </label><br>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
            {{-- fine filtri su pc --}}
            {{-- filtri su md --}}
            <div class=" d-lg-none d-xl-none col-12 mt-2">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          Categorie
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          @foreach ($gamecategories as $gamecategory)
                          <div class="form-check">
                              <input class="form-check-input checkboxcategory" type="checkbox" 
                              name="categories[]" value= "{{$gamecategory->name}}" >
                              <label class="form-check-label capitalize"  >
                                  {{$gamecategory->name}}
                              </label>
                          </div>
                          @endforeach 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Piattaforma
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          @foreach ($platforms as $platform)
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" 
                              name="categories[]" value= "{{$platform->name}}">
                              <label class="form-check-label"  >
                                  {{$platform->name}}
                              </label>
                          </div>
                          @endforeach 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          Numero giocatori
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          @foreach ($players as $player)
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" 
                              name="categories[]" value= "{{$player->name}}">
                              <label class="form-check-label"  >
                                  {{$player->name}}
                              </label>
                          </div>
                          @endforeach 
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            {{-- fine filtri su md --}}
            <div class="col-12 col-lg-10 container-games mt-2">
            <div class="row" id="index-games">
                @foreach ($apigames as $api)
                <div class="card col-12 col-md-6 col-lg-4 gamecard p-1 product" >
                  <img src="{{$api['thumbnail']}}" class="card-img-top" alt="...">
                  <div class="card-body text-center container p-2">
                    <div class="row">
                      <h5 id="gametitle" class="card-title uppercase"><span class="agdasima-regular">{{$api['title']}}</span></h5>
                    </div>
                      <h5 id="gametitle" class="card-title description-card"><span class="agdasima-regular ">{{$api['short_description']}}</span>
                      </h5>
                      <h6 id="gametitle" class="cardgame-genre " genre="{{$api->genre}}"><span class="agdasima-regular genre btn">{{$api->genre}}</span>
                      </h6>
                    <hr class="w-25 mx-auto">
                    <div class="row">
                      <div class="col-12 justify-content-center d-flex px-1 ">
                        <a href="/dettaglio/{{$api['game_id']}}" class="btn btn-submit mx-1">Vedi</a>
                        @auth
                        <form action="/favorites/{{$api->id}}" method="POST">
                          @csrf
                          @if (auth()->user()->apigames->contains($api->id))
                            @method('DELETE')
                          @endif
                          <button class="btn btn-like" type="submit">
                           <i class="bi {{ auth()->user()->apigames->contains($api->id) ? 'bi-heart-fill' : 'bi-heart'}}"></i>
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
              </div>
              <div class="gamecard">
                {{ $apigames->links() }}
              </div> 
            </div>
          </div>
      </div>
  </section> 
  <x-profileimg/>
  <x-footer/>
  </x-layout>