

 
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
	<br>
@include('component.navSimple')
    <h1 style="margin-top: -25px;">Commentaire</h1>

<div class="w3ls-login box box--big" style="margin-top: -50px;">
		<!-- form starts here -->
		<form action="{{ url('comme', $testimoniale->id) }}" method="Post">
        @csrf
			<div class="agile-field-txt">
				<label><i class="fa fa-enveloppe" aria-hidden="true"></i> </label>
                <textarea name="commentaire" id="commentaire" class="form-control @error('commentaire') is-invalid @enderror" cols="30" placeholder="Veuillez saisir votre commentaire" value="{{ old('commentaire') }}" rows="10">
                </textarea>
				@error('commentaire')
      			<div class="invalid-feedback">
      			{{ $commentaire }}
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
	<!-- //form ends here -->
	<!--copyright-->
	
	<!--//copyright-->
</body>
</html>




	

          



















            