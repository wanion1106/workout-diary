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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function (){
    //タイムラインへのルート
    Route::get('/home', 'PostController@index')->name('home');
    Route::post('posts/store', 'PostController@store')->name('posts.store');
    Route::post('{post}/delete', 'PostController@delete')->name('posts.delete');
    //日記トップへのルート
    Route::get('/diary', 'DiaryController@index')->name('diary');
    //筋トレ内容のルート
    Route::get('/diary/workout_records', 'WorkoutRecordsController@index')->name('workout_records');
    Route::post('/diary/workout_records/store', 'WorkoutRecordsController@store')->name('workout_records.store');
    Route::post('/diary/{workout_record}/delete', 'WorkoutRecordsController@delete')->name('workout_records.delete');

    //自撮り写真記録のルート
    Route::get('/diary/selfy_records', 'SelfyRecordsController@index')->name('selfy_records');
    Route::post('/diary/selfy_records/store', 'SelfyRecordsController@store')->name('selfy_records.store');
    Route::post('/diary/selfy_records/{selfy_record}/delete', 'SelfyRecordsController@delete')->name('selfy_records.delete');
    //自己評価記録のルート
    Route::get('/diary/selfcheck_records', 'SelfcheckRecordsController@index')->name('selfcheck_records');
    Route::post('/diary/selfcheck_records/store', 'SelfcheckRecordsController@store')->name('selfcheck_records.store');
    //記録一覧表示のルート
    Route::get('/diary/records', 'SearchController@index')->name('records.index');
    Route::post('/diary/records/edit/{created_at}', 'SearchController@edit')->name('records.edit');
    //infoの表示
    Route::get('/info', 'InfoController@index')->name('info');
    //プロフィール編集画面
    Route::get('/profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
    Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');

});

