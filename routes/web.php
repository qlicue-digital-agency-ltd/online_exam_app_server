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


 Route::post('/profile','ProfileController@postProfile')->name('profile');
 Route::get('/profile', function () {
   return view('pages.profile');
})->middleware('auth');


// ----------------- USER ROOTS-------------------//


Route::get('/users', 'AuthController@getAllUsers');

 Route::get('/user_group', 'RoleController@getAllRoles');

 Route::get('/delete/user/{userId}','AuthController@delete')->name('user.delete');

 Route::get('/edit/user/{userId}','AuthController@delete')->name('user.delete');


//------------------- EXAMS ROOTS------------------//


Route::get('/exams', 'ExaminationController@getAllExaminations');
Route::Post('/create/exam', 'ExaminationController@postExamination' )->name('create.exam');
Route::get('/create/exam/{examinationId}', 'ExaminationController@createExam')->name('view.exam');
Route::get('/delete/examination/{examinationId}','ExaminationController@deleteExamination')->name('examiantion.delete');


// ------------------- QUESTIONS ROOTS-----------------//


Route::get('/question', 'QuestionController@getAllQuestions');
Route::Post('/question', 'QuestionController@postQuestionWithAnswers')->name('question');
Route::Post('/create/exam/{examinationId}', 'QuestionController@postQuestion')->name('update.question');
// Route::get('/delete/question/{questionId}','QuestionController@deleteQuestion')->name('question.delete');


// ------------------ ANSWERS ROOTS-----------------------//

Route::Post('create/exam/{examinationId}/{question}/', 'AnswersController@postAnswer')->name('answer');

// ------------------ DASHBOARD ROOTS-------------------//


Route::get('/home', function () {
    return view('pages.home');
});



 

 



 

 


 

 

 

 


  









