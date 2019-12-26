<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GradeController extends Controller
{

    // Gets all grades from the database
    public function getAllGrades()
    {
        return response()->json(['grades' => Grade::all()], 200);
    }


    // return a single grade from the database
    public function getGrade($gradeId)
    {
        $grade = Grade::find($gradeId);
        if (!$grade) return response()->json(['error' => 'Grade not found'], 404);

        return response()->json(['grade' => $grade], 200);
    }

    public function postGrade(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);


        $grade = new Grade();

        $grade->name = $request->input('name');

        $grade->save();

        return  response()->json(['grade' => $grade], 201);
    }

    public function putGrade(Request $request, $gradeId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $grade = Grade::find($gradeId);
        if (!$grade) return response()->json(['error' => 'Grade not found'], 404);

        $grade->update([
            'name' => $request->input('name')
        ]);

        return response()->json(['grade' => $grade], 201);
    }

    public function deleteGrade($gradeId)
    {
        $grade = Grade::find($gradeId);
        if (!$grade) return response()->json(['error' => 'Grade not found'], 404);

        $grade->delete();
       return response()->json(['message' => 'Grade deleted Successfully'], 201);
    }
}
