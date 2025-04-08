<x-layout>
    <div class="container-fluid justify-content-center ">
        <form action="{{route('password.update')}}" method="POST" class="form-user px-0">
            @csrf
            <h1 class="text-center agdasima-bold text-white">Cambia password</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="hidden" name="token" id="token" value="{{ $request->token }}">
            <input type="hidden" name="email" id="email" value="{{ $request->email }}">

            <label for="password" >Inserisci la nuova password</label>
            <input type="password" name="password" class="form-control" placeholder="Inserisci la tua password...">

            <label for="password_confirmation" >Conferma la tua nuova password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Conferma la tua password...">
            <br>
            <button type="submit" class="btn">Cambia password</button>
            <br>
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