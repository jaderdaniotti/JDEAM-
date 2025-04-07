<x-layout>
    <div class="container-fluid">
        <h1 class="text-center text-white uppercase mt-3 fs-1">Area personale</h1>
        <h2 class="text-center text-white mt-1 ">Benvenuto <span class="color-grey-secondary">{{$user->name}}</span></h2>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="min-height-80 bg-section-fonce my-2 card card-user p-3">
                    <div class="card-header justify-content-center d-flex ">
                            <img src="{{ asset('storage/' . $user->image)}}" alt="" class="rounded img-fluid">
                    </div>
                    <div class="card-body">

                        <h4 class="card-text m-0">Nome: <span class="">{{$user->name}}</span></h4>
                        <h4 class="card-text m-0">Email: <span class="">{{$user->email}}</span></h4>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
            
            </div>
        </div>
    </div>

</x-layout>