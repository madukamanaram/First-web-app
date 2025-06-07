<?php

use App\Http\Controllers\admin\SliderController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view("frontend.home");
});




Route::get('/dashboard', function () {
    return view("admin_panel.admin_dashbord");
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/sliderindex', [SliderController::class, 'index'])->name('slider.index');
    Route::post('/saveslider', [SliderController::class, 'storeslider'])->name('slider.store');
});

// Route::get('/testslider', [SliderController::class, 'index']);



require __DIR__.'/auth.php';
