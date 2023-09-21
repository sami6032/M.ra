<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('budget.update',$budget->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
     
        <div>
            <label for="sorties"></label>
            <input  name="sorties" type="hidden" value="{{ $budget->sorties }}">
        </div>
        <div>
            <label for="entres">Sorties</label>
            <input name="entres" type="number" value="{{ $budget->entres }}">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html> -->

*****


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

<body>
	<div><img class="im" src="public/im.jpg" alt=""></div>
	@include('component.navSimple') <br>
    <h1 class="">Entrez le cout de la depense</h1>
	   
    
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
        <form action="{{ route('budget.update',$budget->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="agile-field-txt">
				<label> libele </label>
				<input type="text" class="form-control @error('libele') is-invalid @enderror" value="{{ old('libele') }}" id="libele"  name="libele" placeholder="Veuillez entrer le libele" required="" />
				@error('libele')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>

            <div class="agile-field-txt">
				<label> </label>
				<input type="hidden" class="form-control @error('nom') is-invalid @enderror" value="{{ $budget->evenement_id }}" id="evenement_id"  name="evenement_id" placeholder="Veuillez entrer votre cout" required="" />
				@error('sorties')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label> Cout </label>
				<input type="number" class="form-control @error('nom') is-invalid @enderror" value="{{ $budget->sorties }}" id="sorties"  name="sorties" placeholder="Veuillez entrer votre cout" required="" />
				@error('sorties')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label></label>
				<input type="hidden" class="form-control @error('entres') is-invalid @enderror" value="{{ $budget->entres }}" id="entres"  name="entres" placeholder="Veuillez entrer votre nom" required="" />
				@error('entres')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            
            
            <input type="submit" value="valider">
           

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






