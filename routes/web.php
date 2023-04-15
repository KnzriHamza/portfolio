<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontPage::class,'DisplayInfo'])->name('index');

Route::prefix('dashboard/users/')->group(function (){


});

Route::get('/user', function () {
    return view('backend.userView');
})->name('user');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
