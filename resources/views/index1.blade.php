<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>M.ra Event</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="styleDash/css/style.css">
  <!-- End layout styles -->
  <link rel="stylesheet" href="stylenav/nav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="{{ asset('frontend/images/LOGO.png') }}" />
</head>

<body>
  <br>
  @include('component.navbar') <br><br><br>

        <table class=" container table">
            <thead>
                <tr>
                    <th>N0</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>numero</th>
                    <th>email</th>
                    <th>role</th>
                    <th></th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->numero }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->type}}</td>
                        <td>
                            @if ($user->photo)
                                <td><img src="{{ asset('storage/picture/' . $user->photo) }}" alt="Photo" class="img-thumbnail" width="50"></td>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                           
                            <form action="{{ route('crud.destroy', $user) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                            </form>
                           
                        </td>
                           
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="container">
         <a href="logout" class="btn btn-danger">Deconnexion</a>
    </div> <br>

    <div>
       
    </div>
    </div>
</body>
</html>
