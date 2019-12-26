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

