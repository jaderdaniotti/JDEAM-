<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('login')}}" method="POST" class="form-user ">
            @csrf
            <h1 class="text-center agdasima-bold text-white">LOGIN</h1>

            <label for="email" >Inserisci la tua email</label>
            <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email...">

            <label for="password" >Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">
            <br>
            <button type="submit" class="btn">Entra</button>
        </form>
    </div>
</x-layout>