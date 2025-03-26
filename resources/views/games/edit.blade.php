<x-layout>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 edit-col p-4">
                <form action="{{route('games.update', ['game' => $game->id])}}" method="POST" class="gestione-form-modal text-center">
                    @method('PUT')
                    @csrf
                    <img src="{{Storage::url($game->image)}}" alt="" height="300rem">
                    <h1>Modifica <span class="color-grey-secondary fw-bolder">{{$game->name}}</span></h1>
                    <label for="">Nome: {{$game->name}}</label>
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome del gioco..." value="{{$game->name}}">
                    <input type="checkbox" checked value="{{$game->type}}" name="type" class="d-none">
                    <div class="row justify-content-center mt-2">
                        <button class="btn btn-submit mt-1 " type="submit">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>