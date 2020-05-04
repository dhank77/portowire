<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::livewire('/', 'content-description')->name('/');
Route::livewire('/projects', 'content-index')->name('projects');
Route::livewire('/description/create', 'description-create')->name('description.create');
Auth::routes();

