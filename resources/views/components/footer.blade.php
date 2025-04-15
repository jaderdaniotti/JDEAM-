<footer class="bg-section-fonce text-center text-lg-start text-white d-flex align-content-center flex-column mt-1 position-static">
    <div class="container d-flex flex-column justify-content-center footer-body">
      <div class="row align-items-center justify-content-between text-center li-footer ">
        <div class="d-none col-lg-2 col-md-6  mb-md-4 d-lg-block foto-footer1">
            <img src="/images/LOGO/fullstack.png" alt="" height="50%" class="img-fluid">
        </div>
        <div class="col-lg-3 col-md-6 md-mb-4 link-footer1">
          <h2 class="text-uppercase fs-1">Collegamenti</h2>
  
          <ul class="list-unstyled  mb-0 ul-footer">
            <li>
              <a href="https://www.linkedin.com/in/jader-daniotti-0a00b9328/" class="text-white text-decoration-none">
                <i class="bi bi-linkedin"></i> Jader Daniotti</a>
            </li>
            <li>
              <a href="https://github.com/jaderdaniotti" class="text-white text-decoration-none">
                <i class="bi bi-github"></i> jaderdaniotti</a>
            </li>
            <li>
              <a href="https://www.instagram.com/jader_ness/" class="text-white text-decoration-none">
                <i class="bi bi-instagram"></i> jader_ness</a>
            </li>
            <li>
              <a href="https://www.facebook.com/jader.daniotti/" class="text-white text-decoration-none">
                <i class="bi bi-facebook"></i> Jader Daniotti</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6  mb-md-0 link-footer2">
          <h2 class="text-uppercase fs-1">Links</h2>
  
          <ul class="list-unstyled ul-footer mb-0">
            <li>
              <a href="{{route('apigames.index')}}" class="text-white text-decoration-none"><i class="bi bi-controller"></i> Giochi</a>
            </li>
            <li>
              <a href="{{route('listUsers')}}" class="text-white text-decoration-none"><i class="bi bi-people-fill"></i> Comunità</a>
            </li>
            <li>
              <a href="{{route('info')}}" class="text-white text-decoration-none"><i class="bi bi-book"></i> Informazioni</a>
            </li>
            <li>
            @auth
            <a href="{{route('profile')}}" class="text-white text-decoration-none"><i class="bi bi-person-fill"></i> Area personale</a>
            @endauth
            @guest
            <a href="{{route('login')}}" class="text-white text-decoration-none"><i class="bi bi-person-fill"></i>Registrati/Accedi</a>
            @endguest
            </li>
          </ul>
        </div>
        <div class="d-none col-lg-2 col-md-6  mb-md-0 d-lg-block foto-footer2">
            <img src="/images/LOGO/fullstack.png" alt="" height="100%" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="text-center p-5 bg-navbar footer-footer align-content-center justify-content-center" >
        <h2 class="stringaFooter text-white fs-1 my-0"></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    let stringa_footer = document.querySelector('.stringaFooter')
      var stringaFooter = {
        strings: [ 
            'Cosa aspetti?',
            'Contattami!',
            '<a href="/contact" class="btn btn-contact"><i class="bi bi-send"></i></a>',
        ],
        typeSpeed: 20
      };
      function logElementInViewport(element) {
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              var typed = new Typed(element, stringaFooter);
              observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
            }
          });
        });
        observer.observe(element);
      }
      logElementInViewport(stringa_footer);
      //Animazioni footer
      let img_footer1 = document.querySelector('.foto-footer1');
      let img_footer2 = document.querySelector('.foto-footer2');
      let link_footer1 = document.querySelector('.link-footer1');
      let link_footer2 = document.querySelector('.link-footer2');
      function animFooter(element) {
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              element.classList.add('animation');
              observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
            }
          });
        });
        observer.observe(element);
      }
      animFooter(img_footer1);
      animFooter(img_footer2);
      animFooter(link_footer1);
      animFooter(link_footer2);
    </script>
</footer>