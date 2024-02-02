"use strict"
var contenedor = document.getElementById("resultados");
var textDiv = '';
// consume el servicio de pokeapi con Fetch
window.addEventListener("load", function() {
    fetch("https://pokeapi.co/api/v2/pokemon?limit=50&offset=0")
        .then(data => data.json())
        .then(data => {
            console.info(data.results);
            // recorre el objeto consumido
            data.results.map((pokemon, i) => {
                // cada vez que se itera se agrega al DOM
                addPokemon(pokemon.url);
            })
        })
});

// Funcion para consumir un pokemon desde la url obtenida 
function addPokemon(url) {
    fetch(url)
        .then(data => data.json())
        .then(data => {
            console.info(data);
            mostrarPokemon(data);
        })
}
// Funcion para agregar un pokemon al DOM 
function mostrarPokemon(pokemon) {
    textDiv += '<div class="col-md-4"><div class="card" ><img class="card-img-top" src="' + pokemon.sprites.front_default + '" alt="Card image"><div class="card-body"><h4 class="card-title">' + pokemon.name + '</h4><p class="card-text">Some example text.</p><a href="perfil.php?id=' + pokemon.id + '" class="btn btn-primary">Ver pokemon</a></div></div></div>';
    contenedor.innerHTML = textDiv;
}