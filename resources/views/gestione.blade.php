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
                        <form action="{{ route('categories.store') }}" method="POST"
                            class="gestione-form-modal text-center">
                            @csrf
                            <input type="text" name="name" class="form-control"
                                placeholder="Inserisci il nome della categoria...">
                            <input type="checkbox" checked value="category" name="type" class="d-none">
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
                            @foreach ($gamecategories as $gamecategory)
                                <tr class="table table-secondary">
                                    <th scope="col table-secondary">#{{ $gamecategory->id }}</th>
                                    <th scope="col table-secondary">{{ $gamecategory->name }}</th>
                                    <th scope="col table-secondary">
                                        <a href="{{ route('categories.edit', $gamecategory->id) }}">
                                            <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                    </th>
                                    <th scope="col table-secondary">
                                        <form action="{{ route('categories.destroy', $gamecategory->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"><i
                                                    class="bi bi-trash3"></i></button>
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
        <div class="modal fade" id="modalPlatform" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content bg-section-fonce">
                    <div class="modal-header">
                        <h1 class="text-white">Aggiungi una nuova piattaforma</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <form action="{{ route('categories.store') }}" method="POST"
                            class="gestione-form-modal text-center">
                            @csrf
                            <input type="text" name="name" class="form-control"
                                placeholder="Inserisci il nome della piattaforma...">
                            <input type="checkbox" checked value="platform" name="type" class="d-none">
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
                                    <th scope="col table-secondary">#{{ $platform->id }}</th>
                                    <th scope="col table-secondary">{{ $platform->name }}</th>
                                    <th scope="col table-secondary">
                                        <a href="{{ route('categories.edit', $platform->id) }}">
                                            <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                    </th>
                                    <th scope="col table-secondary">
                                        <form action="{{ route('categories.destroy', $platform->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"><i
                                                    class="bi bi-trash3"></i></button>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <form action="{{ route('categories.store') }}" method="POST"
                            class="gestione-form-modal text-center">
                            @csrf
                            <input type="text" name="name" class="form-control"
                                placeholder="Inserisci il nome della categoria...">
                            <input type="checkbox" checked value="player" name="type" class="d-none">
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
                                    <th scope="col table-secondary">#{{ $player->id }}</th>
                                    <th scope="col table-secondary">{{ $player->name }}</th>
                                    <th scope="col table-secondary">
                                        <a href="{{ route('categories.edit', $player->id) }}">
                                            <button class="btn btn-edit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                    </th>
                                    <th scope="col table-secondary">
                                        <form action="{{ route('categories.destroy', $player->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"><i
                                                    class="bi bi-trash3"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-content-center d-flex mt-3">
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
            <div class="col-12 col-md-8 aside-right">
                <h1 class="text-center">Aggiungi un gioco</h1>
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
                <form action="{{ route('games.store') }}" method="POST" class="gestione-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <label for= "name">Nome del gioco</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Inserisci il nome della categoria...">

                            <label for="name">Anno di pubblicazione</label>
                            <input type="number" name="year" class="form-control"
                                placeholder="Inserisci il nome della categoria...">

                            <label for="name">Prezzo</label>
                            <input type="number" name="price" class="form-control"
                                placeholder="Inserisci il nome della categoria...">

                            <label for="name">Copertina</label>
                            <input type="file" name="image" class="form-control"
                                placeholder="Inserisci il nome della categoria...">
                        </div>

                        <div class="col-4">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class=" collapsed btn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseCategory" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Categorie
                                    </button>
                                </h2>
                                <div id="flush-collapseCategory" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($gamecategories as $gamecategory)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]"
                                                    value= "{{ $gamecategory->name }}">
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
                                        Piattaforma
                                    </button>
                                </h2>
                                <div id="flush-collapsePlatform" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($platforms as $platform)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]"
                                                    value= "{{ $platform->name }}">
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
                                        Player
                                    </button>
                                </h2>
                                <div id="flush-collapsePlayer" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($players as $player)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]"
                                                    value= "{{ $player->name }}">
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