<x-layout>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 edit-col">
                <form action="{{route('players.update', ['player' => $player->id])}}" method="POST" class="gestione-form-modal text-center">
                    @method('PUT')
                    @csrf
                    <h1>Modifica <span class="color-grey-secondary fw-bolder">{{$player->name}}</span></h1>

                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria..." value="{{$player->name}}">
                    <div class="row justify-content-center mt-2">
                        <button class="btn btn-submit mt-1 " type="submit">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>