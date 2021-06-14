<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\App\StartController;
use App\Http\Controllers\App\PostsController;
use App\Http\Controllers\App\TeamController;
use App\Http\Controllers\App\PartnersController;
use App\Http\Controllers\App\SponsorsController;
use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\NewsletterController;
use App\Http\Controllers\App\PositionsController;

use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', [StartController::class, 'index'])->name('start.index');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');

Route::get('/partners', [PartnersController::class, 'index'])->name('partners.index');

Route::get('/sponsors', [SponsorsController::class, 'index'])->name('sponsors.index');

Route::get('/positions', [PositionsController::class, 'index'])->name('positions.index');
Route::get('/positions/{position}', [PositionsController::class, 'show'])->name('positions.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store')->middleware(ProtectAgainstSpam::class);
