import './bootstrap';
import 'bootstrap';
function searchFunction(){
    let SearchInput = document.getElementById('searchInput');
    let gameCards = document.querySelectorAll('.card, .gamecard');
    let gametitle = document.querySelectorAll('.card .card-title, .gamecard .card-title');
    let filter = SearchInput.value.toUpperCase();
    for (let i = 0; i < gametitle.length; i++) {
        span = gametitle[i].getElementsByTagName("span")[0];
        txtValue = span.textContent || span.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            gameCards[i].style.display = "";
        } else {
            gameCards[i].style.display = "none";
        }
    };
}

const apigames = await fetch("http://localhost:8000/api/games")
    .then(response => response.json())
    .catch(error => console.error(error));
    console.log(apigames);

const urlcategories = await fetch("http://localhost:8000/api/categories")
    .then(response => response.json())
    .catch(error => console.error(error));
    // console.log(urlcategories);

const SEARCHINPUTNAVBAR = document.getElementById('searchInput');
const DIVSEARCHEDGAMES = document.getElementById('risultatiRicerca');
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
                <a href="">
                    <img src="${game.thumbnail}" alt="" class="img-gameThumbnail rounded">
                </a>
                <a href="">
                    <h6 class="h6-gameThumbnail">${game.title}</h6>
                </a>
                </div>
              `;
                DIVSEARCHEDGAMES.appendChild(gameDiv);
            }
        });
        if (DIVSEARCHEDGAMES.innerHTML === '') {
            DIVSEARCHEDGAMES.classList.add('d-none');
        }
    } else {
        DIVSEARCHEDGAMES.classList.add('d-none');
    }
});
