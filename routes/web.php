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
Route::get('/about', [WebsiteController::class, 'about'])->middleware('active');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->middleware('active');
Route::get('/post/{post}', [\App\Http\Controllers\BlogController::class, 'show'])->middleware('active')->name('post.show');


Route::get('/newsletter-subscribe', [\App\Http\Controllers\NewsletterController::class, 'store'])->middleware('active')->name('newsletter.subscribe');
Route::get('/newsletter-unsubscribe', [\App\Http\Controllers\NewsletterController::class, 'unsubscribe'])->middleware('active')->name('newsletter.unsubscribe');


Route::get('/inactive',function (){
    if (app(\App\Settings\GeneralSettings::class)->site_active)
        return redirect('/');
    return view('inactive');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
