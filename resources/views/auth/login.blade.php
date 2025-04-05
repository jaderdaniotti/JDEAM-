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
            <button type="submit" class="btn ">Entra</button>
            <br>
            <h4 class="text-white mt-1">Non sei ancora registrato? Clicca qui per registrarti
                <a href="{{route('register')}}" class="text-white anim-rotate btn"><i class="bi bi-person-add"></i></a>
            </h4>
        </form>


    </div>
</x-layout>