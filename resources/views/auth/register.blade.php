<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('register')}}" method="POST" class="form-user " enctype="multipart/form-data">
            @csrf
            <h1 class="text-center agdasima-bold text-white">REGISTRATI</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="name">Come ti chiami?</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci il tuo nickname..." value="{{old('name')}}">

            <label for="image">Foto profilo</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">

            <label for="email" >Inserisci la tua email</label>
            <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email..." value="{{old('email')}}">

            <label for="password" >Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">

            <label for="password_confirmation" >Conferma la tua password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Conferma la tua password...">
            <br>
            <button type="submit" class="btn">Registrati</button>
            <br>
            <h4 class="text-white mt-1">Hai gia un account? Clicca qui per entrate
                <a href="{{route('login')}}" class="btn anim-rotate mx-1"><i class="bi bi-box-arrow-in-right"></i></a>
            </h4>
        </form>
    </div>
</x-layout>