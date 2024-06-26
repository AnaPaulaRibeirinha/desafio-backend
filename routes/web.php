<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Web\Home;
use App\Livewire\Web\CreateFilm;
use App\Livewire\Web\ViewFilm;


Route::get('/', Home::class)->name('films.index');
Route::get('/films/create', CreateFilm::class)->name('films.create');
Route::get('/films/{id}', ViewFilm::class)->name('films.show');

