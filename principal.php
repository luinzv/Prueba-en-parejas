<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/styles-home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid navbars">
            <a class="navbar-brand" href="#">
                <img src="src/logo-page-pokedex.png" alt="logo pokemon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active background-nav" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item background-nav">
                        <a class="nav-link" href="#">NOTICIAS</a>
                    </li>
                    <li class="nav-item background-nav">
                        <a class="nav-link" href="#">NOVEDADES</a>
                    </li>
                </ul>
                <div class="d-flex container-ingresar">
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle container-register text-white" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="svg/menu_icon.svg" alt="icon">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="index.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid body-part">
        <div class="row">
            <div class="col-12">
                <div id="pokemon-cards" class="row g-4">

                </div>
            </div>
        </div>
    </div>

    <script>
        async function fetchPokemon() {
            const container = document.getElementById('pokemon-cards');
            for (let i = 1; i <= 12; i++) {
                try {
                    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${i}`);
                    const data = await response.json();
                    createCard(data, container);
                } catch (error) {
                    console.error("Error al obtener el Pokémon:", error);
                }
            }
        }

        function createCard(pokemon, container) {
            const card = document.createElement('div');
            card.className = 'col-md-3';
            card.innerHTML = `
                <div class="card">
                    <img src="${pokemon.sprites.front_default}" class="card-img-top" alt="${pokemon.name}">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">${pokemon.name}</h5>
                        <p class="card-text">
                            <strong>Altura:</strong> ${pokemon.height / 10} m<br>
                            <strong>Peso:</strong> ${pokemon.weight / 10} kg
                        </p>
                        <a href="#" class="btn btn-danger text-white">Más detalles</a>
                    </div>
                </div>
            `;
            container.appendChild(card);
        }

        document.addEventListener('DOMContentLoaded', fetchPokemon);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
