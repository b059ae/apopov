<?php
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'HomeController@index')->name('home');

// Actions
Route::post('contact', 'ContactController@store')->name('contact');
Route::get('portfolio/{id}', 'PortfolioController@show')->name('portfolio');
// Blog
Route::get('blog', 'BlogController@index')->name('blog.index');
Route::get('blog/{slug}', 'BlogController@show')->name('blog.show');
