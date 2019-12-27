<?php

namespace App\Http\Controllers;

use App\Events\ExaminationHasBeenCreatedEvent;
use App\Examination;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExaminationController extends Controller
{
    // Gets all examination from the database
    public function getAllExaminations()
    {
        return response()->json(['examinations' => Examination::all()], 200);
    }


    // return a single examination from the database
    public function getExamination($examinationId)
    {
        $examination = Examination::find($examinationId);
        if (!$examination) return response()->json(['error' => 'Examination not found'], 404);

        return response()->json(['examination' => $examination->questions], 200);
    }

    public function postExamination(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'duration' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'subject_id' => 'required',
            'grade_id' => 'required',
            'teacher_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);


        $subject = Subject::find($request->input('subject_id'));
        if (!$subject) return response()->json(['error' => 'Subject not found'], 404);


        $examination = new Examination();
        $examination->duration = $request->input('duration');
        $examination->opening_time = $request->input('opening_time');
        $examination->closing_time = $request->input('closing_time');
        $examination->teacher_id = $request->input('teacher_id');
        $examination->grade_id = $request->input('grade_id');

        $subject->examinations()->save($examination);

        event(new ExaminationHasBeenCreatedEvent($examination, $subject->code));

        return  response()->json(['examination' => $examination], 201);
    }

    public function putExamination(Request $request, $examinationId)
    {
        $validator = Validator::make($request->all(), [
            'duration' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'teacher_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $examination = Examination::find($examinationId);
        if (!$examination) return response()->json(['error' => 'Examination not found'], 404);

        $examination->update([
            'duration' => $request->input('duration'),
            'opening_time' => $request->input('opening_time'),
            'closing_time' => $request->input('closing_time'),
            'teacher_id' => $request->input('teacher_id')
        ]);

        return response()->json(['examination' => $examination], 201);
    }

    public function deleteExamination($examinationId)
    {
        $examination = Examination::find($examinationId);
        if (!$examination) return response()->json(['error' => 'Examination not found'], 404);

        $examination->delete();
        return response()->json(['message' => 'Examination deleted Successfully'], 201);
    }
}
