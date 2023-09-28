<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\userCrudController;
use App\Http\Controllers\eventCrudController;
use App\Http\Controllers\afficherEventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AttenteController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\TestimonialeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\gestionController;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('index', [userCrudController::class,'index'])->name('index');
Route::get('index1', [userCrudController::class,'index1'])->name('index1');
Route::get('accueil', [AuthController::class,'accueil'])->name('accueilClient');
Route::get('profil', [AuthController::class,'profil'])->name('profil');

Route::get('/dashboardAdmin', [AuthController::class, 'dashboardAdmin'])->name('dashboard');
Route::get('/dashboardClient', [AuthController::class, 'dashboardClient'])->name('dashboardClient');
Route::get('service', [AuthController::class,'service'])->name('service');


// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('loginl');

//middleware
Route::middleware('auth')->group(function () {
Route::get('listeTache', [gestionController::class, 'listeTache'])->name('listeTache');
Route::get('gererTache', [gestionController::class, 'gererTache'])->name('gererTache');
Route::get('gererBudget', [gestionController::class, 'gererBudget'])->name('gererBudget');
Route::get('depense', [gestionController::class, 'depense'])->name('depense');
Route::get('gererParticipant', [gestionController::class, 'gererParticipant'])->name('gererParticipant');

  });
Route::middleware('admin')->group(function () {
  Route::resource('blog', BlogController::class);
  });

// Register
Route::get('/registerAdmin', [AuthController::class, 'registerAdmin'])->name('registerAdmin');
Route::get('/registerManager', [AuthController::class, 'registerManager'])->name('registerManager');
Route::get('/registerClient', [AuthController::class, 'registerClient'])->name('registerClient');
Route::post('/registerAdmin', [AuthController::class, 'storeAdmin'])->name('admin.store');
Route::post('/registerManager', [AuthController::class, 'storeManager'])->name('manager.store');
Route::post('/registerClient', [AuthController::class, 'storeClient'])->name('client.store');

//Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//tache
Route::get('/ajoutache', [tacheController::class, 'ajoutache'])->name('ajoutache');
Route::post('/tache', [tacheController::class, 'storeTache'])->name('tache');

//evenement
Route::get('/ajoutevent', [eventController::class, 'ajoutevent'])->name('ajoutevent');
Route::post('/ajoutevent', [eventController::class, 'storeEvent'])->name('event');


//assignTache
Route::get('/assignTache/{id}', [tacheController::class, 'assignTache'])->name('assignTache');
Route::get('/assignTache1/{id}', [eventCrudController::class, 'confirm'])->name('confirm');
Route::get('/noassignTache1/{id}', [eventCrudController::class, 'noConfirm'])->name('noConfirm');
Route::post('/assignTache', [tacheController::class, 'storeAssign'])->name('assign');

//Invitation
Route::get('/ajoutinvite', [ParticipantController::class, 'ajoutinvite'])->name('ajoutinvite');
Route::post('/ajoutinvite', [ParticipantController::class, 'storeparticipant'])->name('participant.store');

//userCrud
Route::get('/crud/create', [userCrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [userCrudController::class, 'store'])->name('crud.store');
Route::get('/crud/{crud}/edit', [userCrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{crud}', [userCrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{crud}', [userCrudController::class, 'destroy'])->name('crud.destroy');


//eventCrud
Route::get('listeEvent', [eventCrudController::class, 'listeEvent'])->name('listeEvent');

Route::get('editEvent/{id}', [eventCrudController::class, 'edit'])->name('edit');
// Route::resource('listeEvent',eventCrudController::class);
// Route::post('/updateProduit', [eventCrudController::class, 'updateProduit'])->name('updateProduit');
Route::put('/storeEvent', [eventCrudController::class, 'storeEvent'])->name('storeEvent');
Route::get('/delete/{id}', [eventCrudController::class, 'destroy'])->name('destroy.event');
Route::put('/update/{id}', [eventCrudController::class, 'update'])->name('updateEvent');

//afficherEvent
Route::get('/detail/{id}',[afficherEventController::class,'afficher'])->name('present');

//blog

Route::get('/Article_Blog',[BlogController::class,'blog'])->name('article_blog');
//attente blog
Route::resource('attente', AttenteController::class);
// Route::get('/blogAttente',[AttenteController::class,'blogAttente'])->name('blogAttente');


//Testimoniales
Route::get('comment/{id}',[TestimonialeController::class,'comment'])->name('comment');
Route::post('comme/{id}',[TestimonialeController::class,'comme'])->name('comme');

Route::get('/Testimoniale',[TestimonialeController::class,'Testimoniale'])->name('Testimoniale');
Route::get('/AjoutTestimoniale',[TestimonialeController::class,'AjoutTestimoniale'])->name('AjoutTestimoniale');
Route::post('/AjoutTestimoniale', [TestimonialeController::class, 'storeTestimoniale'])->name('testi.store');
//CommentairesTestimoniales
// Route::get('/commentaire',[TestimonialeController::class,'commentaire'])->name('commentaire');
// Route::get('/AjoutCommentaire',[TestimonialeController::class,'AjoutCommentaire'])->name('AjoutCommentaire');
// Route::post('/update/{id}', [TestimonialeController::class, 'update'])->name('Commentaire.store');
Route::resource('commentaire', ReponseController::class);
//carte
Route::get('/carte',[ParticipantController::class,'carte'])->name('carte');
Route::get('/carte1',[ParticipantController::class,'carte1'])->name('carte1');


//test 
///test fin
Route::resource('budget', BudgetController::class);

///Email
// Route::get('/bar', 'App\Http\Controllers\userCrudController@bar,');
Route::get('/bar',[userCrudController::class,'bar'])->name('bar');


