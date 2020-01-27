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


// ------------ AUTH ROOTS ------------------//

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

Route::get('/delete/user/{userId}','AuthController@delete')->name('user.delete');

 Route::get('/delete/examination/{examinationId}','ExaminationController@deleteExamination')->name('examiantion.delete');

 Route::post('/profile','ProfileController@postProfile')->name('profile');
 Route::get('/profile', function () {
   return view('pages.profile');
})->middleware('auth');


// ----------------- USER ROOTS-------------------//


Route::get('/users', 'AuthController@getAllUsers');

 Route::get('/user_group', 'RoleController@getAllRoles');


//------------------- EXAMS ROOTS------------------//



Route::Post('/create/exam', 'ExaminationController@postExamination' )->name('create.exam');
Route::get('/exams', 'ExaminationController@getAllExaminations');
Route::get('/create/exam/{examinationId}', 'ExaminationController@createExam')->name('view.exam');


// ------------------- QUESTIONS ROOTS-----------------//


Route::get('/question', 'QuestionController@getAllQuestions');
Route::Post('/question', 'QuestionController@postQuestion' )->name('question');


// ------------------ DASHBOARD ROOTS-------------------//


Route::get('/home', function () {
    return view('pages.home');
});



 

 



 

 


 

 

 

 


  









