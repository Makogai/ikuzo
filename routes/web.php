<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use Vedmant\FeedReader\FeedReader;

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

Route::get('/', [WebsiteController::class, 'index'])->middleware('active');
Route::get('/inactive',function (){
    if (app(\App\Settings\GeneralSettings::class)->site_active)
        return redirect('/');
    return view('inactive');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
