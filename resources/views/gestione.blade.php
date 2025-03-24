<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <form action="" method="POST" class="gestione-form">
                    <h1 class="text-center">Crea una categoria di gioco</h1>
                    @csrf
                </form>
            </div>
            <div class="col-4">
                <form action="" method="POST">
                    <h1 class="text-center">Aggiungi una piattaforma</h1>
                    @csrf
                </form>
            </div>
            <div class="col-4">
                <form action="" method="POST">
                    <h1 class="text-center">Aggiungi i giocatori</h1>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</x-layout>