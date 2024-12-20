<?php 

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\InternshipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships');
Route::get('/seminars', [SeminarController::class, 'index'])->name('seminars');
Route::get('/internships', [InternshipController::class, 'index'])->name('internships');