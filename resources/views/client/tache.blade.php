

 
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
</head>

<body>
    <h1 style="margin-top:150px;"><strong>Listez toutes vos taches un a un</strong> </h1>

<div class="w3ls-login box box--big" style="margin-top: -50px;">
		<!-- form starts here -->
		<form action="{{ route('tache') }}" method="Post">
            @csrf
			<div class="agile-field-txt">
				<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Tache </label> -->
				<input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom"  name="nom" placeholder="Veuillez entrer la tache" required="" />
				@error('nom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <input type="submit" value="Valider">
           
			<!-- //end script -->
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	
	<!--//copyright-->
</body>
</html>




	

          



















            