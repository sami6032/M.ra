<?php

namespace App\Http\Controllers;

use App\Models\assign_tache;
use App\Models\budget;
use App\Models\depense;
use App\Models\evenement;
use App\Models\Participant;
use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gestionController extends Controller
{
    public function listeTache()
    {
        $taches = tache::where('user_id',Auth::user()->id)->get();       
        return view('gestion.listeTaches',compact('taches'));
    }
    public function gererTache()
    {
        $budgets = budget::where('user_id',Auth::user()->id)->get();
        $assign_taches = assign_tache::where('user_id',Auth::user()->id)->get();
        $evenements = evenement::where('user_id',Auth::user()->id)->get();
        return view('gestion.taches',compact('evenements','assign_taches','budgets'));
    }
    public function depense()
    {
        $depenses = depense::where('user_id',Auth::user()->id)->get();
        return view('gestion.depense',compact('depenses'));
    }
    public function gererBudget()
    {
        $budgets = budget::where('user_id',Auth::user()->id)->get();
        $evenements = evenement::where('user_id',Auth::user()->id)->get();
        return view('gestion.budget',compact('evenements','budgets'));
    }
    public function gererParticipant()
    {
        $evenements = evenement::where('user_id',Auth::user()->id)->get();
        $participants = Participant::where('user_id',Auth::user()->id)->get();
        return view('gestion.participant',compact('evenements','participants'));
    }
    public function budget($id)
    {
        $budgets = budget::where('id',$id)->firstOrFail();
        return view('gestion.bug',compact('budgets'));
    }
    public function editBudget(Request $request, $id)
    {
        $input = budget::find($id);
        $input->sorties = $request->input('sorties');
        $input->updated();
       

        return 'op';
    }
}
