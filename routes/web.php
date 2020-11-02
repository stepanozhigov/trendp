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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {

    Route::view('/', 'backend.index');
    Route::resource('projects', 'Auth\ProjectController', ['except' => 'show']);
    Route::resource('vacancys', 'Auth\VacancyController', ['except' => 'show']);

    Route::group(['prefix' => 'leads'], function () {
        Route::get('/', 'Auth\LeadController@index')->name('leads.index');
        Route::get('{lead}', 'Auth\LeadController@show')->name('leads.show');
        Route::delete('{lead}', 'Auth\LeadController@destroy')->name('leads.destroy');
    });
});

Route::get('/promotion/lead/', 'frontend\PageController@lead');

Route::get('/quiz-site', 'frontend\PageController@quizSite');
Route::get('/quiz-promo', 'frontend\PageController@quizPromo');

Route::get('/{any}', 'frontend\PageController@app')->where('any', '.*');

Route::post('/leads', 'Auth\LeadController@store')->name('leads.store');
