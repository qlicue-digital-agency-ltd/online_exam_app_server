<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    // Gets all students from the database
    public function getAllStudents()
    {
        return response()->json(['students' => Student::all()], 200);
    }

    public function getStudents($userId)
    {
        $user = User::find($userId);
        if (!$user) return response()->json(['error' => 'User not found'], 404);

        $students = $user->students;
        return response()->json(['students' => $students], 200, [], JSON_NUMERIC_CHECK);
    }

    // return a single student from the database
    public function getStudent($studentId)
    {
        $student = Student::find($studentId);
        if (!$student) return response()->json(['error' => 'Student not found'], 404);

        return response()->json(['student' => $student], 200);
    }

    public function postStudent(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'grade_id' => 'required',
            'district_id' => 'required',
            'region_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'school_name' => 'required',
            'user_id' => 'required',
        ]);

        $path = null;

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $user = User::find($request->input('user_id'));
        if (!$user) return response()->json(['error' => 'Parent not found'], 404);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('profile');
        }

        $student = new Student();

        $student->name = $request->input('name');
        $student->image = $path;
        $student->grade_id = $request->input('grade_id');
        $student->district_id = $request->input('district_id');
        $student->region_id = $request->input('region_id');
        $student->birthday = $request->input('birthday');
        $student->gender = $request->input('gender');
        $student->school_name = $request->input('school_name');

        $user->students()->save($student);

        return  response()->json(['student' => $student], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putStudent(Request $request, $studentId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'grade_id' => 'required',
            'district_id' => 'required',
            'region_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'school_name' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $student = Student::find($studentId);
        if (!$student) return response()->json(['error' => 'Student not found'], 404);

        $student->update([
            'name' => $request->input('name'),
            'grade_id' => $request->input('grade_id'),
            'district_id' => $request->input('district_id'),
            'region_id' => $request->input('region_id'),
            'birthday' => $request->input('birthday'),
            'gender' => $request->input('gender'),
            'school_name' => $request->input('school_name'),
            'user_id' => $request->input('user_id')

        ]);

        return response()->json(['student' => $student], 201);
    }

    public function deleteStudent($studentId)
    {
        $student = Student::find($studentId);
        if (!$student) return response()->json(['error' => 'Student not found'], 404);

        $student->delete();
        return response()->json(['message' => 'Student deleted Successfully'], 201);
    }
}
