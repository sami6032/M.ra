<?php

namespace App\Http\Controllers;

use App\Models\BlogAttente;
use Illuminate\Http\Request;

class AttenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogAttentes = BlogAttente::latest()->paginate(5);
    
        return view('attente.index',compact('blogAttentes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // public function blogAttente()
    // {
    //     $blogAttentes = BlogAttente::latest()->paginate(5);
    
    //     return view('admin.blogAttente',compact('blogAttentes'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }
    // public function blogAttente()
    // {
    //     $blogAttentes = BlogAttente::all();
    //     return view('admin.blogAttente',compact('blogAttentes'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogAttentes = BlogAttente::all();

        return view('attente.create',compact('blogAttentes'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'commentaire' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        blogAttente::create($input);
     
                    
        // return redirect()->route('attente.index')->with('success','Demande crée avec succes,vous recevrez une notification mail quand votre article sera publié.Merci pour la confiance');
        return ('Demande crée avec succes,vous recevrez une notification mail quand votre article sera publié.Merci pour la confiance');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogAttente  $blogAttente
     * @return \Illuminate\Http\Response
     */
    public function show(BlogAttente $blogAttente)
    {
        return view('attente.show',compact('blogAttente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogAttente  $blogAttente
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogAttente $blogAttente)
    {
        return view('attente.edit',compact('blogAttente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogAttente  $blogAttente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogAttente $blogAttente)
    {
        $request->validate([
            'titre' => 'required',
            'commentaire' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $blogAttente->update($input);
    
        return redirect()->route('attente.index')
                        ->with('success','Article modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogAttente  $blogAttente
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogAttente $blogAttente)
    {
        $blogAttente->delete();
     
        return redirect()->route('attente.index')
                        ->with('success','Article supprimé avec succès');
    }
}
