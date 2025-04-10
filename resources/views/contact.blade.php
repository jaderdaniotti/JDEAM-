<x-layout>
    <div class="container text-white d-flex justify-content-center align-items-center p-3">
        <div class="formbox d-flex flex-column justify-content-center align-items-center px-3 py-5 bg-navbar">
            <h1 class="text-center titolo-form mt-2 f-size-adapt"></h1>
            <form action="" class="fs-3 w-100">
                <label for="" class="form-label text-center w-100">Email</label>
                <input type="email" class="form-control">
                <label for="" class="form-label text-center w-100">Email</label>
                <input type="email" class="form-control">
                <label for="" class="form-label text-center w-100">Email</label>
                <input type="email" class="form-control">
                <label for="" class="form-label text-center w-100">Email</label>
                <input type="email" class="form-control">
            </form>
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

        //   function animFooter(element) {
        //     const observer = new IntersectionObserver(entries => {
        //       entries.forEach(entry => {
        //         if (entry.isIntersecting) {
        //           element.classList.add('animation');
        //           observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
        //         }
        //       });
        //     });
        //     observer.observe(element);
        //   }

        </script>
</x-layout>