<x-layout>
    <div class="container text-white d-flex justify-content-center align-items-center p-1">
        <div class="formbox d-flex flex-column justify-content-center align-items-center px-3 py-5 bg-navbar">
            <h1 class="text-center titolo-form mt-2 f-size-adapt"></h1>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('sendMail')}}" class="fs-3 w-100 justify-content-center d-flex flex-column" method="POST">
                @csrf
                <label for="email" class="form-label text-center w-100">Email</label>
                <input type="email" class="form-control" placeholder="Example@mail.com" value{{old('email')}} name="email">
                <label for="name" class="form-label text-center w-100">Nome / Azienda</label>
                <input type="text" class="form-control"  placeholder="Inserisci il tuo nome o della tua azienda..." value{{old('email')}} name="name">
                <label for="message" class="form-label text-center w-100">Messaggio</label>
                <textarea name="message" id="" class="form-control" placeholder="Scrivi qua il tuo messaggio...">{{old('message')}}</textarea>
                <button type="submit" class="btn btn-submit mx-auto mt-3 p-3">Invia email!</button>
            </form>
            @if (session('success'))
            <div class="success fs-2 text-center">
                {{session('success')}}
            </div>
            @endif
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        let titolo = document.querySelector('.titolo-form')
          var stringaTitolo = {
            strings: [ 
                'Hai deciso di contattarmi?',
            ],
            typeSpeed: 20
          };
          var typed = new Typed(titolo, stringaTitolo);

        </script>
</x-layout>