<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function(){
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/mission-and-vission', 'missionVission')->name('mission-and-vission');
    Route::get('/history', 'history')->name('history');
    Route::get('/why-study-at-nub', 'studyNub')->name('why-study-at-nub');
    Route::get('/admission-information', 'admissionInfo')->name('admission-information');
    Route::get('/board-of-trustees', 'boardOfTrustees')->name('board-of-trustees');
});

Route::get('/nub-cse', function(){
    return view('client.cse.cse_dashboard');
})->name('nub-cse');