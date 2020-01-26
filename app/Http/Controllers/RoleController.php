<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class RoleController extends Controller
{

    // Gets all roles from the database
    public function getAllRoles()
    {
        if (REQ::is('api/*'))
        return response()->json(['roles' => Role::all()], 200);

        return view('pages.user_group',['Roles'=>Role::all()]);
    }


    // return a single role from the database
    public function getRole($roleId)
    {
        $role = Role::find($roleId);
        if (!$role) return response()->json(['error' => 'Role not found'], 404);

        return response()->json(['role' => $role], 200);
    }

    public function postRole(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);


        $role = new Role();

        $role->name = $request->input('name');

        $role->save();

        return  response()->json(['role' => $role], 201);
    }

    public function putRole(Request $request, $roleId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $role = Role::find($roleId);
        if (!$role) return response()->json(['error' => 'Role not found'], 404);

        $role->update([
            'name' => $request->input('name')
        ]);

        return response()->json(['role' => $role], 201);
    }

    public function deleteRole($roleId)
    {
        $role = Role::find($roleId);
        if (!$role) return response()->json(['error' => 'Role not found'], 404);

        $role->delete();
        return response()->json(['message' => 'Role deleted Successfully'], 201);
    }
}
