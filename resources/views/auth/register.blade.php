<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('register')}}" method="POST" class="form-user ">
            @csrf
            <h1 class="text-center agdasima-bold text-white">REGISTRATI</h1>

            <label for="name">Come ti chiami?</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci il tuo nickname...">

            <label for="email" >Inserisci la tua email</label>
            <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email...">

            <label for="password" >Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">

            <label for="password_confirmation" >Conferma la tua password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Conferma la tua password...">
            <br>
            <button type="submit" class="btn">Registrati</button>
        </form>
    </div>
</x-layout>