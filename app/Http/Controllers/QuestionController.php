<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    // Gets all questions from the database
    public function getAllQuestions()
    {
        return response()->json(['questions' => Question::all()], 200);
    }


    // return a single question from the database
    public function getQuestion($questionId)
    {
        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        return response()->json(['question' => $question], 200);
    }

    public function postQuestion(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        if ($request->hasFile('file')) {
            $this->path = $request->file('file')->store('questions');
        }

        $question = new Question();

        $question->content = $request->input('content');
        $question->image = $this->path;

        $question->save();

        return  response()->json(['question' => $question], 201);
    }

    public function putQuestion(Request $request, $questionId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $question->update([
            'content' => $request->input('name')
        ]);

        return response()->json(['question' => $question], 201);
    }

    public function deleteQuestion($questionId)
    {
        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $question->delete();
        return response()->json(['message' => 'Question deleted Successfully'], 201);
    }

    public function viewFile($questionId)
    {
        $question = Question::find($questionId);
        if (!$question) {
            return response()->json(['message' => 'Question not found', 'status' => false], 404);
        }

        $pathToFile = storage_path('/app/' . $question->image);



        return response()->download($pathToFile);
    }
}
