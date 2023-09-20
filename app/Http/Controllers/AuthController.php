<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\budget;
use App\Models\evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\role;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB ;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index',compact('users'));
    }
    public function accueil()
    {
        return view('client.accueil');
    }
    public function profil()
    {
        return view('client.profil');
    }
    public function dashboardAdmin()
    {
        $users = User::all();
        $blogs = Blog::latest()->paginate(5);
        $budgets = budget::all();
        $evenements = evenement::all();
        return view('admin.dashboardAdmin',compact('users','blogs','budgets','evenements'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function dashboardClient()
    {
        return view('client.dashboardClient');
    }
    public function login()
    {
        return view('login');
    }

    public function registerAdmin()
    {
        return view('admin.registerAdmin');
    }

    public function registerManager()
    {
        return view('registerManager');
    }

    public function registerClient()
    {
        return view('client.registerClient');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

    $recuperation = DB::select('select role_id from users where email=?',[$request->input('email')]);
        
    if (Auth::attempt($credentials) && $recuperation[0]->role_id === 1) {
        $request->session()->regenerate();
        return redirect()->intended('dashboardAdmin');
    } elseif(Auth::attempt($credentials) && $recuperation[0]->role_id == 2){
        $request->session()->regenerate();
        return redirect()->intended('dashboardAdmin');
    } elseif(Auth::attempt($credentials) && $recuperation[0]->role_id == 3){
        $request->session()->regenerate();
        return redirect()->intended('index');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');
} 


    public function storeAdmin(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'numero' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            
        ]);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

             User::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'numero'=> $request->numero,
            'photo' => $name,
            'role_id'=> 1,
        ]);
        return redirect('login');
    }

    public function storeManager(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'numero' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            
        ]);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

             User::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'numero'=> $request->numero,
            'photo' => $name,
            'role_id'=> 2,
        ]);
        return view('login');
    }

    public function storeClient(Request $request)
    {
  
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|string',
            'numero' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            
        ]);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

             User::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'numero'=> $request->numero,
            'photo' => $name,
            'role_id'=> 3,
        ]);
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
   
}