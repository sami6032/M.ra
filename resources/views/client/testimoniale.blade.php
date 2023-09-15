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
  </header><!-- End Header -->

  <div class="section-header text-center">
<img src="{{asset('frontend/images/web.png')}}" class="d-block-center " style="width: 100%; ;height: auto;" alt="...">
</div>
  <main id="main">
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
      @foreach($testimoniales as $testimoniale)
        <div class="row">
          <div class="col-lg-6-center " data-aos="fade-up">
          
            <div class="testimonial-item">
            
              <img src="{{ asset('storage/picture/' . $testimoniale->user->photo) }}" class="testimonial-img" alt="">
              <h3>{{ $testimoniale->user->nom }} {{ $testimoniale->user->prenom }}</h3>
              
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $testimoniale->message }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                <div class="read-more">
                  <button style="width: 130px; height:35px; background: #f8f6f5;border-color:#f8f6f5;"><a href="">Commentaires +</a></button>
                </div>
              </p>
            </div>
            
          </div>

        </div>
        @endforeach

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

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