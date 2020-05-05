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

Auth::routes();
Route::livewire('/', 'content-description')->name('/');
Route::livewire('/projects', 'content-index')->name('projects');
Route::livewire('/experience', 'content-experinece')->name('experience');
Route::livewire('/education', 'content-education')->name('education');
Route::livewire('/skills', 'content-skills')->name('skills');
Route::livewire('/awards', 'content-awards')->name('awards');

// Admin Only
Route::livewire('/description/create', 'description-create')->name('description.create')->middleware('auth');
Route::livewire('/projects/lists', 'projects-lists')->name('projects.lists')->middleware('auth');
Route::livewire('/projects/add', 'projects-create')->name('projects.create')->middleware('auth');
Route::post('/upload', 'UploadController@index')->middleware('auth');


