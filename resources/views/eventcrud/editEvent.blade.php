<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>M.ra Event</title>
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
  <body class="text-center">
    
  
<div class="w3ls-login box box--big" style="margin-top: -50px;">
		<!-- form starts here -->
		<form action="{{ route('updateEvent',$budget->id) }}" method="POST">
        @csrf
      @method('PUT')
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Titre </label>
				<input type="text" class="form-control @error('titre') is-invalid @enderror" value="{{ $budget->evenement->titre }}" id="titre"  name="titre" placeholder="Veuillez entrer le titre de l'evenement" required="" />
				@error('titre')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Date </label>
				<input type="date" class="form-control @error('date') is-invalid @enderror" value="{{ $budget->evenement->date }}" id="date" name="date" placeholder="Veuillez entrer la date de l'evenement" required="" />
				@error('date')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Lieu </label>
				<input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $budget->evenement->lieu }}" id="lieu" name="lieu" placeholder="Veuillez entrer le lieu de l'evenement" required="" />
				@error('lieu')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-tel-alt" aria-hidden="true"></i> Nombre d'invité </label>
				<input type="number" class="form-control @error('nombre_invite') is-invalid @enderror" value="{{ $budget->evenement->nombre_invite }}" id="nombre_invite" name="nombre_invite" placeholder="Veuillez entrer le nombre d'invité" required=""/>
				@error('nombre_invite')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>

            <div class="agile-field-txt">
				<label><i class="fa fa-tel-alt" aria-hidden="true"></i> Presisez votre budget </label>
				<input type="number" class="form-control @error('entres') is-invalid @enderror" value="{{ $budget->entres }}" id="entres" name="entres" placeholder="Veuillez Presiser votre budget" required="" />
				@error('entres')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>

			<div class="agile-field-txt">
				<label><i class="fa fa-tel-alt" aria-hidden="true"></i> Description </label>
				<!-- <input type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('description') }}" id="description" name="description" placeholder="Veuillez decrire l'evenement" required="" /> -->
                <textarea name="description" id="" class="form-control @error('numero') is-invalid @enderror" cols="30" value="{{ $budget->evenement->description }}" rows="10">

                </textarea>
				@error('numero')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
      
			</div>
            <input type="submit" value="Valider">

			<!-- script for show password -->
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
***



<script src="{{ asset('assets/dist/js/script.js') }}"></script>
  </body>
</html>
