<?php

use App\Http\Controllers\SerieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [SerieController::class, 'seriePageAccueil']);
Route::get('/liste', [SerieController::class, 'liste'])->name('serie.liste');

Route::get('/liste/{id}', [SerieController::class, 'detail'])->name('details.serie');
Route:: get('/user',[UserController::class,'index'])->name('user.user');


Route::get('/categories', function () {
    return view('categorie');
});
Route::get('/pageSerie',function(){
   return view('page_serie');
});

Route::get('/search.php',[SerieController::class,'recherche']);
Route::post('/search.php',[SerieController::class,'recherche']);


Route::get('/pageEpisode',function(){
    return view('page_episode');
});

//Route::post("/login", );
