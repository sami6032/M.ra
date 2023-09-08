<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
	<link rel="stylesheet" href="stylenav/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}"  type="image/x-icon">
</head>
</head>
<body>
<div><img class="im" src="public/im.jpg" alt=""></div>
	@include('component.navbar')<br><br><br><br>
    <div class="img_head" class="container-fluid"><img class="imm" src="images/pexels-george-milton-7014337.jpg"
      class="img-fluid" alt="...">
  </div>
  <div class="container text-center">
    <p>
    <h1><strong>SOYEZ LES BIENVENUS A M.ra Mark</strong></h1>
    </p>
    <p>
    <h5>C'est un plaisir pour nous de vous compter parmis nous et sachez que vous etes au bon endroit car pour vous
      faire plaisir nous réalisons ce que vous pensez etre irréalisable</h5>
    </p>
  </div>
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img class="ima" src="images/beach-3258642_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="ima" src="images/cake-845749_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="ima" src="images/christmas-1217252_1280.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="ima" src="images/happy-birthday-3925930_1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="ima" src="images/pexels-william-fortunato-6393357.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="ima" src="images/istockphoto-1141494010-1024x1024.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="footer">
    <p class="foot1">A M.ra Mark, nous mettons à votre service, autant d'amour que d'attention.Alors n'hésitez pas à
      nous contacter car vous serez satisfait </p>
    <p class="foot2"><a class="l1" href="">MERCI</a> pour la <a class="l1" href="">VISITE</a></p>
  </div>

    <script src="stylenav/nav.js"></script>
</body>
</html>