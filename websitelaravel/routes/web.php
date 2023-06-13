<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\BookingController;
use App\Http\controllers\ContactController;

Route::get('/',[HomeController::class,'index']
)->name('index');
Route::get('/booking',[BookingController::class,'createBooking'])->name('create');
Route::post('/booking',[BookingController::class,'Storebooking'])->name('booking.add');
Route::get('/room',[HomeController::class,'room'])->name('room');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'storecontact'])->name('contact.store');

Route::get('/about',[HomeController::class,'about'])->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


