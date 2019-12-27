<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


///User End Points
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::get('/users', 'AuthController@getAllUsers');

///Grades routes
Route::get('grades', ['uses' => 'GradeController@getAllGrades']);
Route::post('grade', ['uses' => 'GradeController@postGrade']);
Route::get('grade/{gradeId}', ['uses' => 'GradeController@getGrade']);
Route::put('grade/{gradeId}', ['uses' => 'GradeController@putGrade']);
Route::delete('grade/{gradeId}', ['uses' => 'GradeController@deleteGrade']);

///Subjects routes
Route::get('subjects', ['uses' => 'SubjectController@getAllSubjects']);
Route::post('subject', ['uses' => 'SubjectController@postSubject']);
Route::get('subject/{subjectId}', ['uses' => 'SubjectController@getSubject']);
Route::put('subject/{subjectId}', ['uses' => 'SubjectController@putSubject']);
Route::delete('subject/{subjectId}', ['uses' => 'SubjectController@deleteSubject']);

///Examinations routes
Route::get('examinations', ['uses' => 'ExaminationController@getAllExaminations']);
Route::post('examination', ['uses' => 'ExaminationController@postExamination']);
Route::get('examination/{examinationId}', ['uses' => 'ExaminationController@getExamination']);
Route::put('examination/{examinationId}', ['uses' => 'ExaminationController@putExamination']);
Route::delete('examination/{examinationId}', ['uses' => 'ExaminationController@deleteExamination']);

///Questions routes
Route::get('questions', ['uses' => 'QuestionController@getAllQuestions']);
Route::post('question', ['uses' => 'QuestionController@postQuestion']);
Route::get('question/{questionId}', ['uses' => 'QuestionController@getQuestion']);
Route::put('question/{questionId}', ['uses' => 'QuestionController@putQuestion']);
Route::delete('question/{questionId}', ['uses' => 'QuestionController@deleteQuestion']);
Route::get('question/image/{questionId}', ['uses' => 'QuestionController@viewFile']);

///Answers routes
Route::get('answers', ['uses' => 'AnswerController@getAllAnswers']);
Route::post('answer', ['uses' => 'AnswerController@postAnswer']);
Route::get('answer/{answerId}', ['uses' => 'AnswerController@getAnswer']);
Route::put('answer/{answerId}', ['uses' => 'AnswerController@putAnswer']);
Route::delete('answer/{answerId}', ['uses' => 'AnswerController@deleteAnswer']);


///Ranks routes
Route::get('ranks', ['uses' => 'RankController@getAllRanks']);
Route::post('rank', ['uses' => 'RankController@postRank']);
Route::get('rank/{rankId}', ['uses' => 'RankController@getRank']);
Route::delete('rank/{rankId}', ['uses' => 'RankController@deleteRank']);

///students routes
Route::get('students', ['uses' => 'StudentController@getAllStudents']);
Route::post('student', ['uses' => 'StudentController@postStudent']);
Route::get('student/{studentId}', ['uses' => 'StudentController@getStudent']);
Route::put('student/{studentId}', ['uses' => 'StudentController@putStudent']);
Route::delete('student/{studentId}', ['uses' => 'StudentController@deleteStudent']);


///Roles routes
Route::get('roles', ['uses' => 'RoleController@getAllRoles']);
Route::post('role', ['uses' => 'RoleController@postRole']);
Route::get('role/{roleId}', ['uses' => 'RoleController@getRole']);
Route::put('role/{roleId}', ['uses' => 'RoleController@putRole']);
Route::delete('role/{roleId}', ['uses' => 'RoleController@deleteRole']);
