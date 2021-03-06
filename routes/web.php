<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use  App\HTTP\Controllers\FacebookController;
use  App\Http\Livewire\Main;

use Illuminate\Http\Request;





use App\Models\FavoriteBook;
use App\Models\User;

use Facade\FlareClient\Stacktrace\File;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

Route::get('/',Main::class )->name('home');
Route::get('/mybooks',\App\Http\Livewire\MyBooks::class)->name('mybooks')->middleware('auth');
Route::get('/login',\App\Http\Livewire\Login::class)->name('login');
Route::get('/admin',[DashboardController::class,'index']);

Route::resource('/admin/book', BookController::class);

Route::get('/test', function(){
    
    
    dd( Storage::delete('public/book.png'));
    // return Storage::download('FightClub.pdf');
    
});
Route::get('/download',function (Request $request){
    // dd($pdf);
    // dd($request->pdf);
    return Storage::disk('public')->download('FightClub.pdf');

})->name('download');
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

require_once __DIR__.'/jetstream.php';