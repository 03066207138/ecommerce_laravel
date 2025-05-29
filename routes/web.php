<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Livewire\Volt\Volt;

Route::get('/login', function () {
    return view('login');
});
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require __DIR__.'/auth.php';

// Route::get('/', function () {
//     if (!session()->has('user')) {
//         return redirect('/login');
//     }
//     return 'Welcome to your dashboard!';
// });

// Route::view("/", "login");


Route::post('login', [UserController::class, 'login']);


Route::get('/', [Productcontroller::class, 'index']);


// Route::get('/login', function () {
//     // Your login logic
// })->middleware('userauth');


Route::get('/check-session', function () {
    return session('user'); // Should return the user ID
});



