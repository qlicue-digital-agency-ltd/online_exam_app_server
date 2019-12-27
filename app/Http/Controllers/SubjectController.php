<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    // Gets all subjects from the database
    public function getAllSubjects()
    {
        $subjects = Subject::all();
        foreach ($subjects as $subject) {
            $subject->examinations;
            foreach ($subject->examinations as $examination) {
                $examination->questions;
                foreach ($examination->questions as $question) {
                    $question->answers;
                }
            }
        }
        return response()->json(['subjects' => $subjects], 200);
    }


    // return a single subject from the database
    public function getSubject($subjectId)
    {
        $subject = Subject::find($subjectId);
        if (!$subject) return response()->json(['error' => 'Subject not found'], 404);

        return response()->json(['subject' => $subject], 200);
    }

    public function postSubject(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required|unique:subjects',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);


        $subject = new Subject();

        $subject->name = $request->input('name');
        $subject->name = $request->input('code');

        $subject->save();

        return  response()->json(['subject' => $subject], 201);
    }

    public function putSubject(Request $request, $subjectId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required|unique:subjects',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $subject = Subject::find($subjectId);
        if (!$subject) return response()->json(['error' => 'Subject not found'], 404);

        $subject->update([
            'name' => $request->input('name'),
            'code' => $request->input('code')
        ]);

        return response()->json(['subject' => $subject], 201);
    }

    public function deleteSubject($subjectId)
    {
        $subject = Subject::find($subjectId);
        if (!$subject) return response()->json(['error' => 'Subject not found'], 404);

        $subject->delete();
        return response()->json(['message' => 'Subject deleted Successfully'], 201);
    }
}
