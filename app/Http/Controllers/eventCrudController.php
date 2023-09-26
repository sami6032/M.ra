<?php

namespace App\Http\Controllers;

use App\Models\assign_tache;
use App\Models\budget;
use App\Models\evenement;
use App\Models\Participant;
use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventCrudController extends Controller
{


    // public function edit($id)
    // {
    //     // $categories = category::all();
    //     $evenement = evenement::find($id);

    //     return view('eventCrud.editEvent', compact('evenement'));
    // }
    // public function update(Request $request , $id)
    // {
    //      $request->validate([
    //         'titre' => 'required|string',
    //         'date' => 'required|date',
    //         'lieu' => 'required|string',
    //         'description' => 'required|string',
    //         'nombre_invite' => 'required|integer',
    //         'entres'=> 'required|integer'

    //         // autres règles de validation pour les champs
    //     ]);


    //     evenement::find($id)->update([
    //         'titre'=> $request->titre,
    //         'date'=>$request->date,
    //         'lieu'=>$request->lieu,
    //         'description'=> $request->description,
    //         'nombre_invite'=> $request->nombre_invite,
    //         'user_id'=> Auth::user()->id,
    //     ]);

    //     return redirect('listeEvent');
    // }
    public function edit($id)
    {

        $evenement = evenement::find($id);
        $budget = budget::find($id);
        return view('eventCrud.editEvent', compact('evenement', 'budget'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string',
            'description' => 'required|string',
            'nombre_invite' => 'required|integer',
            'entres' => 'required|integer'

            // autres règles de validation pour les champs
        ]);
        $budg=budget::find($id);
        $budg->update([
            'entres' => $request->entres,
            // 'user_id' => Auth::user()->id,
            // 'evenement_id' => evenement::find($id),
        ]);
        evenement::find($budg->evenement_id)->update([
            'titre' => $request->titre,
            'date' => $request->date,
            'lieu' => $request->lieu,
            'description' => $request->description,
            'nombre_invite' => $request->nombre_invite,
            // 'user_id' => Auth::user()->id,
        ]);


        return redirect('listeEvent');
    }



    // public function listeEvent()
    // {

    //     $evenements = evenement::where('user_id',Auth::user()->id)->get();
    //     $budgets = budget::all();
    //     return view('admin.listeEvent',compact('evenements','evenements'));
    // }
    // public function listeEvent()
    // {
    //     // $evenements = evenement::all();
    //     $evenements = evenement::where('user_id',Auth::user()->id)->get();
    //     return view('admin.listeEvent',compact('evenements'));
    // }
    public function listeEvent()
    {
        $assign_taches = assign_tache::where('user_id', Auth::user()->id)->get();
        $budgets = budget::where('user_id', Auth::user()->id)->get();
        $taches = tache::where('user_id', Auth::user()->id)->get();
        $evenements = evenement::where('user_id', Auth::user()->id)->get();
        $participants = Participant::where('user_id', Auth::user()->id)->get();
        return view('admin.listeEvent', compact('evenements', 'budgets', 'assign_taches', 'taches', 'participants'));
    }





    public function editEvent()
    {
        return 'sdf';
    }
    public function welcome()
    {
        $evenements = evenement::paginate(5);
        return view('welcome', compact('evenements'));
    }

    public function destroy($id)
    {
        budget::find($id)->delete();
        evenement::find($id)->delete();

        return redirect()->route('listeEvent')->with('success', 'Evenement supprimé avec succès');
    }

    public function confirm($id)
    {
        $assign_tache1 = assign_tache::find($id);
        $assign_tache1->update([
            'confirmed' => 1
        ]);
        return back();
    }
    public function noConfirm($id)
    {
        $assign_tache1 = assign_tache::find($id);
        $assign_tache1->update([
            'confirmed' => 0
        ]);
        return back();
    }

    // public function show(Request $request){
    //  $request->validate([
    //     'titre' => 'string|required',
    //     'date' => 'date|required'

    //     ]);

    //    $event = Evenement::create([
    //         'titre' =>$request->titre,
    //         'date' =>$request->date
    //     ]);

    //    $request->validate([
    //         'budget' => 'integer|required'
    //         ]);
    //         Budget::create([
    //         'user_id'=>Auth::user()->id,
    //         'evendement_id'=>$event->id,
    //         'budget'=> $request->budget
    //         ]);

    // }

}
