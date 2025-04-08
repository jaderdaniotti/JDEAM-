<x-layout>
    @if (session('status')==='verification-link-sent')
    <div class="container h-100 align-content-center d-flex flex-column justify-content-center min-height-50 text-white p-5">
        <h1 class="text-center text-white">Una nuova email ti è stata rimandata.</h1>
        <p class="fs-5 text-center">
            <br>Per favore, controlla la tua casella di posta in arrivo e segui il link contenuto nell'email per completare la registrazione e attivare il tuo account. 
            <br>Se non dovessi visualizzare l'email entro pochi minuti.</p>
    </div>
    @else
    <div class="container h-100 align-content-center d-flex flex-column justify-content-center min-height-50 text-white p-5">
        <h1 class="text-center text-white">Verifica ora la tua email</h1>
        <p class="fs-5 text-center">Ti abbiamo inviato un'email di verifica all'indirizzo fornito. 
            <br>Per favore, controlla la tua casella di posta in arrivo e segui il link contenuto nell'email per completare la registrazione e attivare il tuo account. 
            <br>Se non dovessi visualizzare l'email entro pochi minuti.</p>
        <form action="{{route('verification.send')}}" class="d-flex justify-content-center" method="POST">
            @csrf
            <button type="submit" class="btn">Reinvia l'email</button>
            <button type="button" class="btn mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-left"></i>
            </button>
        </form>
    </div>
    @endif



</x-layout>