<?php

use Illuminate\Support\Facades\Route;




Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/kontakt', [\App\Http\Controllers\HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/jak-to-dziala', [\App\Http\Controllers\HomeController::class, 'howItWorks'])->name('howItWorks');
Route::get('/rozwiazania', [\App\Http\Controllers\HomeController::class, 'solutions'])->name('solutions');
Route::get('/branze', [\App\Http\Controllers\HomeController::class, 'industries'])->name('industries');
Route::get('/o-nas', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/automatyzacja/marketing', [\App\Http\Controllers\HomeController::class, 'solutionMarketing'])->name('solutionMarketing');
Route::get('/automatyzacja/e-commerce', [\App\Http\Controllers\HomeController::class, 'solutionEcommerce'])->name('solutionEcommerce');
Route::get('/automatyzacja/handel', [\App\Http\Controllers\HomeController::class, 'solutionHandel'])->name('solutionHandel');
Route::get('/automatyzacja/uslugi', [\App\Http\Controllers\HomeController::class, 'solutionUslugi'])->name('solutionUslugi');
Route::get('/automatyzacja/logistyka', [\App\Http\Controllers\HomeController::class, 'solutionLogistyka'])->name('solutionLogistyka');
Route::get('/automatyzacja/produkcja', [\App\Http\Controllers\HomeController::class, 'solutionProdukcja'])->name('solutionProdukcja');
Route::get('/automatyzacja/sprzedaz', [\App\Http\Controllers\HomeController::class, 'solutionSprzedaz'])->name('solutionSprzedaz');
Route::get('/automatyzacja/ksiegowosc', [\App\Http\Controllers\HomeController::class, 'solutionKsiegowosc'])->name('solutionKsiegowosc');
Route::get('/automatyzacja/hr', [\App\Http\Controllers\HomeController::class, 'solutionHr'])->name('solutionHr');
Route::get('/automatyzacja/it', [\App\Http\Controllers\HomeController::class, 'solutionIt'])->name('solutionIt');
Route::get('/uslugi', [\App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/polityka-prywatnosci', [\App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/licencja', [\App\Http\Controllers\HomeController::class, 'license'])->name('license');
