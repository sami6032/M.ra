<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>M.ra Event</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />
  <link href="{{ asset('assetes/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetes/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('mn css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('mn css/evenementiel.css') }}">
  <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
  <link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />

  <!-- Template Main CSS File -->
  <link href="assetes/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">maigasamira6@gmail.com</a></i>
        <i class="bi bi-phone color-danger d-flex align-items-center ms-4"><span>+226 76 69 63 13</span></i>
        <i class="bi bi-envelope d-flex align-items-center ms-4"><span>chats privés</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><img width="95px" src="frontend/images/LOGO.png" alt="Logo Image"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="active" href="{{ route('index') }}">Accueil</a></li>
          <li><a href="">SERVICES</a></li>
          
          <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  
                </ul>
              </li> -->
          
          <li><a href="{{ route('listeEvent') }}">Mes evenements</a></li>
          <!-- <li><a href="pricing.html">Pricing</a></li>-->
          <li><a href="portfolio.html">Testimonials</a></li> 
          <li><a href="{{ route('article_blog') }}">Blog</a></li>
          <li class="dropdown"><a href="#"><span>evnements</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>Le gerer moi meme</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('ajoutache') }}">Lister toutes vos taches</a></li>
                  <li><a href="{{ route('ajoutevent') }}">Creer votre evenement</a></li>
                 
                  
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Le gerer partiellement</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Veuillez remplir ce champs</a></li>
                 

                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Le Confier à des experts</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Discuter directement avec l'admin par le chat privé </a></li>
                 
                  
                </ul>
              </li>
              
              <!-- <li><a href="#">Drop Down 2</a></li> -->
              
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li>
                        @guest
                            @if (Route::has('login'))
                        <a href="{{ route('login') }}"> <span><button style="width: 100px; height:35px; background: #f8f6f5;border-color:#f8f6f5;  " >Connexion</button></span> </a>
                        @endif

                        
                       
                        @else
                        <a href="{{ route('logout') }}"> <span><button style="width: 100px; height:35px; background: #f8f6f5;border-color:#f8f6f5;  " >Deconnexion</button></span> </a>
                          @csrf
                         </form>
                         @endguest
             </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

    </div>
  </header><br><br>
  <div class="container">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Liste des taches</h4>
            <th><a href="{{ route('ajoutache') }}" class="btn btn-success">Creer des taches</a></th>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th>titre</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach ($taches as $tache)

                  <tr>
                    <td>{{ $tache->nom }}</td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br><br>
    <div class="container">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Nommer des responsables à vos taches</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>

                    <th>titre</th>
                    <th>date</th>

                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($evenements as $evenement)

                  <tr>
                    <td>{{ $evenement->titre }}</td>
                    <td>{{ $evenement->date }}</td>
                    <td>
                      <a href="{{ route('assignTache', $evenement->id) }}" class="btn btn-success">Assigner des taches</a>


                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </table>
  </div>
  <br><br><br>
  <div class="container">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Gestion des taches attribué</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>

                  <th>titre</th>
                  <th>responsable</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($assign_taches as $assign_tache1)
                <tr>
                  <td>{{ $assign_tache1->tache->nom }}</td>
                  <td>{{ $assign_tache1->responsable }}</td>
                  <td>

                    @if($assign_tache1->confirmed == 0)
                    <a href="{{ route('confirm',$assign_tache1) }}">
                      <button type="submit" class='btn btn-danger'>A faire</button>
                    </a>
                    @else

                    <a href="{{ route('noConfirm',$assign_tache1) }}">
                      <button type="submit" class='btn btn-success'>Faits</button>
                    </a>
                    @endif

                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<br><br>
  <div class="container">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Liste des evenements</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  
                  <th>titre</th>
                  <th>date</th>
                  <th>lieu</th>
                  <th>description</th>
                  <th>nombre_invite</th>
                  <th>budget</th>
                  <th></th>
                  <th></th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($budgets as $budget)

                <tr>

                  
                  <td>{{ $budget->evenement->titre }}</td>
                  <td>{{ $budget->evenement->date }}</td>
                  <td>{{ $budget->evenement->lieu }}</td>
                  <td>{{ $budget->evenement->description }}</td>
                  <td>{{ $budget->evenement->nombre_invite}}</td>
                  <td>{{ $budget->entres }}</td>
                  <td>{{ $budget->sorties }}</td>
                  <td>{{ $budget->reste }}</td>

                  <td>
                    <a href="{{ url('detail/'.$evenement->id)}}" class="btn btn-success">Afficher</a>
                    <a href="{{ route('edit', $evenement) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('destroy.event', $evenement->id) }}" style="display: inline;">

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet evenement ?')">Supprimer</button>
                    </a>

                  </td>


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<br><br>
  <div class="container">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Liste des invités</h4>
          <th><a href="{{ route('ajoutinvite') }}" class="btn btn-success">Ajouter un invité</a></th>

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($participants as $participant)

                <tr>
         
                  <!-- <td>{{ $participant->evenement_id}}</td>
                  <td>{{ $participant->user_id}}</td> -->
                  <td>{{ $participant->nom }}</td>
                  <td>{{ $participant->prenom }}</td>
                  <td>{{ $participant->reste }}</td>

                  <td>
                    <a href="" class="btn btn-success">Carte d'invitation</a>
                    <a href="" class="btn btn-primary">Telecharger</a>
                    <a href="" class="btn btn-danger">Accepté</a>
                    <!-- <a href="" style="display: inline;">

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet evenement ?')">Supprimer</button>
                    </a> -->

                  </td>


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  </table>
   <br>


 
  </div>
  </div>

  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>M.ra Mark</h3>
           
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Marketing</h4>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Evenementiel</h4>
           
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Laisser un commentaire</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>M.ra Event</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          Designed by <a href=""> M.ra Mark</a>
        </div>
      </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetes/vendor/aos/aos.js"></script>
  <script src="assetes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetes/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetes/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetes/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetes/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assetes/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetes/js/main.js"></script>

</body>

</html>