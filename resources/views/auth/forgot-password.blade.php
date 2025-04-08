<x-layout>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif
    <div class="container h-100 align-content-center d-flex flex-column justify-content-center min-height-50 text-white p-5">
        <h1 class="text-center text-white">Hai dimenticato la password</h1>
        <p class="fs-5 text-center">Ti abbiamo inviato un'email di verifica all'indirizzo fornito. 
            <br>Per favore, controlla la tua casella di posta in arrivo e segui il link contenuto nell'email per cambiare la password. 
            <br>Se non dovessi visualizzare l'email entro pochi minuti.</p>
        <form action="{{route('password.email')}}" class="" method="POST">
            @csrf
            <label for="email" class="fs-5">Inserisci la tua email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            <button type="submit" class="btn mt-2">Invia link</button>
            <button type="button" class="btn mx-1 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-left"></i>
            </button>
        </form>
    </div>
</x-layout>