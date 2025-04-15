<x-layout>
    <div class="container p-0 mt-2 position-static">
        <div class="row mx-0 flex-column align-items-center justify-items-center w-100 position-static">
            <div class="col-12 welcome-box box1 align-items-center text-center px-2 position-static">
                <h2 class="stringa1 text-white f-size-max my-0"></h2>
            </div>
            <div class="col-12 my-3 welcome-box box2 align-items-center text-center px-2 position-static "
                id="welcomebox2">
                <h2 class="stringa2 text-white f-size-max my-0"></h2>
            </div>
            <div class="col-12 welcome-box box3 align-items-center text-center position-static" id="welcomebox3">
                <h2 class="stringa3 text-white f-size-max my-0"></h2>
            </div>
        </div>
    </div>
    <div id="div-footer">
        <x-footer />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        import Typed from 'typed.js';
        let welcomeBox1 = document.querySelector('.box1');
        let welcomeBox2 = document.querySelector('.box2');
        let welcomeBox3 = document.querySelector('.box3');

        function logElementInViewport(element) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        element.classList.add('anim');
                        console.log
                        observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
                    }
                });
            });

            observer.observe(element);
        }
        logElementInViewport(welcomeBox2);
        logElementInViewport(welcomeBox3);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
   
        let welcomebox2 = document.getElementById('welcomebox2');
        let stringa_a_comparsa = document.querySelector('.stringa2')
        let welcomebox3 = document.getElementById('welcomebox3');
        let stringa_a_comparsa2 = document.querySelector('.stringa3');
        let div_footer = document.getElementById('div-footer');
        div_footer.classList.add("d-none")
        var stringa1 = {
            strings: [
                'CREA IL TUO ACCOUNT...',
                '<i class="bi bi-person-add"></i>',
                'O FAI IL LOGIN...',
                '<i class="bi bi-box-arrow-in-right"></i>',
                '<i class="bi bi-person-walking"></i><i class="bi bi-person-walking"></i><i class="bi bi-person-walking"></i>',
                '<i class="bi bi-person-bounding-box"></i>',
                '<i class="bi bi-person-check-fill"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>',
            ],
            typeSpeed: 45
        };
        var stringa2 = {
            strings: [
                'ESPLORA I MIEI',
                '<i class="bi bi-controller"></i>',
                'GIOCHI',
                '<i class="bi bi-joystick"></i>',
                'AGGIUNGILI AI PREFERITI',
                '<i class="bi bi-heart"></i>',
                '<i class="bi bi-arrow-through-heart"></i>',
                '<i class="bi bi-heart-fill"></i>',
                'VUOI GIOCARLI?',
                '<i class="bi bi-pc-display"></i>',
                'TROVERAI IL LINK!',
                '<i class="bi bi-link"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>'
            ],
            typeSpeed: 45
        };
        var stringa3 = {
            strings: [
                'RINGRAZIO IL CAST',

                '<i class="bi bi-filetype-html"></i>',
                '<i class="bi bi-filetype-css"></i>',
                '<i class="bi bi-bootstrap"></i>',
                '<i class="bi bi-filetype-js"></i>',
                '<i class="bi bi-filetype-json"></i>',
                '<i class="bi bi-filetype-php"></i>',
                '<i class="bi bi-filetype-sql"></i>',
                'E...',
                'DULCIS',
                '<i class="bi bi-cake2"></i>',
                'IN FUNDO',
                '...',
                'LARAVEL',
                'SE JDEAM',
                'TI STA PIACENDO',
                '<i class="bi bi-arrow-through-heart"></i>',
                '<i class="bi bi-arrow-through-heart-fill"></i>',
                'COSA ASPETTI?',
                'CONTATTAMI VIA...',
                '<i class="bi bi-envelope"></i>',
                'OPPURE SU',
                '<i class="bi bi-linkedin"></i>',
                'ESPLORA IL MIO',
                '<i class="bi bi-github"></i>',
                'TI ASPETTO!',
                'TROVERAI TUTTO',
                'SULLA SEZIONE',
                'CONTATTI',
                '<i class="bi bi-person-lines-fill"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>',
                '<i class="bi bi-person-standing"></i>',
                '<i class="bi bi-person-arms-up"></i>',
            ],
            typeSpeed: 45
        };

        function testoacomparsa2(element) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        var typed = new Typed(element, stringa2);
                        observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
                    }
                });
            });
            observer.observe(element);
        }
        function testoacomparsa3(element) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        var typed = new Typed(element, stringa3);
                        observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
                    }
                });
            });
            observer.observe(element);
        }
        function visualizzafooter(element) {
          element.classList.remove("d-none");
          element.classList.add("d-block");
        }
        
        setTimeout(() => testoacomparsa2(stringa_a_comparsa), 12500);
        setTimeout(() => testoacomparsa3(stringa_a_comparsa2), 31000);
        setTimeout(() => visualizzafooter(div_footer), 73000);
        var typed = new Typed('.stringa1', stringa1);

    </script>
</x-layout>
