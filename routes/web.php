<?php

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

Route::get('/', function(){
    return view('home');
})->name('/');
Route::get('/course', 'CourseController@index')->name('course');
Route::prefix('course')->group(function(){
    route::get('/scaling',function(){
        return view('scaling');
    })->name('scaling');
    route::prefix('scaling')->group(function(){
        route::get('/vid-1',function(){
            return view('video.vid1');
        })->name('vid1');
        route::get('/vid-2',function(){
            return view('video.vid2');
        })->name('vid2');
        route::get('/vid-3',function(){
            return view('video.vid3');
        })->name('vid3');
        route::get('/vid-4',function(){
            return view('video.vid4');
        })->name('vid4');
    });
});
