<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1>Movies</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page"
                            href="#">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('home')) active @endif" href="#">Categorie</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row row-cols-3 my-4 g-2">
            <div class="col">
                <ul class="list-group rounded">
                    <li class="list-group-item">
                        <h3 class="text-center">Title</h3>
                    </li>
                    <li class="list-group-item">
                        <h5>Diretto da: <strong>Director</strong></h5>
                    </li>
                    <li class="list-group-item">
                        <h4>Uscita: Year</h4>
                    </li>
                    <li class="list-group-item">
                        <p>Genere Film: <strong>Genre</strong></p>
                    </li>
                    <li class="list-group-item">
                        <h5>Colonna sonora di: <strong>Music</strong></h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
