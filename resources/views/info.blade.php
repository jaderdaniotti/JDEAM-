<x-layout>
    <div class="torna-su">
        <a href="#" id="tornaSuBtn" class="btn "><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('tornaSuBtn').style.display = 'none';
        })
        window.onscroll = function() {
        if ( document.documentElement.scrollTop > 80) {
            document.getElementById("tornaSuBtn").style.display = "block";
        } 
        else {
            document.getElementById("tornaSuBtn").style.display = "none";
        }
        };
        
        document.getElementById("tornaSuBtn").onclick = function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>

    <div class="container-fluid pagina-info p-0">
        <div class="container-fluid pagina-info">
            <ol class="info-ul mt-3">
                <li class="info-li">Idea di JDeam</li>
                <li class="info-li">Gestione Frontend</li>
                <li class="info-li">Gestione backend</li>
                <li class="info-li">Gestione Database / API</li>
            </ol>
        </div>
        <section class="idea-div-info text-white mt-3 p-3 bg-section-fonce">
            <h2 class="fs-1 text-center">Idea di JDeam</h2>
            <span class="fs-4">L'idea di JDeam è nata per creare un progetto che espone una lista di giochi gratuiti. L'utente può registrarsi fornendo foto profilo, nickname e password, e successivamente cercare i giochi tramite la barra di ricerca o filtrarli per categoria.<br>
                Se interessato, dopo aver effettuato l'accesso, l'utente può salvare i giochi in una lista di preferiti, accessibile dalla propria area personale, oppure visitare il sito ufficiale del gioco cliccando sul link presente nella pagina di dettaglio. In quest'ultima, oltre al link, troverà informazioni sul gioco, schermate e requisiti minimi (se forniti dallo sviluppatore).<br>
                Questo sito è stato creato unicamente con lo scopo di mostrare le mie competenze a livello di sviluppo web.<br>
                Se sei interessato a contattarmi per collaborare, troverai il form di contatto e il numero di telefono nella sezione apposita, raggiungibile cliccando <a href="{{ route('contact') }}">qui</a>.
            </span>
        </section>
        <section class="frontend-div-info text-white p-3 bg-navbar">
            <h2 class="fs-1 text-center">Gestione frontend</h2>
            <span class="fs-4">
                <p>
                    Il frontend è stato sviluppato utilizzando Laravel Blade e Livewire per la gestione dinamica dei contenuti.
                    L'interfaccia utente è strutturata con HTML e stilizzata tramite CSS, sfruttando la reattività e i componenti di
                    <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank" rel="noopener noreferrer">Bootstrap</a>
                    e le animazioni di
                    <a href="https://animate.style/" target="_blank" rel="noopener noreferrer">Animate.css</a>.
                    L'effetto di digitazione è implementato con la libreria leggera
                    <a href="https://mattboldt.com/demos/typed-js/" target="_blank" rel="noopener noreferrer">Typed.js</a>.
                </p>
                <p>
                    Il design visivo impiega i font
                    <span style="font-family: 'Darker Grotesque', sans-serif;">Darker Grotesque</span> e
                    <span style="font-family: 'Agdasima', sans-serif;">Agdasima</span>, con una palette di colori che include
                    <span style="background-color: #171D25; color: #fff; padding: 0.1em 0.3em; border-radius: 3px;">#171D25</span>,
                    <span style="background-color: #203154; color: #fff; padding: 0.1em 0.3em; border-radius: 3px;">#203154</span>,
                    <span style="background-color: #1B2838; color: #fff; padding: 0.1em 0.3em; border-radius: 3px;">#1B2838</span>,
                    <span style="background-color: #b92b27; color: #fff; padding: 0.1em 0.3em; border-radius: 3px;">#b92b27</span> e
                    <span style="background-color: #1565C0; color: #fff; padding: 0.1em 0.3em; border-radius: 3px;">#1565C0</span>.
                </p>
                <p>
                    Nella pagina
                    <a href="{{ route("apigames.index") }}" target="_blank" rel="noopener noreferrer">Giochi</a>,
                    l'elenco dei prodotti è dinamicamente generato tramite il motore di templating
                    <a href="https://laravel.com/docs/12.x/blade" target="_blank" rel="noopener noreferrer">Blade</a>,
                    mentre le funzionalità di filtraggio interattivo sono gestite con
                    <a href="https://livewire.laravel.com/" target="_blank" rel="noopener noreferrer">Livewire</a>,
                    offrendo un'esperienza utente reattiva e performante.
                </p>
                <p>
                    Per garantire un design responsivo e un'interfaccia utente curata, il progetto si avvale del framework
                    <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank" rel="noopener noreferrer">Bootstrap</a>,
                    che include anche la sua libreria di
                    <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener noreferrer">Icone</a>
                    per elementi grafici scalabili e di alta qualità.
                </p>
            </span>
        </section>
        <section class="backend-div-info text-white  p-3 bg-section-fonce">
            <h2 class="fs-1 text-center">Gestione backend</h2>
            <span class="fs-4">
                <p class="fs-4">
                    Il backend è gestito da
                    <a href="https://laravel.com/docs/9.x" target="_blank" rel="noopener noreferrer">Laravel</a>,
                    un framework PHP open source che offre un'architettura robusta e un'ampia gamma di funzionalità per lo sviluppo efficiente.
                </p>
                <p class="fs-4">
                    L'implementazione del sistema utente si basa su
                    <a href="https://laravel.com/docs/9.x/fortify" target="_blank" rel="noopener noreferrer">Laravel Fortify</a>,
                    un pacchetto headless per l'autenticazione. Questo fornisce una base sicura e flessibile per la gestione degli utenti,
                    inclusa la registrazione (con nickname, foto profilo, email, password e ruolo), e la successiva modifica tramite
                    @auth
                        <a href="{{ route('profile', Auth::user()->id) }}" target="_blank" rel="noopener noreferrer">l'Area personale</a>.
                    @endauth
                    @guest
                        <a href="{{ route('register') }}" target="_blank" rel="noopener noreferrer">l'Area personale</a>.
                    @endguest
                </p>
                <p class="fs-4">
                    La gestione dei contatti tramite form utilizza
                    <a href="https://mailtrap.io/home" target="_blank" rel="noopener noreferrer">Mailtrap</a>,
                    un servizio di email testing che simula un server SMTP per intercettare e ispezionare le email in fase di sviluppo,
                    garantendo un testing sicuro e affidabile delle funzionalità di invio.
                </p>
            </span>
        </section>
        <section class="API-div-info text-white  p-3 bg-navbar">
            <h2 class="fs-1 text-center">Gestione API</h2>
            <span class="fs-4">
                <p class="fs-4">
                    Le API dei giochi sono state integrate tramite
                    <a href="https://www.freetogame.com/api/games" target="_blank" rel="noopener noreferrer">FreeToGame API</a>,
                    una risorsa online che fornisce un elenco aggiornato di giochi free-to-play per diverse piattaforme.
                </p>
                <p class="fs-4">
                    I dati ottenuti sono stati persistiti in un database
                    <a href="https://www.mysql.com/it/" target="_blank" rel="noopener noreferrer">MySQL</a>,
                    un sistema di gestione di database relazionale open source ampiamente utilizzato per la sua affidabilità e scalabilità,
                    attraverso l'utilizzo di seeders di Laravel. Questo approccio garantisce la disponibilità continua dei dati all'interno del sistema.
                </p>
                <p class="fs-4">
                    Per l'esposizione dei dati nel frontend JavaScript, è stata implementata una rotta API dedicata in Laravel.
                    Questa rotta restituisce una risposta
                    <a href="https://www.json.org/json-en.html" target="_blank" rel="noopener noreferrer">JSON</a>
                    (JavaScript Object Notation), un formato leggero per lo scambio di dati, contenente i dati dei giochi presenti nel database,
                    consentendo un recupero efficiente tramite la funzione <code>fetch</code> in JavaScript.
                </p>
                <p class="fs-4">
                    Per la generazione di dati utente di test, è stata utilizzata la libreria
                    <a href="https://fakerphp.org/third-party/" target="_blank" rel="noopener noreferrer">Faker</a>,
                    uno strumento PHP che permette di generare dati fittizi realistici.
                    Attraverso dei seeders, sono stati creati 200 utenti fittizi per popolare il sistema durante lo sviluppo.
                </p>
            </span>
        </section>

    </div>

</x-layout>