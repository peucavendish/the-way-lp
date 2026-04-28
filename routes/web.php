<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'split')->name('home');

Route::view('/assessores', 'home')->name('assessores');

Route::view('/planejamento', 'investidor')->name('investidor');

Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');
