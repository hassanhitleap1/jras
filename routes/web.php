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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('home.admin'); 
    Route::resources([
            'students' => 'Admin\StudentController',
            'admins' => 'Admin\AdminController',
            'teachers'=> 'Admin\TeacherController'
        ]);
});


Route::prefix('teacher')->middleware(['auth'])->group(function () {
    Route::get('/', 'Teacher\HomeController@index')->name('home.teacher'); 
    Route::resources([
        'students' => 'Teacher\StudentController',
        'courses' => 'Teacher\CoursesController',
    ]);
});