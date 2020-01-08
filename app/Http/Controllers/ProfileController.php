<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $user = User::find($request->input('user_id'));
        if (!$user) return response()->json(['error' => 'Parent not found'], 404);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('profile');
        }

        $profile = new Profile();

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->image = $path;
        $profile->gender = $request->input('gender');

        $user->profile()->save($profile);

        return  response()->json(['profile' => $profile], 201, [], JSON_NUMERIC_CHECK);
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
