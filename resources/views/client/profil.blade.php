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
  <link href="assetes/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assetes/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetes/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetes/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetes/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetes/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetes/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="mn css/style.css">
  <link rel="stylesheet" href="mn css/evenementiel.css">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
  <link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />

  <!-- Template Main CSS File -->
  <link href="assetes/css/style.css" rel="stylesheet">
  <link href="responsive.css"  rel="stylesheet">
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
        <i class="bi bi-envelope d-flex align-items-center ms-4"><span><a href="{{ route('chatify') }}">chats privés</a></span></i>
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

      <div class="">
        <h1 class="text-light"><a href="index"><img style="width: 50px;" src="frontend/images/LOGO.png" alt="Logo Image"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="active" href="{{ route('index') }}">Accueil</a></li>
          <li><a  href="{{ route('service') }}">SERVICES</a></li>
          
          <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  
                </ul>
              </li> -->
          
         
          <!-- <li><a href="pricing.html">Pricing</a></li>-->
          <li><a href="{{ route('Testimoniale') }}">Testimoniales</a></li> 
          <li><a href="{{ route('article_blog') }}">Blog</a></li>
          <li class="dropdown"><a href="#"><span>avenements</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>Nouvel évènement</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('ajoutache') }}">Lister toutes vos taches</a></li>
                  <li><a href="{{ route('ajoutevent') }}">Creer votre évènement</a></li>
                 
                  
                </ul>
              </li>
              
              <li class="dropdown"><a href="#"><span>Impliquer un expert</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('chatify') }}">Discuter avec l'admin </a></li>
                 
                  
                </ul>
              </li>
              <li class="dropdown"><a href="{{ route('listeEvent') }}"><span>Mes évènements</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('listeTache') }}">Liste des taches</a></li>
                  <li><a href="{{ route('gererTache') }}">Gestion des taches</a></li>
                  <li><a href="{{ route('gererBudget') }}">Gestion des depenses</a></li>
                  <li><a href="{{ route('gererParticipant') }}">Gestion des invitations</a></li>
       
                 
                  
                </ul>
              </li>
              
              <!-- <li><a href="#">Drop Down 2</a></li> -->
              
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li>
                        @guest
                            @if (Route::has('login'))
                        <a href="{{ route('login') }}"> <span><button style="width: 100px; height:35px; background: #1D1613; color:white ; border-color:transparent; " >Connexion</button></span> </a>
                        
                        <!-- <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="{{ route('login') }}">Connexion</a>
                        </div> -->
                        @endif

                        
                       
                        @else
                        <!-- <a href="" class="login"><i></i>{{ Auth::user()->name }} </a> -->
                     <li>   <a href="{{ route('profil') }}"> 
                      <span>
                      <i class="fa fa-user"></i>
                     @auth

                        <img src="{{ asset('storage/picture/' . Auth::user()->photo) }}" class="testimonial-img" alt="" style="width: 50px; height:50px;border-radius: 100%;"; >

                     <!-- <div class="nav-profile-image">
                     <img src="{{ asset('storage/picture/' . Auth::user()->photo) }}" class="testimonial-img" alt="" style="width: 50px;"; >
                  <span class="login-status online"></span>
                  change to offline or busy as needed
                </div>
                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                    @endauth -->
                   </a></li>
                       <li> <a href="{{ route('logout') }}"> <span><button style="width: 100px; height:35px; background: rgb(230 45 54);color:white ;border-color:transparent;  " >Deconnexion</button></span> </a></li>
                          @csrf
                         </form>
                         @endguest
             </li>
             
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

    </div>
  </header>
        <!-- Page Header section start here -->
        <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- instructor Single Section Starts Here -->
    <section class="instructor-single-section padding-tb section-bg">
		<div class="container">
			<div class="instructor-wrapper">
				<div class="instructor-single-top">
					<div class="instructor-single-item d-flex flex-wrap" style="gap: 200px;">
						<div class="instructor-single-thumb">
							<img src="{{ asset('storage/picture/' . Auth::user()->photo) }}" class="testimonial-img" alt="" style="width: 500px;"; >
						</div>
						<div style="display: flex; flex-direction:column;">
						<p class="ins-dege">Mes informations</p>
						
						<div class="instructor-single-content">
							
							
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">Email : </span>
									<span class="list-attr">{{ Auth::user()->email }}</span>
								</li>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">Phone : </span>
									<span class="list-attr">{{ Auth::user()->numero }}</span>
								</li>
								
						
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- instructor Single Section Ends Here -->

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