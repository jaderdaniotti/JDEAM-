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

