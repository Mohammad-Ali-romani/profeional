<?php
namespace routes;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// middleware level controller
Route::get('/main',[MainController::class,'index2']);
Route::get('login',function(){
    return 'you login';
})->name('login');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
