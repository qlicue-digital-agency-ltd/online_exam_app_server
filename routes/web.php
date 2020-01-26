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



Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/cards', function () {
    return view('pages.cards');
 });

 Route::get('/blank', function () {
    return view('pages.blank');
 });

 Route::get('/create/exam/{examinationId}', 'ExaminationController@createExam')->name('view.exam');

 Route::get('/users', 'AuthController@getAllUsers');

 Route::get('/user_group', 'RoleController@getAllRoles');



 Route::get('/charts', function () {
    return view('pages.charts');
 });

 


 Route::get('/forgot-password', function () {
    return view('pages.forgot-password');
 });

 Route::post('/login', 'AuthController@authenticate')->name('login');
 Route::get('/', function () {
   return view('pages.login');

});
 Route::get('/login', function () {
    return view('pages.login');

 });
 Route::post('/register', 'AuthController@register');
 Route::get('/register', function () {
    return view('pages.register');
 });

 Route::get('/tables', function () {
    return view('pages.tables');
 });

 Route::get('/utilities-animation', function () {
    return view('pages.utilities-animation');
 });

 Route::get('/utilities-border', function () {
    return view('pages.utilities-border');
 });
 Route::get('/utilities-color', function () {
    return view('pages.utilities-color');
 });

 Route::get('/delete/user/{userId}','AuthController@delete')->name('user.delete');

 Route::get('/delete/examination/{examinationId}','ExaminationController@deleteExamination')->name('examiantion.delete');

 Route::post('/profile','ProfileController@postProfile')->name('profile');
 Route::get('/profile', function () {
   return view('pages.profile');
})->middleware('auth');

 Route::get('/utilities-other', function () {
    return view('pages.utilities-other');
 });

//  Route::get('/question', function () {
   // return view('pages.question');
// });

Route::get('/question', 'QuestionController@getAllQuestions');
Route::Post('/question', 'QuestionController@postQuestion' )->name('question');


Route::Post('/create/exam', 'ExaminationController@postExamination' )->name('create.exam');
Route::get('/exams', 'ExaminationController@getAllExaminations');


  









