<?php
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'HomeController@index')->name('home');

