<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modifier un utilisateur</title>
</head>
<body>

    <div class="w3ls-login box box--big" style="margin-top: -50px;">
		<!-- form starts here -->
		<form action="{{ route('crud.update', $crud) }}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Nom </label>
				<input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ $crud->nom }}" id="nom"  name="nom" placeholder="Veuillez entrer votre nom" required="" />
				@error('nom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Prenom </label>
				<input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ $crud->prenom }}" id="prenom" name="prenom" placeholder="Veuillez entrer votre prenom" required="" />
				@error('prenom')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
            <div class="agile-field-txt">
				<label><i class="fa fa-envelope" aria-hidden="true"></i> Email </label>
				<input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $crud->email }}" id="email" name="email" placeholder="Veuillez entrer votre email" required="" />
				@error('email')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>
        <div class="agile-field-txt">
				<label><i class="fa fa-phone" aria-hidden="true"></i> Numero </label>
				<input type="number" class="form-control @error('numero') is-invalid @enderror" value="{{ $crud->numero}}" id="numero" name="numero" placeholder="Veuillez saisir votre numero de téléphone" required="" />
				@error('numero')
      			<div class="invalid-feedback">
      			{{ $message }}
      			</div>
      			@enderror
			</div>

        <div class=" form-floating">
            <label  for="photo" class="form-label mt-1">Photo de profil</label> <br>
            <input type="file" class="form-control" name="photo" id="photo">
            <img src="/storage/picture{{ $crud->photo }}" alt="">
        </div>
			
      
            <!-- <input type="submit" value="Modifier"> -->

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
</body>
</html>
