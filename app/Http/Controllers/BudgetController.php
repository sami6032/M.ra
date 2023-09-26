<?php

namespace App\Http\Controllers;

use App\Models\budget;
use App\Models\depense;
use App\Models\evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(budget $budget)
    {
        return view('budget.edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */

     
    public function update(Request $request,$id)
    {
        $request->validate([
            'sorties' => 'required',
        ]);
        

        depense::create([
            'libele' => $request->libele,
            'sorties' => $request->sorties,
            'user_id' => Auth::user()->id,
            'budget_id'=> $id,
            'evenement_id'=> $request->evenement_id
        ]);

        $budget = budget::find($id);

        // Récupérer le montant de la nouvelle sortie
        $nouvelleSortie = $request->input('sorties');
        
        // Récupérer le "reste" actuel du budget
        $resteActuel = $budget->reste;
        
        // Calculer le montant total des sorties actuelles
        $sortiesTotales = $budget->sorties + $nouvelleSortie;
        
        // Assurez-vous que le "sortiesTotales" ne dépasse pas le budget actuel
        if ($sortiesTotales > $budget->entres) {
            // Si le total des sorties dépasse le budget actuel, ajustez la sortie à la différence
            $nouvelleSortie -= ($sortiesTotales - $budget->entres);
            $sortiesTotales = $budget->entres;
        }
        
        // Mettre à jour le "reste" avec le montant restant
        $nouveauReste = $budget->entres - $sortiesTotales;
        
        // Assurez-vous que le "nouveauReste" ne devienne pas négatif
        if ($nouveauReste < 0) {
            $nouveauReste = 0;
        }
        
        // Mettre à jour le budget avec la nouvelle sortie, le total des sorties et le nouveau "reste"
        $budget->sorties = $sortiesTotales;
        $budget->reste = $nouveauReste;
        $budget->save();
        


        return 'op';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
