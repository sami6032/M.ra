<?php

namespace App\Http\Controllers;

use App\Models\budget;
use App\Models\evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventController extends Controller
{
    public function ajoutevent()
    {
        return view('client/ajoutEvenement');
    }

    public function storeEvent(Request $request)
    {
  
        $request->validate([
            'titre' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string',
            'description' => 'required|string',
            'nombre_invite' => 'required|integer',
            'entres'=> 'required|integer'
            
        ]);
        
          $evenement =    evenement::create([
            'titre'=> $request->titre,
            'date'=>$request->date,
            'lieu'=>$request->lieu,
            'description'=> $request->description,
            'nombre_invite'=> $request->nombre_invite,
            'user_id'=> Auth::user()->id,
        ]);

            budget::create([
                'entres' => $request->entres,
                'user_id' => Auth::user()->id,
                'evenement_id'=> $evenement->id
            ]);
        return ('ok');
    }
}
