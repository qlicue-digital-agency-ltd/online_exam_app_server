<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Rank;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RankController extends Controller
{
    // Gets all rank from the database
    public function getAllRanks($examId)
    {

        $ranks = $this->getPostion($examId);

        foreach ($ranks as $rank) {
            $student = Student::find($rank->student_id);
            $rank->student = $student;
        }
        return response()->json(['ranks' => $ranks], 200, [], JSON_NUMERIC_CHECK);
    }


    ///get students results..
    public function getStudentRanks($studentId)
    {

        $student = Student::find($studentId);


        $results =  $student->ranks()->orderBy('score', 'DESC')->get();



        foreach ($results  as $result) {

            //we get the desired examination
            $examination = Examination::find($result->examination_id);
            ///returns rank of all students that attended the exam
            $positions = $this->getPostion($result->examination_id);

            $candidatesRanks =  $examination->ranks;
            $result->candidates = count($candidatesRanks);
            $myRank = $positions->where('student_id', $result->student_id)->first();
            $result->position = $myRank->position;

            ///add a subject name
            $subject = Subject::find($examination->subject_id);
            $result->subject_name = $subject->name;
        }



        return response()->json(['results' => $results], 200);
    }



    // return a single rank from the database
    public function getRank($rankId)
    {
        $rank = Rank::find($rankId);
        if (!$rank) return response()->json(['error' => 'Rank not found'], 404);

        return response()->json(['rank' => $rank->questions], 200);
    }



    public function postRank(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'examination_id' => 'required',
            'score' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $student = Student::find($request->input('student_id'));
        if (!$student) return response()->json(['error' => 'Student not found'], 404);


        $rank = new Rank();

        $rank->examination_id = $request->input('examination_id');
        $rank->score = $request->input('score');


        $student->ranks()->save($rank);

        return  response()->json(['rank' => $rank], 201);
    }



    public function deleteRank($rankId)
    {
        $rank = Rank::find($rankId);
        if (!$rank) return response()->json(['error' => 'Rank not found'], 404);

        $rank->delete();
        return response()->json(['message' => 'Rank deleted Successfully'], 201);
    }

    ///Arranges scores of a n exam by ranks
    public function getPostion($examId)
    {
        $examination = Examination::find($examId);
        if (!$examination) return response()->json(['error' => 'Examination not found'], 404);

        $ranks =  $examination->ranks()->orderBy('score', 'DESC')->get();


        for ($i = 0; $i < count($ranks); $i++) {
            if ($i > 0) {
                if ($ranks[$i - 1]->score == $ranks[$i]->score) {
                    $ranks[$i]->position = $ranks[$i - 1]->position;
                } else {
                    $ranks[$i]->position = $i + 1;
                }
            } else {
                $ranks[$i]->position = $i + 1;
            }
        }

        return $ranks;
    }
}
