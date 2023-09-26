<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Testimoniale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialeController extends Controller
{
    public function Testimoniale()
    {
        $testimoniales = testimoniale::all();
        return view('client/testimoniale',compact ('testimoniales') );
    }

    public function AjoutTestimoniale()
    {
        return view('AjoutTestimoniale');
    }

    public function storeTestimoniale(Request $request)
    {
        Testimoniale::create([
            'message'=> $request->message,
            'user_id' => Auth::user()->id,
            
        ]);
       
        return redirect()->route('Testimoniale')->with('success','Merci de partager cela avec nous,Dieu au controle');

    }


    public function commentaire()
    {
        $testimoniales = testimoniale::all();
        return view('client/testimoniale',compact ('testimoniales') );
    }

    public function AjoutCommentaire()
    {
        return view('reponse');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'commentaire' => 'required',
        ]);
        
        Commentaire::create([
            'commentaire'=> $request->commentaire,
            'user_id' => Auth::user()->id,
            'testimoniale_id'=> $id,
            
        ]);
        return ('Merci pour le soutient');
        
    }
}
