<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function ajoutinvite($id)
    {
      $evenement = evenement::find($id);
        return view('client/invitation');
    }
    
    public function storeparticipant(Request $request)
    {
  
      
        Participant::create([
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'user_id' => Auth::user()->id,
            'evenement_id'=> $request->evenement,
           
        ]);
        return ('invitation crée avec succes, </br>
        ajoutez une autre si necessaire');
    }
}
