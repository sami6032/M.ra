
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Event</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
     <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}"> 
    

    <!-- Bootstrap core CSS -->
     <link href="{{ asset('index.css') }}" rel="stylesheet"> 
</head>
<body>
    <div class="container-fluid">
        <div class="col-lg-12 margin-tb">
           <div class="pull-left">
                <h2>Les details de l'evenement </h2>
           </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {{ $evenement->titre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $evenement->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lieu:</strong>
                {{ $evenement->lieu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre d'invite:</strong>
                {{ $evenement->nombre_invite }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Budget:</strong>
                {{ $evenement->entres }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $evenement->description }}
            </div>
        </div>
        
    </div>

   
</body>

</html>