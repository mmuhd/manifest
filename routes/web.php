<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Vehicles;
use App\Http\Livewire\Manifest;
use App\Http\Livewire\ManifestShow;
use App\Http\Livewire\Tickets;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Contact;
use App\Http\Livewire\About;
use App\Http\Livewire\Services;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\PassengersController;
use App\Http\Controllers\ManifestController;


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

Route::view('/', 'welcome');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('home', Home::class)
        ->name('home');

    Route::get('vehicles', Vehicles::class)
        ->name('vehicles');

    Route::get('manifest', Manifest::class)
        ->name('manifest');
    Route::post('storePassengers', [PassengersController::class, 'store'])->name('passengers');

    Route::get('manifest-show', ManifestShow::class)
        ->name('manifest-show');
    
    Route::get('tickets', Tickets::class)
        ->name('tickets');

    Route::get('settings', Settings::class)
        ->name('settings');    

    Route::get('contact', Contact::class)
        ->name('contact');

    Route::get('about', About::class)
        ->name('about');    
    
    Route::get('services', Services::class)
        ->name('services');    
    

    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', [LoginController::class, 'logout'])
        ->name('logout');
});
