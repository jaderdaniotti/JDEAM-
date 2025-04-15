<x-layout>
    <div class="container-fluid">
        <h1 class="text-center text-white uppercase mt-3">Area personale</h1>
        <h2 class="text-center text-white mt-1 ">Benvenuto <span class="color-grey-secondary">{{$user->name}}</span></h2>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class=" bg-section-fonce my-2 card card-user p-3">
                    <div class="card-header justify-content-center d-flex ">
                            <img src="{{ asset('storage/' . $user->image)}}" alt="" class="rounded img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-text m-0">Nome: <span class="text-white">{{$user->name}}</span></h4>
                        <h4 class="card-text m-0">Email: <span class="text-white">{{$user->email}}</span></h4>
                        <h4 class="card-text m-0">Password: <span class="text-white">*********</span></h4>
                        <h4 class="card-text m-0">Data di registrazione: <span class="text-white">{{$user->created_at}}</span></h4>
                        <a href="" class="btn mt-1"  data-bs-toggle="modal" data-bs-target="#modelEditUser">Modifica info <i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn mt-1"  data-bs-toggle="modal" data-bs-target="#modelEditPasswordLabel">Modifica password <i class="bi bi-pencil-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 justify-content-center bg-section-fonce my-2 rounded text-white">
                <h2 class="text-center mt-1 text-white ">Titoli preferiti</h2>
            @foreach ($apigames as $game)
            <a href="/dettaglio/{{$game['game_id']}}" class="text-decoration-none text-white">
                <div class="row mt-1">
                    <img src="{{$game->thumbnail}}" alt="" class="col-4 col-lg-3 img-fluid rounded-start" href="/dettaglio/{{$game['game_id']}}">
                    <div class="col-10 col-lg-10 d-flex flex-column justify-content-center align-items-start min-width">
                        <h4 class="card-text m-0">Nome: <span class="">{{$game->title}}</span></h4>
                        <h4 class="card-text m-0">Piattaforma: <span class="">{{$game->platform}}</span></h4>
                        <h4 class="card-text m-0">Genere: <span class="">{{$game->genre}}</span></h4>
                        <h4 class="card-text m-0">Data di rilascio: <span class="">{{$game->release_date}}</span></h4>
                    </div>
                    <div class="col-2  d-flex text-end justify-content-end align-items-center w-100">
                        <form action="/favorites/{{$game->id}}" method="POST" class="w-100">
                            @csrf
                              @method('DELETE')
                            <button class="btn btn-like" type="submit">
                             <i class="bi {{ auth()->user()->apigames->contains($game->id) ? 'bi-heart-fill' : 'bi-heart'}}"></i>
                            </button>
                          </form>
                    </div>
                </div>
            </a>
            <hr>
            @endforeach 
            </div>
        </div>
    </div>
    <div class="modal fade" id="modelEditUser" tabindex="-1" aria-labelledby="modelEditUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content bg-section-fonce">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex p-1">
                <div class="container-fluid justify-content-center ">
                    <form action="{{route('user-profile-information.update')}}" method="POST" class="  px-1 py-0 m-0" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h2 class="text-center agdasima-bold text-white">MODIFICA INFO</h2>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="card-text mb-1 text-white">Cambia nome</h4>
                        <input type="text" name="name" class="form-control" placeholder="Inserisci nome..." value="{{$user->name}}">
                        {{ $errors->updateProfileInformation->first('name') ?? '' }}
                        <h4 class="card-text mb-1 text-white">Cambia email</h4>
                        <input type="text" name="email" class="form-control" placeholder="Inserisci email..." value="{{$user->email}}">
                        
                        <button type="submit" class="btn mt-2">Aggiorna dati</button>
                        <br>
                    </form>
                    <hr>

                </div>
            </div>

          </div>
        </div>
    </div>
    <div class="modal fade" id="modelEditPasswordLabel" tabindex="-1" aria-labelledby="modelEditPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content bg-section-fonce">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex p-1">
                <div class="container-fluid justify-content-center ">
                    <form action="{{route('user-password.update')}}" method="POST" class="px-1 py-0 m-0">
                        @csrf
                        @method('PUT')
                        <h2 class="text-center agdasima-bold text-white">MODIFICA PASSWORD</h2>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif                
                        <h4 class="card-text mb-1 text-white">Vecchia password</h4>
                        <input type="password" name="current_password" class="form-control" placeholder="Vecchia password...">
                        {{ $errors->updateProfileInformation->first('current_password') ?? '' }}
                        <h4 class="card-text mb-1 text-white">Nuova password</h4>
                        <input type="password" name="password" class="form-control" placeholder="Vecchia password...">
                        {{ $errors->updateProfileInformation->first('password') ?? '' }}
                        <h4 class="card-text mb-1 text-white">Conferma nuova password</h4>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Vecchia password...">
                        {{ $errors->updateProfileInformation->first('password_confirmation') ?? '' }}
                        <br>
                        <button type="submit" class="btn">Aggiorna Password</button>
                        <br>
                    </form>
                    <hr>

                </div>
            </div>

          </div>
        </div>
    </div>
</x-layout>

{{-- <form action="/favorites/{{$api->id}}" method="POST">
    @csrf
    @if (auth()->user()->apigames->contains($api->id))
      @method('DELETE')
    @endif
    <button class="btn btn-like" type="submit">
     <i class="bi {{ auth()->user()->apigames->contains($api->id) ? 'bi-heart-fill' : 'bi-heart'}}"></i>
    </button>
  </form> --}}