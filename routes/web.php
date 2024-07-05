<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdoptionformController;

route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

route::get('add_animal',[AdminController::class,'add_animal'])->middleware(['auth','admin']);
route::post('upload_animal',[AdminController::class,'upload_animal'])->middleware(['auth','admin']);
route::get('view_animal',[AdminController::class,'view_animal'])->middleware(['auth','admin']);
route::get('delete_animal/{id}',[AdminController::class,'delete_animal'])->middleware(['auth','admin']);
route::get('update_animal/{id}',[AdminController::class,'update_animal'])->middleware(['auth','admin']);
route::post('edit_animal/{id}',[AdminController::class,'edit_animal'])->middleware(['auth','admin']);
route::get('animal_search/{id}',[AdminController::class,'animal_search'])->middleware(['auth','admin']);
// route::get('/petinfo',function(){
// return view('home.petinformation');
// });
route::get('/view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
route::post('/add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);

route::get('/animal',[HomeController::class,'animal'])->name('animals');

Route::get('/adoptionform', [AdoptionformController::class, 'create'])->name('adoptionform.create');
Route::post('/adoptionform/store', [AdoptionformController::class, 'store'])->name('adoptionform.store');
