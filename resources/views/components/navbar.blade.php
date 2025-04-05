<nav class="navbar navbar-expand-lg bg-navbar">
    <div class="container-fluid ">
        <div class="d-flex  justify-content-center align-items-center">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                <img src="/images/LOGO/fullstack.png" alt="Logo" height="100">
            </a>
            <a class="nav-link active darker-grotesque text-dark" href="/">Jdeam</a>

        </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active agdasima-regular" href="#">NEGOZIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active agdasima-regular" href="#">COMUNITà</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active agdasima-regular" href="#">Informazioni</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active agdasima-regular" href="#">Area personale</a>
              </li>
              @if(Auth::user()->isAdmin)
              <li class="nav-item">
                <a class="nav-link active agdasima-regular" href="{{route('gestione')}}">Gestione</a>
              </li>
              @endif
              @endauth
        </ul>
        
        <form class="d-flex " role="search">
          <input class="form-control me-2" type="text" placeholder="Cerca un prodotto..." aria-label="Search" id="searchInput" onkeyup="">
          <a href="" id="searchButton"><button class="btn btn-submit" type="submit">Cerca</button></a>
        </form> <br>

        <div class="d-flex mx-2  justify-content-center">
          {{-- logout --}}
          @auth
          <!-- Button trigger modal -->
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-box-arrow-left"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content bg-section-fonce">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center text-white" id="exampleModalLabel">Vuoi uscire dal profilo?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body d-flex">
                    <button type="button" class="btn " data-bs-dismiss="modal">No</button>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="btn ml-1">Si, effettua il logout</button>
                    </form>

                  </div>

                </div>
              </div>
            </div>
          
          @endauth

          @guest
          <a href="{{route('register')}}" class="btn"><i class="bi bi-person-add"></i></a>
          <a href="{{route('login')}}" class="btn mx-1"><i class="bi bi-box-arrow-in-right"></i></a>
          @endguest
          </div>

      </div>

    </div>
  </nav>
  @auth
  <div id="showPersonalArea" class="rounded-circle">
    <a href="{{route('profile', Auth::user()->id)}}">
      <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image" height="60" class="rounded-circle">
    </a>
  </div>
  @endauth