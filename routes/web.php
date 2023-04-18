<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPage;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\SocialController;



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



Route::get('/user', [FreelancerController::class,'DisplayInfo'])->name('list.user');
Route::post('/user/save', [FreelancerController::class,'SaveInfo'])->name('save.user');
Route::get('/experience', [ExperienceController::class,'DisplayInfo'])->name('list.experience');
Route::post('/experience/save', [ExperienceController::class,'SaveInfo'])->name('save.experience');

Route::get('/tools', [ToolController::class,'DisplayInfo'])->name('list.tools');
Route::post('/tools/save', [ToolController::class,'SaveInfo'])->name('save.tools');

Route::get('/socials', [SocialController::class,'DisplayInfo'])->name('list.socials');
Route::post('/socials/save', [SocialController::class,'SaveInfo'])->name('save.socials');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
