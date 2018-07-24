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
 
 Route::get('/logout', function () {
    return view('logout');
});
 

 //Route::get('/stinfo','QuizController@stinfo');
 Route::get('/time','QuizController@time'); 
 Route::get('/quiz','QuizController@quiz'); 
 Route::post('/Login','QuizController@login'); 
 Route::get('/result2','AdminController@result2'); 
 Route::get('/allusers','AdminController@allusers'); 
 Route::get('/all_Ques','AdminController@all_Ques'); 
 Route::get('/destroy_user/{id}','AdminController@destroy_user'); 
 Route::get('/edit_ur_detail/{username}','AdminController@edit_ur_detail'); 
 Route::post('/update_ur_detail/{id}','AdminController@update_ur_detail');

 Route::get('/edit_ques/{id}','AdminController@edit_ques'); 
 Route::post('/update_ques/{id}','AdminController@update_ques'); 
 Route::get('/destroy_ques/{id}','AdminController@destroy_ques'); 





    Route::get('/next','QuizController@next');
    Route::get('/back','QuizController@back');
    Route::get('/circle','QuizController@circle');
    Route::get('/response','QuizController@response');
    
    
    Route::get('/admin','adminController@admin1');
    Route::post('/admin1','adminController@admin2');
    Route::get('/adminlogin','admincontroller@adminLogin');
    Route::post('/logincomplete','adminController@admin4');
    Route::get('/result','adminController@result');
    Route::get('/result_view','adminController@result_view');
    Route::get('/addQuiz', function () {
    return view('admin.entry2');
 
    




});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
