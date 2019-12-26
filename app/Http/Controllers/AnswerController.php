<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{

    // Gets all answers from the database
    public function getAllAnswers()
    {
        return response()->json(['answers' => Answer::all()], 200);
    }


    // return a single answer from the database
    public function getAnswer($answerId)
    {
        $answer = Answer::find($answerId);
        if (!$answer) return response()->json(['error' => 'Answer not found'], 404);

        return response()->json(['answer' => $answer], 200);
    }

    public function postAnswer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            
            'content' => 'required',
            'alphabet' => 'required',
            'is_correct' => 'required',
            'question_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $question = Question::find($request->input('question_id'));
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $answer = new Answer();

        $answer->content = $request->input('content');
        $answer->alphabet = $request->input('alphabet');
        $answer->is_correct = $request->input('is_correct');

        $question->answers()->save($answer);

        return  response()->json(['answer' => $answer], 201);
    }

    public function putAnswer(Request $request, $answerId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'is_correct' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $answer = Answer::find($answerId);
        if (!$answer) return response()->json(['error' => 'Answer not found'], 404);

        $answer->update([
            'content' => $request->input('content'),
            'is_correct' => $request->input('is_correct')
        ]);

        return response()->json(['answer' => $answer], 201);
    }

    public function deleteAnswer($answerId)
    {
        $answer = Answer::find($answerId);
        if (!$answer) return response()->json(['error' => 'Answer not found'], 404);

        $answer->delete();
        return response()->json(['message' => 'Answer deleted Successfully'], 201);
    }
}
