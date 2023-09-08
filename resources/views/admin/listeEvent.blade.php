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
  <div class="container">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Liste des taches</h4>
            <th><a href="{{ route('ajoutache') }}" class="btn btn-success">Creer des taches</a></th>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>numero</th>
                    <th>titre</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach ($taches as $tache)

                  <tr>

                    <td>{{ $tache->id }}</td>
                    <td>{{ $tache->nom }}</td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Nommer des responsables à vos taches</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>

                    <th>titre</th>
                    <th>date</th>

                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($evenements as $evenement)

                  <tr>
                    <td>{{ $evenement->titre }}</td>
                    <td>{{ $evenement->date }}</td>
                    <td>
                      <a href="{{ route('assignTache', $evenement->id) }}" class="btn btn-success">Assigner des taches</a>


                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </table>


  </div> <br>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Gestion des taches attribué</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>

                  <th>titre</th>
                  <th>responsable</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($assign_taches as $assign_tache1)
                <tr>
                  <td>{{ $assign_tache1->tache->nom }}</td>
                  <td>{{ $assign_tache1->responsable }}</td>
                  <td>

                    @if($assign_tache1->confirmed == 0)
                    <a href="{{ route('confirm',$assign_tache1) }}">
                      <button type="submit" class='btn btn-danger'>A faire</button>
                    </a>
                    @else

                    <a href="{{ route('noConfirm',$assign_tache1) }}">
                      <button type="submit" class='btn btn-success'>Faits</button>
                    </a>
                    @endif

                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Liste des evenements</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>titre</th>
                  <th>date</th>
                  <th>lieu</th>
                  <th>description</th>
                  <th>nombre_invite</th>
                  <th>budget</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($evenements as $evenement)

                <tr>

                  <td>{{ $evenement->id }}</td>
                  <td>{{ $evenement->titre }}</td>
                  <td>{{ $evenement->date }}</td>
                  <td>{{ $evenement->lieu }}</td>
                  <td>{{ $evenement->description }}</td>
                  <td>{{ $evenement->nombre_invite}}</td>
                  <td>{{ $evenement->entres }}</td>



                  <td>
                    <a href="{{ url('detail/'.$evenement->id)}}" class="btn btn-success">Afficher</a>
                    <a href="{{ route('edit', $evenement) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('destroy.event', $evenement->id) }}" style="display: inline;">

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet evenement ?')">Supprimer</button>
                    </a>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Liste des evenements</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>titre</th>
                  <th>date</th>
                  <th>lieu</th>
                  <th>description</th>
                  <th>nombre_invite</th>
                  <th>budget</th>
                  <th>budget</th>
                  <th>budget</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($budgets as $budget)

                <tr>

                  <td>{{ $budget->id }}</td>
                  <td>{{ $budget->evenement->titre }}</td>
                  <td>{{ $budget->evenement->date }}</td>
                  <td>{{ $budget->evenement->lieu }}</td>
                  <td>{{ $budget->evenement->description }}</td>
                  <td>{{ $budget->evenement->nombre_invite}}</td>
                  <td>{{ $budget->entres }}</td>
                  <td>{{ $budget->sorties }}</td>
                  <td>{{ $budget->reste }}</td>

                  <td>
                    <a href="{{ url('detail/'.$evenement->id)}}" class="btn btn-success">Afficher</a>
                    <a href="{{ route('edit', $evenement) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('destroy.event', $evenement->id) }}" style="display: inline;">

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet evenement ?')">Supprimer</button>
                    </a>

                  </td>


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  </table>
  <div class="container">
    <form action="{{ route('logout') }}" method="post" class="btn btn-success">
      @csrf
      <input type="submit" value="deconnexion">
    </form>
  </div> <br>


  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Recent Tickets</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>titre</th>
                  <th>date</th>
                  <th>lieu</th>
                  <th>description</th>
                  <th>nombre_invite</th>
                  <th>entres</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>

                  </td>
                  <td> Fund is not recieved </td>
                  <td>
                    <label class="badge badge-gradient-success">DONE</label>
                  </td>
                  <td> Dec 5, 2017 </td>
                  <td> WD-12345 </td>
                </tr>
                <tr>

                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  </div>