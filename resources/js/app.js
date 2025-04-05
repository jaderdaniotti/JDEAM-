import './bootstrap';
import 'bootstrap';
// function searchFunction(){
//     let SearchInput = document.getElementById('searchInput');
//     let gameCards = document.querySelectorAll('.card, .gamecard');
//     let gametitle = document.querySelectorAll('.card .card-title, .gamecard .card-title');
//     let filter = SearchInput.value.toUpperCase();
//     for (let i = 0; i < gametitle.length; i++) {
//         span = gametitle[i].getElementsByTagName("span")[0];
//         txtValue = span.textContent || span.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             gameCards[i].style.display = "";
//         } else {
//             gameCards[i].style.display = "none";
//         }
//     };
// }


//chiamata games e category
let apigames = await fetch("http://localhost:8000/api/games")
    .then(response => response.json())
    .catch(error => console.error(error));
    // console.log(apigames);

let urlcategories = await fetch("http://localhost:8000/api/categories")
    .then(response => response.json())
    .catch(error => console.error(error));
    // console.log(urlcategories);


//chiamata input e div giochi trovati
const SEARCHINPUTNAVBAR = document.getElementById('searchInput');
const DIVSEARCHEDGAMES = document.getElementById('risultatiRicerca');
//funzione giochi trovati
SEARCHINPUTNAVBAR.addEventListener('keyup', function() {
    let searchResult = SEARCHINPUTNAVBAR.value.toLowerCase();
    DIVSEARCHEDGAMES.innerHTML = ''; // Pulisci i risultati precedenti
    if (searchResult.length > 0) {
        DIVSEARCHEDGAMES.classList.remove('d-none');
        apigames.forEach(game => {
             game.title = game.title.toLowerCase();
            if (game.title.includes(searchResult)) {
                let gameDiv = document.createElement('div');
                gameDiv.classList.add();
                gameDiv.innerHTML = `
                <div class="row align-items-center">
                <div class="col-6 d-flex justify-content-end"
                <a href="">
                    <img src="${game.thumbnail}" alt="" class="img-gameThumbnail rounded">
                </a>
                </div>
                <div class="col-6">
                <a href="">
                    <h6 class="h6-gameThumbnail">${game.title}</h6>
                </a>
                </div>
                </div>
              `;
                DIVSEARCHEDGAMES.appendChild(gameDiv);
            }

        });
        if (DIVSEARCHEDGAMES.innerHTML === '' && searchResult.length > 0) {
            DIVSEARCHEDGAMES.innerHTML = `
            <div class="alert alert-danger" role="alert">
                Nessun risultato trovato
            </div>
            `;
        }
        if (DIVSEARCHEDGAMES.innerHTML === '') {
            DIVSEARCHEDGAMES.classList.add('d-none');
        }
    } else {
        DIVSEARCHEDGAMES.classList.add('d-none');
    }
});

//funzione creazione card
function createCard(games){
    const INDEXGAMES = document.getElementById('index-games');
    games.forEach(game => {
        let gameDiv = document.createElement('div');
        gameDiv.classList.add('col-12', 'col-md-6', 'col-lg-4', 'gamecard', 'product');
        gameDiv.innerHTML = `
                  <img src="${game.thumbnail}" class="card-img-top" alt="...">
                  <div class="card-body text-center container p-2">
                    <div class="row">
                      <h5 id="gametitle" class="card-title uppercase"><span class="agdasima-regular">${game.title}</span></h5>
                    </div>
                      <h5 id="gametitle" class="card-title description-card"><span class="agdasima-regular ">${game.short_description}</span></h5>
                    <h6 id="gametitle" class="cardgame-genre " genre="${game.genre}"><span class="agdasima-regular genre btn">${game.genre}</span></h6>
                    <hr class="w-25 mx-auto">
                    <a href="" class="btn btn-submit">Vedi</a>
                  </div>
                  <hr class="my-2">
        `;
        console.log("gioco creato")
        INDEXGAMES.appendChild(gameDiv);
    });
}

//chiamata checkbox
const checkboxes = document.querySelectorAll('.checkboxcategory');
let cardApigames = document.querySelectorAll('.gamecard');
let indexgames = document.getElementById('index-games');

checkboxes.forEach(checkbox => {
  checkbox.addEventListener('click', () => {
    if (checkbox.checked) {
      cardApigames.forEach(card=>{
        card.style.display = 'none';
      })
      apigames = apigames.filter(game => {
        return game.genre.toLowerCase() === checkbox.value.toLowerCase();
      })
      console.log(apigames);
        createCard(apigames);
      
    } else {
        console.log('Checkbox non selezionato');
        apigames;
        cardApigames.forEach(card=>{
            card.style.display = 'block';
          })
    }
  });
});






