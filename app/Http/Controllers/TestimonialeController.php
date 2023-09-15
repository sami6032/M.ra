<?php

namespace App\Http\Controllers;

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
        return ('Merci de partager cela avec nous');
    }
}
