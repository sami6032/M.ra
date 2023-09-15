
<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title> Ajouter un invité</title>
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
	<link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />
</head>

<body>
<div><img class="im" src="public/im.jpg" alt=""></div>
@include('component.navSimple') <br><br>
    <h1 style="margin-top: -25px;">Invitation</h1>

<div class="w3ls-login box box--big" style="margin-top: -50px;">
		<!-- form starts here -->
		<form action="{{ route('participant.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Nom </label>
				<!--  -->
				<input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom"  name="nom" placeholder="Veuillez entrer le nom de l'invité" required="" />
				@error('nom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Prenom </label>
				<input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom"  name="prenom" placeholder="Veuillez entrer le prenom de l'invité" required="" />
				@error('prenom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            
			<div class="form-floating" style="width: 100%;">
		<label for="" > Choisir l'evenement correspondante </label>
    <select class="form-control @error('evenement') is-invalid @enderror" id="evenement_id" name="evenement_id" style="background-color: black ;" >
      @foreach($evenements as $evenement)
      <option value="{{ $evenement->id }}">{{ $evenement->titre }}</option>
      @endforeach
    <!-- Ajoutez plus d'options ici si nécessaire -->
    </select>
      
      @error('evenement')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror

     
	</div> 
            <input style="margin-top:30px"; type="submit" value="Valider">

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




	

          



















            