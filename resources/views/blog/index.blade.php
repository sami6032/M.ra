@extends('blog.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Blog.create') }}"> Create New Product</a>
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
                <form action="{{ route('Blog.destroy',$blog->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('Blog.show',$blog->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('Blog.edit',$blog->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $blogs->links() !!}
        
@endsection