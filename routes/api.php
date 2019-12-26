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


Route::get('grades', ['uses' => 'GradeController@getAllGrades']);
Route::post('grade', ['uses' => 'GradeController@postGrade']);
Route::get('grade/{gradeId}', ['uses' => 'GradeController@getGrade']);
Route::put('grade/{gradeId}', ['uses' => 'GradeController@putGrade']);
Route::delete('grade/{gradeId}', ['uses' => 'GradeController@deleteGrade']);


Route::get('subjects', ['uses' => 'SubjectController@getAllSubjects']);
Route::post('subject', ['uses' => 'SubjectController@postSubject']);
Route::get('subject/{subjectId}', ['uses' => 'SubjectController@getSubject']);
Route::put('subject/{subjectId}', ['uses' => 'SubjectController@putSubject']);
Route::delete('subject/{subjectId}', ['uses' => 'SubjectController@deleteSubject']);



Route::get('examinations', ['uses' => 'ExaminationController@getAllExaminations']);
Route::post('examination', ['uses' => 'ExaminationController@postExamination']);
Route::get('examination/{examinationId}', ['uses' => 'ExaminationController@getExamination']);
Route::put('examination/{examinationId}', ['uses' => 'ExaminationController@putExamination']);
Route::delete('examination/{examinationId}', ['uses' => 'ExaminationController@deleteExamination']);



Route::get('questions', ['uses' => 'QuestionController@getAllQuestions']);
Route::post('question', ['uses' => 'QuestionController@postQuestion']);
Route::get('question/{questionId}', ['uses' => 'QuestionController@getQuestion']);
Route::put('question/{questionId}', ['uses' => 'QuestionController@putQuestion']);
Route::delete('question/{questionId}', ['uses' => 'QuestionController@deleteQuestion']);
Route::get('question/image/{questionId}', ['uses' => 'QuestionController@viewFile']);


Route::get('answers', ['uses' => 'AnswerController@getAllAnswers']);
Route::post('answer', ['uses' => 'AnswerController@postAnswer']);
Route::get('answer/{answerId}', ['uses' => 'AnswerController@getAnswer']);
Route::put('answer/{answerId}', ['uses' => 'AnswerController@putAnswer']);
Route::delete('answer/{answerId}', ['uses' => 'AnswerController@deleteAnswer']);


Route::get('ranks', ['uses' => 'RankController@getAllRanks']);
Route::post('rank', ['uses' => 'RankController@postRank']);
Route::get('rank/{rankId}', ['uses' => 'RankController@getRank']);
Route::delete('rank/{rankId}', ['uses' => 'RankController@deleteRank']);
