<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function ajoutinvite()
    {
     $evenements = evenement::where('user_id',Auth::user()->id)->get();
    
        // $evenements = evenement::where('user_id');
        return view('client/invitation',compact('evenements'));
    }
    public function carte()
    {
        return view('carte/index');
    }
    public function carte1()
    {
        return view('carte/index1');
    }
    
    public function storeparticipant(Request $request)
    {
        // $request->validate([
        //     'nom'=> 'required|string|min:2',
        //     'prenom'=> 'required|string|min:2',
           
        // ]);
        $request->all();
        Participant::create([
            
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'email'=> $request->email,
            'user_id' => Auth::user()->id,
            'evenement_id'=> $request->evenement_id,
           
        ]);
        return redirect()->route('gererParticipant')->with('success','invitation crée avec succes,envoyez lui une invitation par Email');
    }
}
