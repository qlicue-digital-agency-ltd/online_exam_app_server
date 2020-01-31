<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\QuestionHasBeenCreatedEvent;
use Illuminate\Support\Facades\Request as REQ;

class QuestionController extends Controller
{
    // Gets all questions from the database
    public function getAllQuestions()
    {
        if (REQ::is('api/*'))
        return response()->json(['questions' => Question::all()], 200);
        return view('pages.create_exam',['questions'=>question::all(),'answers'=>answer::all()]);
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

        event(new QuestionHasBeenCreatedEvent($question,$request));
        if (REQ::is('api/*'))
        return  response()->json(['question' => $question], 201);
        return view('pages.create_exam',['questions'=>question::all(),'answers'=>answer::all()]);
    }

    public function putQuestion(Request $request, $questionId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'number' => 'required',
            'examination_id' => 'required',
            'a_content' => 'required',
            'b_content' => 'required',
            'c_content' => 'required',
            'd_content' => 'required',
            'is_correct' => 'required',
            
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $question->update([
            'content' => $request->input('name'),
            'number' => $request->input('number'),
            'examination_id' => $request->input('name'),
            'a_content' => $request->input('name'),
            'b_content' => $request->input('name'),
            'c_content' => $request->input('name'),
            'd_content' => $request->input('name'),
            'is_correct' => $request->input('name'),
            
        ]);
        if (REQ::is('api/*'))
        return response()->json(['question' => $question], 201);
        return back()->with('msg','Question deleted Successfully');
    }

    public function deleteQuestion($questionId)
    {
        $question = Question::find($questionId);
        if (!$question) return response()->json(['error' => 'Question not found'], 404);

        $question->delete();
        if (REQ::is('api/*'))
        return response()->json(['message' => 'Question deleted Successfully'], 201);
        return back()->with('msg','Question deleted Successfully');
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

    public function postQuestionWithAnswers(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'content' => 'required',
                'number' => 'required',
                'examination_id' => 'required',
                'a_content' => 'required',
                'b_content' => 'required',
                'c_content' => 'required',
                'd_content' => 'required',
                'is_correct' => 'required',
                
               
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
    
            // event(new QuestionHasBeenCreatedEvent($question,$request));
            $is_correct = $request->input('is_correct');
            $answer = new Answer();
            $answer->content = $request->input('a_content');
            $answer->alphabet = 'A';
            if($is_correct === 'A')
            $answer->is_correct = true;
            else 
            $answer->is_correct = false;
            $question->answers()->save($answer);

            $answer = new Answer();
            $answer->content = $request->input('b_content');
            $answer->alphabet = 'B';
            if($is_correct ==='B')
            $answer->is_correct = true;
            else 
            $answer->is_correct = false;
            $question->answers()->save($answer);

            $answer = new Answer();
            $answer->content = $request->input('c_content');
            $answer->alphabet = 'C';
            if($is_correct === 'C')
            $answer->is_correct = true;
            else 
            $answer->is_correct = false;
            $question->answers()->save($answer);

            $answer = new Answer();
            $answer->content = $request->input('d_content');
            $answer->alphabet = 'D';
            if($is_correct === 'D')
            $answer->is_correct = true;
            else 
            $answer->is_correct = false;
            $question->answers()->save($answer);

            
           
            
            if (REQ::is('api/*'))
            return  response()->json(['question' => $question], 201);
            // return view('pages.create_exam',['questions'=>question::all(),'answers'=>answer::all(),'a'=>answer::all()]);
            return back();
        }
    

    
}
