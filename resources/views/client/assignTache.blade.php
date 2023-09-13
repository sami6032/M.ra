

 
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
    <h1 style="margin-top: -25px;">Evenement</h1>
    <h1 style="margin-top:50px;"><strong>Assigner un responsable aux taches citées</strong> </h1>
<div class="w3ls-login box box--big" style="margin-top: -50px;">

<!-- form starts here -->
		<form action="{{ route('assign' )}}" method="Post">
            @csrf
			<label for="" > Responsable </label>
            <input type="hidden" value="{{ $evenement->id }}" name='evenement'>
			<div class="agile-field-txt">
				<!-- <label><i class="fa fa-user" aria-hidden="true"></i> Tache </label> -->
				<input type="text" class="form-control @error('responsable') is-invalid @enderror" value="{{ old('responsable') }}" id="responsable"  name="responsable" placeholder="Veuillez entrez le nom du responsable" required="" style="background-color: black ;" />
				@error('responsable')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            
<div class="form-floating" style="width: 100%;">
		<label for="" > Choisir la tache correspondante </label>
    <select class="form-control @error('tache') is-invalid @enderror" id="tache" name="tache" style="background-color: black ;" >
      @foreach($taches as $tache)
      <option value="{{ $tache->id }}">{{ $tache->nom }}</option>
      @endforeach
    <!-- Ajoutez plus d'options ici si nécessaire -->
    </select>
      
      @error('tache')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
</div><br><br><br><br><br><br>
	<input type="submit" value="Valider">
           
			<!-- //end script -->
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	
	<!--//copyright-->
</body>
</html>




	

          



















            