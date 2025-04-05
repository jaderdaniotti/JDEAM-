<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('register')}}" method="POST" class="form-user px-0" enctype="multipart/form-data">
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

            <label for="image" >Foto profilo</label>
            <div id="labelImageUser"></div>
            <input type="file" name="image" class="form-control" value="{{old('image')}}" id="imageUser">

            <label for="email" >Inserisci la tua email</label>
            <input type="email" name="email" class="form-control" placeholder="Inserisci la tua email..." value="{{old('email')}}">

            <label for="password" >Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">

            <label for="password_confirmation" >Conferma la tua password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Conferma la tua password...">
            <br>
            <button type="submit" class="btn">Registrati</button>
            <br>
            <h4 class="text-white mt-1">Hai gia un account? Clicca qui per entrare
                <a href="{{route('login')}}" class="btn anim-rotate  mt-1"><i class="bi bi-box-arrow-in-right"></i></a>
            </h4>
        </form>
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('imageUser');
    const imagePreviewContainer = document.getElementById('labelImageUser');

    imageInput.addEventListener('change', function() {
        imagePreviewContainer.innerHTML = '';

        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const previewImage = document.createElement('img');
                previewImage.src = e.target.result;
                previewImage.style.maxWidth = '10rem'; 
                previewImage.style.height = 'auto';
                previewImage.classList.add('m-2');
                imagePreviewContainer.appendChild(previewImage);
            }
            reader.readAsDataURL(file);
        } else {
            imagePreviewContainer.textContent = 'Nessuna immagine selezionata.';
        }
    });
});
</script>