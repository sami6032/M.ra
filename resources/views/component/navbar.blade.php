<nav class="nav1 ">
        <div style="width: 95px; margin-top:20px; margin-left:40px">
            <img width="95px" src="frontend/images/LOGO.png" alt="Logo Image">
        </div>
        <div class="hamburger hamb">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links manav">
            <li><a href="{{ route('accueilClient') }}">Accueil</a></li>
            <li><a href="{{ route('accueilClient') }}">SERVICES</a></li>
            <li><a href="{{ route('ajoutevent') }}">Event</a></li>
            <li><a href="{{ route('ajoutache') }}">Taches</a></li>
            <li><a href="{{ route('listeEvent') }}">liste des evenements</a></li>
            <li><a href="{{ route('accueilClient') }}">Contact</a></li>
            <li><form class="d-flex" role="search">
                <input class="form-control me-2 bdr" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success bdr1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
              </form></li>
        </ul>
    </nav>