<?php

namespace App\Http\Controllers;
use App\Models\crud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userCrudController extends Controller
{
    public function index()
{
    $users = User::all(); // Récupère tous les enregistrements de la table "cruds"

    return view('index', compact('users'));
}
public function index1()
{
    $users = User::all(); // Récupère tous les enregistrements de la table "cruds"

    return view('index1', compact('users'));
}

   
public function edit(User $crud)
    {
        return view('userCrud.edit', compact('crud'));
    }

    // public function update(Request $request, User $crud)
    // {
    //     $validatedData = $request->validate([
    //     'nom' => 'required|string',
    //     'prenom' => 'required|string',
    //     'email' => 'required|unique:users,email',
    //     'password' => 'required|string',
    //     'numero' => 'required|integer',
    //     'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
    //         // autres règles de validation pour les champs
    //     ]);

    //     $input = $request->all();
  
    //     if ($request->file('photo')) {
    //         $photo = $request->file('photo')->store('public/picture');
    //         $name = explode('/', $photo)[2];
    //         $input['photo'] = $name;
    //     }else{
    //         unset($input['image']);
    //     }
          
    //     $crud->update($validatedData);
    
    //     return redirect()->route('index')
    //                     ->with('success','Article modifié avec succès');
    // }
    
        public function update(Request $request , $id)
    {
         $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'numero' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            
            // autres règles de validation pour les champs
        ]);
       
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

        User::find($id)->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'photo'=>$name,
            'category_id'=>$request->category_id
        ]);
    
        return redirect()->route('index')
                        ->with('success','Article modifié avec succès');
    }


    // public function edit( $crud)
    
    // {
    //     $crud = crud::find($id);
    //     return view('userCrud.edit', compact('crud'));
    // }

    // public function update(Request $request , $id)
    // {


    //     $validatedData = $request->validate([
    //     'nom' => 'required|string',
    //     'prenom' => 'required|string',
    //     'email' => 'required|unique:users,email',
    //     'password' => 'required|string',
    //     'numero' => 'required|integer',
    //     'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
    //         // autres règles de validation pour les champs
    //     ]);
    //     if ($request->file('photo')) {
    //         $photo = $request->file('photo')->store('public/picture');
    //         $name = explode('/', $photo)[2];
    //         $input['photo'] = $name;
    //     };

    //     User::find($id)->update([
    //         'nom'=> $request->nom,
    //         'prenom'=>$request->prenom,
    //         'email'=>$request->email,
    //         'password'=> Hash::make($request->password),
    //         'numero'=> $request->numero,
    //         'photo' => $name,
            
    //     ]);

    //     $crud->update($validatedData);

    //     return redirect()->route('index')->with('success', 'Utilisateur mis à jour avec succès');
    // }


    // // ****
    // public function update(Request $request, reservation $reservation)
    // {
    //     $validatedData = $request->validate([
    //         'nom' => 'required',
    //         'prenom' => 'required',
    //         'date_de_naissance' => 'required',
    //         // autres règles de validation pour les champs
    //     ]);

    //     $reservation->update($validatedData);

    //     return redirect()->route('index')->with('success', 'Utilisateur mis à jour avec succès');
    // }
    // // ****

    public function destroy(User $crud)
    {
        $crud->delete();

        return redirect()->route('index')->with('success', 'Utilisateur supprimé avec succès');
    }

    
}
