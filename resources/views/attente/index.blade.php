

<!DOCTYPE html>
<html>
<head>
    <title>Demande</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>
<!-- <marquee behavior="" direction="">mira</marquee> -->
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>

            <div class="pull-left">
                <h2>Demande de publication</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('article_blog') }}"> Retour sur Blog</a>
        </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('attente.create') }}">Nouvelle Demande</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>N</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Commentaires</th>
            
        </tr>
        @foreach ($blogAttentes as $blogAttente)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $blogAttente->image }}" width="100px"></td>
            <td>{{ $blogAttente->titre }}</td>
            <td>{{ $blogAttente->commentaire }}</td>
            <!-- <td>
                <form action="{{ route('attente.destroy',$blogAttente->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('attente.show',$blogAttente->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('attente.edit',$blogAttente->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form> 
            </td> -->
        </tr>
        @endforeach
    </table>
    
    {!! $blogAttentes->links() !!}
        
