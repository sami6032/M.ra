<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.ra Event</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/oif.png') }}"  type="image/x-icon">


   
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    
   
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
    
   
    <!-- copie -->
    


</head>



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
            <!-- <li><form class="d-flex" role="search">
                
                <input class="form-control me-2 bdr" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success bdr1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
              </form></li> -->
             <li>
                        @guest
                            @if (Route::has('login'))
                        <a href="{{ route('login') }}"> <span>Connexion</span> </a>
                        @endif

                        @if (Route::has('registerClient'))

                        <a href="{{ route('registerClient') }}"><span>Inscription</span> </a>
                        @endif
                        <br>
                        @else
                        <a href="{{ route('index') }}">{{ Auth::user()->name }} </a>
                        <a href="{{ route('logout') }}"><i onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                         </form>
                         @endguest
             </li>
        </ul>
    </nav>