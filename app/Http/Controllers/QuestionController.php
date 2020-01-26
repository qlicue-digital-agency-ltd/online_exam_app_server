<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class QuestionController extends Controller
{
    // Gets all questions from the database
    public function getAllQuestions()
    {
        if (REQ::is('api/*'))
        return response()->json(['questions' => Question::all()], 200);
        return view('pages.question',['Questions'=>Question::all(),'Examination'=>Examination::all()]);
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
            'number' => 'required',
            'examination_id' => 'required',
        ]);
        $path = null;

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);


        $examination = Examination::find($request->input('examination_id'));
        if (!$examination) return response()->json(['error' => 'Examination not found'], 404);


        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('questions');
        }

        $question = new Question();
        $question->number = $request->input('number');
        $question->content = $request->input('content');
        $question->image = $path;

        $examination->questions()->save($question);

        return  response()->json(['question' => $question], 201);
    }

    public function putQuestion(Request $request, $questionId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'number' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $question->update([
            'content' => $request->input('name'),
            'number' => $request->input('number')
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
