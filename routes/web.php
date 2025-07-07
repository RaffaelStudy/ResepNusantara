<?php

use App\Http\Controllers\materi\userController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//routing utama
Route::get('/menu', [userController::class, 'index']) -> name ('menu');


Route::get ('/about', [userController::class, 'about']) -> name ('about');


Route::get ('/resep', [userController::class, 'resep']) -> name ('resep');


//Routing Resep makanan

Route::get ('/resep-pecelLele', [userController::class, 'pecelLele']) -> name ('pecelLele');

Route::get ('/resep-rendang', [userController::class, 'rendang']) -> name ('rendang');

Route::get ('/resep-nasiKuning', [userController::class, 'nasiKuning']) -> name ('nasiKuning');

Route::get ('/resep-ayamBakar', [userController::class, 'ayamBakar']) -> name ('ayamBakar');

Route::get ('/resep-ayamGoreng', [userController::class, 'ayamGoreng']) -> name ('ayamGoreng');

Route::get ('/resep-orekTempe', [userController::class, 'orekTempe']) -> name ('orekTempe');

Route::get ('/resep-sayurAsem', [userController::class, 'sayurAsem']) -> name ('sayurAsem');

Route::get ('/resep-sopAyam', [userController::class, 'sopAyam']) -> name ('sopAyam');

Route::get ('/resep-sotoAyam', [userController::class, 'sotoAyam']) -> name ('sotoAyam');

Route::get ('/resep-tempeGoreng', [userController::class, 'tempeGoreng']) -> name ('tempeGoreng');



Route::get('/blog1', function () {
    return view('dummy.latihan');
});


Route::get('/blog2', function () {
    return view('dummy.latihan2');
});

Route::get('/contact', function () {
    return view('dummy.latihanContact');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', action: [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
