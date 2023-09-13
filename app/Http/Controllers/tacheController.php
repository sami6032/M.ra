<?php

namespace App\Http\Controllers;

use App\Models\assign_tache;
use App\Models\evenement;
use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tacheController extends Controller
{
    public function ajoutache()
    {
        return view('client/tache');
    }
    public function storeTache(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
        ]);

        $tache =    tache::create([
            'nom'=> $request->nom,
            'user_id'=> 1,
        ]);
        return ('tache ajouté avec succes, </br>
        ajoutez une autre si necessaire');
    }
    // public function assignTache()
    // {
        
    //     $taches = tache::all();
      
    //     return view('client/assignTache', compact('taches'));
    // }

 public function assignTache($id)
    {
        
      $evenement = evenement::find($id);
      $taches = tache::all();
        return view('client/assignTache',compact('evenement','taches'));
    }

    public function storeAssign(Request $request)
    {
  
      
        assign_tache::create([
            'responsable'=> $request->responsable,
            'user_id' => Auth::user()->id,
            'evenement_id'=> $request->evenement,
            'tache_id'=> $request->tache,
            

        ]);
        return ('tache assignée avec succes');
    }
   
}
