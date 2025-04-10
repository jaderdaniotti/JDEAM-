<x-layout>
  {{-- <div class="container">
    <form class="d-flex p-2 mt-3" role="search">
      <input class="form-control me-2" type="text" placeholder="Cerca un prodotto..." aria-label="Search" id="searchInput" onkeyup="">
    </form>
  </div> --}}
  {{-- <section class="container container-welcome">
    <div class="row justify-content-evenly min-height-50 mt-4">
      <a class="btn mb-4 bg-gradient-1" href="{{route('games.index')}}">GAMES <br><span>Giochi creati via CRUD</span></a>
      <a class="btn mb-4 bg-gradient-1" href="{{route('apigames.index')}}">APIGAMES <br><span>Giochi presi da API</span></a>
    </div>
  </section> --}}
{{-- <section class="header bg-section-claire pt-0">
    <div class="container-fluid">
        <div class="row">
          <div id="risultatiRicerca" class="text-white container">
            <hr>
          </div>
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
            <div class="col-12 col-lg-10 container-games mt-2">
              <div class="row" id="index-games">

                @foreach ($games as $game)
                <div class="card col-12 col-md-6 col-lg-4" >
                  <img src="{{Storage::url($game->image)}}" class="" alt="..." width="100%">
                  <div class="card-body text-center">
                    <h5 id="gametitle" class="card-title "><span class="agdasima-regular">{{$game['name']}}</span></h5>
                    <h6 id="gametitle" class="cardgame-genre " genre="{{$game['price']}}"><span class="agdasima-regular">{{$game['price']}}$</span></h6>
                    <a href="#" class="btn btn-submit">Vedi</a>
                  </div>
                  <hr>
                </div>
                @endforeach
                
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
</section> --}}
<div class="container p-0 mt-2 ">
  <div class="row mx-0 flex-column align-items-center justify-items-center w-100">
    <div class="col-12 welcome-box box1 align-items-center text-center px-2">
      <h2 class="stringa1 text-white f-size-max my-0"></h2>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <script>
        var stringa1 = {
          strings: [ 
            'CREA IL TUO ACCOUNT...',
            '<i class="bi bi-person-add"></i>',
             'O FAI IL LOGIN...',
             '<i class="bi bi-box-arrow-in-right"></i>',
             '<i class="bi bi-person-walking"></i><i class="bi bi-person-walking"></i><i class="bi bi-person-walking"></i>',
             '<i class="bi bi-person-bounding-box"></i>',
             '<i class="bi bi-person-check-fill"></i>',
             '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>',
             '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>',
             '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>'
          ],
          typeSpeed: 45
        };
        var typed = new Typed('.stringa1', stringa1);
      </script>
    </div>
    <div class="col-12 my-3 welcome-box box2 align-items-center text-center px-2">
      <h2 class="stringa2 text-white f-size-max my-0"></h2>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <script>
        let stringa_a_comparsa = document.querySelector('.stringa2')
        var stringa2 = {
          strings: [ 
            'ESPLORA I MIEI',
             '<i class="bi bi-controller"></i>',
             'GIOCHI',
             '<i class="bi bi-joystick"></i>',
             'AGGIUNGILI AI PREFERITI',
             '<i class="bi bi-heart"></i>',
             '<i class="bi bi-arrow-through-heart"></i>',
             '<i class="bi bi-heart-fill"></i>',
            'VUOI GIOCARLI?',
             '<i class="bi bi-pc-display"></i>',
            'TROVERAI IL LINK!',
             '<i class="bi bi-link"></i>',
            '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>',
             '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>'
          ],
          typeSpeed: 45
        };
        function logElementInViewport(element) {
          const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                var typed = new Typed(element, stringa2);
                observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
              }
            });
          });
          observer.observe(element);
        }
        logElementInViewport(stringa_a_comparsa);

      </script>
    </div>
    <div class="col-12 welcome-box box3 align-items-center text-center ">
      <h2 class="stringa3 text-white f-size-max my-0"></h2>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <script>
        let stringa_a_comparsa2 = document.querySelector('.stringa3')
        var stringa3 = {
          strings: [ 
            'RINGRAZIO IL CAST',
            
             '<i class="bi bi-filetype-html"></i>',
             '<i class="bi bi-filetype-css"></i>',
             '<i class="bi bi-bootstrap"></i>',
             '<i class="bi bi-filetype-js"></i>',
             '<i class="bi bi-filetype-json"></i>',
             '<i class="bi bi-filetype-php"></i>',
             '<i class="bi bi-filetype-sql"></i>',
             'E...',
            'DULCIS',
             '<i class="bi bi-cake2"></i>',
            'IN FUNDO',
             '...',
            'LARAVEL',
             'SE JDEAM',
            'TI STA PIACENDO',
             '<i class="bi bi-arrow-through-heart"></i>',
            '<i class="bi bi-arrow-through-heart-fill"></i>',
             'COSA ASPETTI?',
            'CONTATTAMI VIA...',
             '<i class="bi bi-envelope"></i>',
            'OPPURE SU',
             '<i class="bi bi-linkedin"></i>',
             'ESPLORA IL MIO',
             '<i class="bi bi-github"></i>',
            'TI ASPETTO!',
            'TROVERAI TUTTO',
            'SULLA SEZIONE',
            'CONTATTI',
            '<i class="bi bi-person-lines-fill"></i>',
            '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>',
             '<i class="bi bi-person-standing"></i>',
            '<i class="bi bi-person-arms-up"></i>',
          ],
          typeSpeed: 45
        };
        function logElementInViewport(element) {
          const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                var typed = new Typed(element, stringa3);
                observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
              }
            });
          });
          observer.observe(element);
        }
        logElementInViewport(stringa_a_comparsa2);

      </script>
    </div>
  </div>
</div>
<x-profileimg/>
<x-footer/>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  import Typed from 'typed.js';
  let welcomeBox1 = document.querySelector('.box1');
let welcomeBox2 = document.querySelector('.box2');
let welcomeBox3 = document.querySelector('.box3');
function logElementInViewport(element) {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
       element.classList.add('anim');
       console.log
        observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
      }
    });
  });

  observer.observe(element);
}
logElementInViewport(welcomeBox2);
logElementInViewport(welcomeBox3);


</script>

</x-layout>