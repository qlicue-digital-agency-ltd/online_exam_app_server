<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class ProfileController extends Controller
{

    // Gets all profiles from the database
    public function getAllProfiles()
    {
        return response()->json(['profiles' => Profile::all()], 200);
    }

    // return a single profile from the database
    public function getProfile($profileId)
    {
        $profile = Profile::find($profileId);
        if (!$profile) return response()->json(['error' => 'Profile not found'], 404);

        return response()->json(['profile' => $profile], 200);
    }

    public function postProfile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'user_id' => 'required',
        ]);

        $path = null;

        if ($validator->fails()){
            if (REQ::is('api/*'))
            return response()->json(['errors' => $validator->errors(),], 404);
            return back()->with('error',$validator->errors());
        } 
        

        $user = User::find($request->input('user_id'));
        if (!$user) {
            if (REQ::is('api/*'))
            return response()->json(['error' => 'Parent not found'], 404);
            return back()->with('error','user not found');
        }
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('profile');
        }

        $profile = new Profile();

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->image = $path;
        $profile->gender = $request->input('gender');

        $user->profile()->save($profile);
        if (REQ::is('api/*'))
        return  response()->json(['profile' => $profile], 201, [], JSON_NUMERIC_CHECK);
        return redirect('/home');
    }

    public function putProfile(Request $request, $profileId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $profile = Profile::find($profileId);
        if (!$profile) return response()->json(['error' => 'Profile not found'], 404);

        $profile->update([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'user_id' => $request->input('user_id')

        ]);

        return response()->json(['profile' => $profile], 201);
    }

    public function deleteProfile($profileId)
    {
        $profile = Profile::find($profileId);
        if (!$profile) return response()->json(['error' => 'Profile not found'], 404);

        $profile->delete();
        return response()->json(['message' => 'Profile deleted Successfully'], 201);
    }
}
