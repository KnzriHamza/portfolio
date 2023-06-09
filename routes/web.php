<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPage;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\GalleryElementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;



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


Route::group( ['middleware' => 'auth' ], function()
{
    Route::prefix('dashboard')->group(function (){

        Route::get('/', [DashboardController::class,'DisplayInfo'])->name('dashboard');
        Route::get('/settings', [SettingController::class,'DisplayInfo'])->name('settings');
        Route::post('/settings/save', [SettingController::class,'SaveInfo'])->name('save.settings');



        Route::get('/user', [FreelancerController::class,'DisplayInfo'])->name('list.user');
        Route::post('/user/save', [FreelancerController::class,'SaveInfo'])->name('save.user');


        Route::get('/experience', [ExperienceController::class,'DisplayInfo'])->name('list.experience');
        Route::post('/experience/save', [ExperienceController::class,'SaveInfo'])->name('save.experience');

        Route::get('/tools', [ToolController::class,'DisplayInfo'])->name('list.tools');
        Route::post('/tools/save', [ToolController::class,'SaveInfo'])->name('save.tools');

        Route::get('/socials', [SocialController::class,'DisplayInfo'])->name('list.socials');
        Route::post('/socials/save', [SocialController::class,'SaveInfo'])->name('save.socials');

        Route::get('/projects', [ProjectController::class,'DisplayInfo'])->name('list.projects');
        Route::post('/projects/save', [ProjectController::class,'SaveInfo'])->name('save.project');

        Route::get('/hobbys', [HobbyController::class,'DisplayInfo'])->name('list.hobbies');
        Route::post('/hobbys/save', [HobbyController::class,'SaveInfo'])->name('save.hobbies');

        Route::get('/Links', [LinkController::class,'DisplayInfo'])->name('list.links');
        Route::post('/Links/save', [LinkController::class,'SaveInfo'])->name('save.links');

        Route::get('/gallery', [GalleryElementController::class,'DisplayInfo'])->name('list.gallery');
        Route::post('/gallery/save', [GalleryElementController::class,'SaveInfo'])->name('save.gallery');

        Route::get('/dashboard/logout', [DashboardController::class,'Logout'])->name('dashboard.logout');

    });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dasshboard', function () {
        return view('dashboard');
    })->name('dashboards');
});

});
