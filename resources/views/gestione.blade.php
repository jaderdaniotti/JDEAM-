<x-layout>
    <div class="container-fluid">

        {{-- modal CATEGORY --}}
        <div class="modal fade" id="modalCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content bg-section-fonce">
                <div class="modal-header">
                    <h1 class="text-white">Aggiungi una nuova categoria</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <form action="{{route('categories.store')}}" method="POST" class="gestione-form-modal text-center">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                        <div class="row justify-content-center mt-2">
                            <button class="btn  btn-submit mt-1 ">Aggiungi</button>
                        </div>
                    </form>
                </div>
                    <div class="modal-footer">
                        <table class="table table-secondar">
                            <tr class="table table-secondary">
                                <th scope="col table-secondary">ID</th>
                                <th scope="col table-secondary">Nome</th>
                                <th scope="col table-secondary">Modifica</th>
                                <th scope="col table-secondary">Elimina</th>
                            </tr>
                            @foreach ($categories as $category)
                            <tr class="table table-secondary">
                                <th scope="col table-secondary">{{$category->id}}</th>
                                <th scope="col table-secondary">{{$category->name}}</th>
                                <th scope="col table-secondary">
                                    <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button> 
                                </th>
                                <th scope="col table-secondary">
                                    <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal PLATFORM --}}
            <div class="modal fade" id="modalPlatform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content bg-section-fonce">
                    <div class="modal-header">
                        <h1 class="text-white">Aggiungi una nuova piattaforma</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <form action="{{route('platforms.store')}}" method="POST" class="gestione-form-modal text-center">
                            @csrf
                            <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della piattaforma...">
                            <div class="row justify-content-center mt-2">
                                <button class="btn btn-submit mt-1 ">Aggiungi</button>
                            </div>
                        </form>
                    </div>
                        <div class="modal-footer">
                            <table class="table table-secondary  ">
                                <tr class="table table-secondary">
                                    <th scope="col table-secondary">ID</th>
                                    <th scope="col table-secondary">Nome</th>
                                    <th scope="col table-secondary">Modifica</th>
                                    <th scope="col table-secondary">Elimina</th>
                                </tr>
                                @foreach ($platforms as $platform)
                                <tr class="table table-secondary">
                                    <th scope="col table-secondary">{{$platform->id}}</th>
                                    <th scope="col table-secondary">{{$platform->name}}</th>
                                    <th scope="col table-secondary">
                                        <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button> 
                                    </th>
                                    <th scope="col table-secondary">
                                        <form action="{{route('platforms.destroy', $platform->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        {{-- modal PLAYER --}}
        <div class="modal fade" id="modalPlayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content bg-section-fonce">
                <div class="modal-header">
                    <h1 class="text-white">Aggiungi un nuovo player</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <form action="{{route('players.store')}}" method="POST" class="gestione-form-modal text-center">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                        <div class="row justify-content-center mt-2">
                            <button class="btn btn-submit mt-1 ">Aggiungi</button>
                        </div>
                    </form>
                </div>
                    <div class="modal-footer">
                        <table class="table table-secondary  ">
                            <tr class="table table-secondary">
                                <th scope="col table-secondary">ID</th>
                                <th scope="col table-secondary">Nome</th>
                                <th scope="col table-secondary">Modifica</th>
                                <th scope="col table-secondary">Elimina</th>
                            </tr>
                            @foreach ($players as $player)
                            <tr class="table table-secondary">
                                <th scope="col table-secondary">{{$player->id}}</th>
                                <th scope="col table-secondary">{{$player->name}}</th>
                                <th scope="col table-secondary">
                                    <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button> 
                                </th>
                                <th scope="col table-secondary">
                                    <form action="{{route('players.destroy', $player->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-content-center">
            <div class="col-12 col-md-3 aside-left">
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalCategory">
                <i class="bi bi-bookmark"></i> CATEGORIE <i class="bi bi-bookmark"></i>
              </button>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalPlatform">
                <i class="bi bi-pc-display"></i> PIATTAFORME <i class="bi bi-pc-display"></i>
              </button>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalPlayer">
                <i class="bi bi-person-workspace"></i> PLAYERS <i class="bi bi-person-workspace"></i>
              </button>
            </div>
            
        </div>
    </div>
</x-layout>