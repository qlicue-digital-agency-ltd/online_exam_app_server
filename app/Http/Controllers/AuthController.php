<?php

namespace App\Http\Controllers;

use App\Events\UserHasRegisteredSucceffulyEvent;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class AuthController extends Controller
{

    public function getAllUsers()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->roles;
        }
        if (REQ::is('api/*'))
        return response()->json(['users' => $users]);

        return view('pages.users',['users'=>$users]);
    }

    
public function register(Request $request)
{

    $validator = Validator::make($request->all(), [
        'phone' => 'required|unique:users',
        'password' => 'required',
    ]);

    if ($validator->fails()) {

        // pass validator errors as errors object for ajax response

        if (REQ::is('api/*'))
        return response()->json([
            'errors' => $validator->errors(),
            'message' => $validator->errors()->first(),

        ], 404);

         return back()->with('error',$validator->errors()->first());
    }
    $user = User::create([
        'phone' => $request->phone,
        'password' => bcrypt($request->password),
    ]);

    $token = auth()->login($user);


    ///event to assign a default user role
    event(new UserHasRegisteredSucceffulyEvent($user, 'Parent'));

    if (REQ::is('api/*'))
    return response()->json([
        'token' => $token,
        'id' => auth()->user()->id,
        'phone' => auth()->user()->phone,
        'profile' => auth()->user()->profile,
    ], 201, [], JSON_NUMERIC_CHECK);

    return redirect('/profile');
}


    public function loginTest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails())
        return back()->with('error',$validator->errors()->first());
        $credentials = $request->only('phone', 'password');

        if(Auth::attempt($credentials))
        {
            if(!auth()->user()->profile)
            return redirect('/profile');
            return redirect('/home');
        }
        else return back()->with('error','Wrong number or password');

    }
      
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response
            if (REQ::is('api/*'))
            return response()->json([
                'errors' => $validator->errors(),
                'message' => $validator->errors()->first(),

            ], 404);

            return back()->with('error',$validator->errors()->first());
        }
        $credentials = $request->only('phone', 'password');

        if (REQ::is('api/*')) {
        if (!$token = auth()->attempt($credentials))
             
            return response()->json(['error' => 'Unauthorized user'], 401);

        
        else {


        return response()->json([
            'token' => $token,
            'id' => auth()->user()->id,
            'phone' => auth()->user()->phone,
            'profile' => auth()->user()->profile,
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    if(Auth::attemp($credentials))
        {
            // if(!auth()->user()->profile)
            return redirect('/profile');
        }
        else return back()->with('error','Wrong number or password');

    }
    }
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function delete($userId)
    {
        $user=User::find($userId);
        if(!$user) return back()->with('error','user  not found');
        $user->delete();

        return back()->with('msg','user deleted succcessful');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            //'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }




    public function authenticate(Request $request)
    {
        $credentials = $request->only('phone', 'password');

         if(Auth::attempt($credentials))
        {
            
            if(!auth()->user()->profile)
             return redirect('/profile');
            return redirect('/home');
        }
        else return back()->with('error','Wrong number or password');
        return 'Not authenticated';
    }

}
