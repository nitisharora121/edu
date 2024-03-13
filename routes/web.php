<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function()
{
    // Admin login Route 
    Route::match(['get','post'],'login','AdminController@login');
    Route::group(['middleware'=>['admin']],function()
    {
        // Admin Dashboard Route 
        Route::get('dashboard','AdminController@dashboard');
    });
});


// Route User 

Route::get('/view_detail',[UserController::class,'view_detail']);
Route::get('/study_abroad',[UserController::class,'insert_abroad']);
Route::post('/abroad_send',[UserController::class,'abroad_send']);