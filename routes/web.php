<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // return view('auth/login');
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('auth/login');
})->name('login');

// Route::post('register', 'welcome');

// Route::post('register', '');
// Route::view('register', 'auth.register');
Route::get('/register', function () {
    if (Auth::check()) {
        return redirect('/');
    }else{
        return view('auth.register');
    }
});
Route::post('/register', [RegisterController::class,'register']);


// Route::view('/dashboard', 'dashboard.dashboard');

// for logging in
Route::post('/login', [LoginController::class, 'authenticate']);

// for logging out
Route::get('/logout', [LoginController::class, 'logout']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'show']);
});
