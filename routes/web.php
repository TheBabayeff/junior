<?php

use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\VacancyController;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;


Route::get('language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'az']))
    {
        abort(400);
    }
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');



Route::get('/' , [HomeController::class, 'index'])->name('welcome');
Route::get('/about' , [HomeController::class, 'about'])->name('about');
Route::get('/contact' , [HomeController::class, 'contact'])->name('contact');


Route::get('/our-team' , [HomeController::class, 'ourTeam'])->name('ourTeam');

Route::get('/search' , [SearchController::class, 'index'])->name('search');


Route::get('/gallery' , [GalleryController::class, 'index'])->name('gallery');

Route::get('/projects' , [ProjectController::class, 'index'])->name('projects');

Route::get('/news' , [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}' , [NewsController::class, 'show'])->name('news.show');

Route::get('/vacancies' , [VacancyController::class, 'index'])->name('vacancies');
Route::get('/vacancies/{id}' , [VacancyController::class, 'show'])->name('vacancy.show');
Route::post('/send-resume' , [VacancyController::class, 'sendResume'])->name('send.resume');



Route::get('/volunteers' , [VacancyController::class, 'volunteer'])->name('volunteers');
Route::post('/volunteers' , [VacancyController::class, 'volunteerCv'])->name('send.volunteerCv');

Route::get('/download-cv/{id}', [VacancyController::class, 'downloadCv'])->name('download.cv');



