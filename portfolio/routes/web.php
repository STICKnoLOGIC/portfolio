<?php

use App\Http\Controllers\AsHumanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/contact-us', 'pages.contact-us')->name('contact-us');
Route::view('/write-with-us', 'pages.write-with-us')->name('write-with-us');

Route::get('/up', function () {
    return response()->json(['status' => 'ok', 'timestamp' => now()]);
});

Route::get('/as-human', [AsHumanController::class, 'index'])->name('as-human');
Route::get('/as-human/{slug}', [AsHumanController::class, 'show'])->name('as-human.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/tags/{tag}', [BlogController::class, 'tags'])->name('blog.tags');
Route::get('/blog/author/{author}', [BlogController::class, 'author'])->name('blog.author');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/tech/{tech}', [ProjectController::class, 'tech'])->name('projects.technologies');

Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies');
Route::get('/case-studies/{slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');
Route::get('/case-studies/tag/{tag}', [CaseStudyController::class, 'tags'])->name('case-studies.tags');

Route::get('/creative', [CreativeController::class, 'index'])->name('creative');
Route::get('/creative/{slug}', [CreativeController::class, 'show'])->name('creative.show');
Route::get('/creative/tags/{tag}', [CreativeController::class, 'tags'])->name('creative.tags');
