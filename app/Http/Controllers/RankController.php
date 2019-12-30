<?php

namespace App\Http\Controllers;

use App\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RankController extends Controller
{
    // Gets all rank from the database
    public function getAllRanks()
    {
        return response()->json(['ranks' => Rank::all()], 200);
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



        $rank = new Rank();

        $rank->examination_id = $request->input('examination_id');
        $rank->student_id = $request->input('student_id');
        $rank->score = $request->input('score');
  

        $rank->save();

        return  response()->json(['rank' => $rank], 201);
    }



    public function deleteRank($rankId)
    {
        $rank = Rank::find($rankId);
        if (!$rank) return response()->json(['error' => 'Rank not found'], 404);

        $rank->delete();
        return response()->json(['message' => 'Rank deleted Successfully'], 201);
    }
}
