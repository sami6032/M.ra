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
        budget::all();

        depense::create([
            'libele' => $request->libele,
            'sorties' => $request->sorties,
            'user_id' => Auth::user()->id,
            'evenement_id'=> $request->evenement_id
        ]);

        $budget = budget::find($id);
        $budget ->entres =$request->input('entres');
        $budget ->sorties =$request->input('sorties');
        $budg = ($request->input('entres')-$request->input('sorties'));
        $budget ->reste =$budg;
        $budget->update($request->all());

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
