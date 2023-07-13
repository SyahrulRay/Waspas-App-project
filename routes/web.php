<?php

use App\Http\Controllers\AddProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Wizard;
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
    return view('dashboard');
});

Route::get('/addproblems', [AddProblemController::class, 'index'])->name('addproblems.index');
Route::post('/addproblems', [AddProblemController::class, 'store'])->name('addproblems.store');


Route::get('/wizard', function () {
    return view('default');
})->name('wizard');

Route::get('/problems', function () {
    return view('example.problems');
})->name('problems');

Route::get('/result', function () {
    return view('example.result');
})->name('result');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
