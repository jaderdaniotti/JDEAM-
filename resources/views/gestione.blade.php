<x-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-md-4 ">
                <form action="{{route('categories.store')}}" method="POST" class="gestione-form text-center">
                    <h1 class="text-center">Categoria</h1>
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center mt-2">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
                </form>
                <table class="table table-secondary table-hover table-striped ">
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">ID</th>
                        <th scope="col table-secondary">Nome</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">{{$category->id}}</th>
                        <th scope="col table-secondary">{{$category->name}}</th>
                    </tr>
                    @endforeach
                  </table>
            </div>

            <div class="col-12 col-md-4">
                <form action="{{route('platforms.store')}}" method="POST" class="gestione-form">
                    <h1 class="text-center">Piattaforma</h1>
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center mt-2">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
                </form>

                <table class="table table-secondary table-hover table-striped ">
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">ID</th>
                        <th scope="col table-secondary">Nome</th>
                    </tr>
                    @foreach ($platforms as $platform)
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">{{$platform->id}}</th>
                        <th scope="col table-secondary">{{$platform->name}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="col-12 col-md-4">
                <form action="{{route('players.store')}}" method="POST" class="gestione-form">
                    <h1 class="text-center">Giocatori</h1>
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center mt-2">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
                </form>

                <table class="table table-secondary table-hover table-striped ">
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">ID</th>
                        <th scope="col table-secondary">Nome</th>
                    </tr>
                    @foreach ($players as $player)
                    <tr class="table table-secondary">
                        <th scope="col table-secondary">{{$player->id}}</th>
                        <th scope="col table-secondary">{{$player->name}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <hr>
    </div>
</x-layout>