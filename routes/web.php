<?php

use App\Livewire\Counter;
use App\Livewire\WordCounter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter',Counter::class)->name('counter');
Route::get('/word-counter',WordCounter::class)->name('word-counter');
