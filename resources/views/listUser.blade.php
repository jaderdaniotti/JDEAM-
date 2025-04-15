<x-layout>
<div class="container pb-3">
    <h1 class="text-center text-white uppercase mt-3 ">Utenti di jdeam</h1>
    <div class="row mb-2">
        @foreach ($users as $user)
        @if ($user->isAdmin === 1)
        <div class="col-md-4 mt-3">
            <div class="card text-center bg-admin text-white">
                <div class="card-header">
                    <img src="
                    @if (filter_var($user->image, FILTER_VALIDATE_URL))
                        {{ $user->image }} {{-- Se è un URL valido, usalo direttamente --}}
                    @elseif ($user->image)
                        {{ asset('storage/' . $user->image) }} {{-- Se è un percorso relativo, usa asset() --}}
                    @else
                        {{ asset('images/LOGO/fullstack.png') }} {{-- Immagine predefinita --}}
                    @endif" 
                    alt="" class="rounded-circle mt-4" height="150">
                    <h5><i class="bi bi-stars"></i> {{ $user->name }} <i class="bi bi-stars"></i></h5>
                </div>
                <div class="card-body">
                    <p>Email: {{ $user->email }}</p>
                    <p>Registrato il: {{ $user->created_at }}</p>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-4 mt-3">
            <div class="card text-center bg-section-fonce text-white">
                <div class="card-header">
                    <img src="
                    @if (filter_var($user->image, FILTER_VALIDATE_URL))
                        {{ $user->image }} {{-- Se è un URL valido, usalo direttamente --}}
                    @elseif ($user->image)
                        {{ asset('storage/' . $user->image) }} {{-- Se è un percorso relativo, usa asset() --}}
                    @else
                        {{ asset('images/LOGO/fullstack.png') }} {{-- Immagine predefinita --}}
                    @endif" 
                    alt="" class="rounded-circle mt-4" height="150">
                    <h5>{{ $user->name }}</h5>
                </div>
                <div class="card-body">
                    <p>Email: {{ $user->email }}</p>
                    <p>Registrato il: {{ $user->created_at }}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach

    </div>
    {{ $users->links() }}
</div>
</x-layout>