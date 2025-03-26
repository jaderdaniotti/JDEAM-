<x-layout>
<section class="header bg-section-claire ">
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block d-xl-block col-2 col-md-none">
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
                              <input class="form-check-input" type="checkbox" 
                              name="categories[]" value= "{{$gamecategory->name}}">
                              <label class="form-check-label"  >
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
            <div class="col-12 col-lg-10 container-games">
              <div class="row justify-content-between">
                @foreach ($games as $game)
                <div class="card col-12 col-lg-4" >
                  <img src="{{Storage::url($game->image)}}" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title agdasima-regular">{{$game->name}}</h5>
                    <h6>{{$game->price}}$</h6>
                    <a href="#" class="btn btn-submit">Vedi</a>
                  </div>
                  <hr>
                </div>
                @endforeach
              </div>
            </div>
        </div>
    </div>
</section>
</x-layout>