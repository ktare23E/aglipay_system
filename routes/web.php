<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserAuthController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::post('login_user',[UserAuthController::class,'login'])->name('login_user');




Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',function(){
        return Inertia::render('Admin/Dashboard');
    });
});
