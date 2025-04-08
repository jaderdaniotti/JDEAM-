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

                        <h4 class="card-text m-0">Nome: <span class="">{{$user->name}}</span></h4>
                        <h4 class="card-text m-0">Email: <span class="">{{$user->email}}</span></h4>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 justify-content-center bg-section-fonce my-2 rounded text-white">
                <h2 class="text-center mt-1 text-white ">Titoli preferiti</h2>
             @foreach ($apigames as $game)
             <div class="row mt-1">
                <img src="{{$game->thumbnail}}" alt="" class="col-4 col-lg-3 img-fluid rounded-start">
                <div class="col-8 col-lg-9 d-flex flex-column justify-content-center align-items-start">
                    <h4 class="card-text m-0">Nome: <span class="">{{$game->title}}</span></h4>
                    <h4 class="card-text m-0">Piattaforma: <span class="">{{$game->platform}}</span></h4>
                    <h4 class="card-text m-0">Genere: <span class="">{{$game->genre}}</span></h4>
                    <h4 class="card-text m-0">Data di rilascio: <span class="">{{$game->release_date}}</span></h4>
                </div>
             </div>
             <hr>
            @endforeach 
            </div>
        </div>
    </div>

</x-layout>