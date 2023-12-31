@extends('blog.layout')
     
@section('content')
<!-- <marquee behavior="" direction="">mira</marquee> -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Article de blog évènementiel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> publier un nouvel article de blog</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $blog->image }}" width="100px"></td>
            <td>{{ $blog->titre }}</td>
            <td>{{ $blog->commentaire }}</td>
            <td>
                <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('blog.show',$blog->id) }}">Afficher</a>
      
                    <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Modifier</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet evenement ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $blogs->links() !!}
        
@endsection