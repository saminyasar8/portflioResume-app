<?php


use App\Http\Controllers\controllerContacr;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\resumeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Pest\Configuration\Project;

Route::get('/', [homeController::class ,'index']
)->name('home');
Route::get('/projects',[projectsController::class,'index'])->name('projects');
Route::get('/resume',[resumeController::class,'index'])->name('resume');
Route::get('/contact',[controllerContacr::class,'index'])->name('contact');
Route::post('/submit', [controllerContacr::class, 'submit'])->name('contact.submit');
Route::get('/contact-confirmation', [controllerContacr::class, 'confirmation'])->name('contact.confirmation');

Route::get('/download-cv', function () {
    $path = public_path('assets/Samin_yasar c.v. (1).pdf');
    return response()->download($path);
})->name('download-cv');