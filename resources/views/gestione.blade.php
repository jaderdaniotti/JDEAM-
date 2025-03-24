<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <form action="{{route('categories.store')}}" method="POST" class="gestione-form text-center">
                    <h1 class="text-center">Crea una categoria di gioco</h1>
                    @csrf
                    <label for="name">Nome categoria</label>
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
 
                </form>
            </div>
            <div class="col-4">
                <form action="" method="POST" class="gestione-form">
                    <h1 class="text-center">Aggiungi una piattaforma</h1>
                    @csrf
                    <label for="name">Nome categoria</label>
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <form action="" method="POST" class="gestione-form">
                    <h1 class="text-center">Aggiungi il tipo di giocatori</h1>
                    @csrf
                    <label for="name">Nome categoria</label>
                    <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria...">
                    <div class="row justify-content-center">
                        <button class="btn btn-submit mt-1 ">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>