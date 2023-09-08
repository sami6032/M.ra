<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title> M.ra Event</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="/frontend/css/font-awesome.css" rel="stylesheet">
	<link href="/frontend/css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
	<link rel="stylesheet" href="stylenav/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}"  type="image/x-icon">
</head>

<body>
<div><img class="im" src="public/im.jpg" alt=""></div>
@include('component.navbar')
    <h1>Inscrivez-vous</h1>

<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="{{ route('manager.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Nom </label>
				<input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom"  name="nom" placeholder="Veuillez entrer votre nom" required="" />
				@error('nom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Prenom </label>
				<input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom" name="prenom" placeholder="Veuillez entrer votre prenom" required="" />
				@error('prenom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Email </label>
				<input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Veuillez entrer votre email" required="" />
				@error('email')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
        <div class="agile-field-txt">
				<label><i class="fa fa-phone" aria-hidden="true"></i> Numero </label>
				<input type="number" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') }}" id="numero" name="numero" placeholder="Veuillez saisir votre numero de téléphone" required="" />
				@error('numero')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Photo de profil </label>
				<input type="file" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" id="photo" name="photo" placeholder="Veuillez selectionner une photo de profil" required="" />
				@error('photo')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
      
			<div class="agile-field-txt">
				<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mot de passe</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" name="password" placeholder="Enter votre mot de passe" required="" id="myInput" />
				@error('password')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Aficher le mot de passe</label>
				</div>
				<div class="agile-right">
					<a href="/login">Deja un compte? Se connecter</a>
				</div>
			</div>
          <input type="submit" value="Inscription">

			<!-- script for show password -->
			<script src="stylenav/nav.js"></script>
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	
	<!--//copyright-->
</body>
</html>




	

          



















            