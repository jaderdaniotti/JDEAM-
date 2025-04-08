<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('login')}}" method="POST" class="form-user px-0">
            @csrf
            <h1 class="text-center agdasima-bold text-white">LOGIN</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="email" >Inserisci la tua email</label>
            <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email...">

            <label for="password" >Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">
            <h6 class="text-white mt-1">Hai dimenticato la password?
                <a href="{{route('password.request')}}" class="text-white anim-rotate mt-1">Clicca qui per reimpostarla </a>
            </h6>
            <button type="submit" class="btn ">Entra</button>
            <h5 class="text-white text-center my-0">Hai dimenticato la password? 
                <a href="{{route('password.request')}}" class="text-white anim-rotate mt-1">Clicca qui per reimpostarla</a>
            </h5>
            <h5 class="text-white text-center mt-0">Non sei ancora registrato? 
                <a href="{{route('register')}}" class="text-white anim-rotate mt-1">Registrati</a>
            </h5>
        </form>


    </div>
</x-layout>