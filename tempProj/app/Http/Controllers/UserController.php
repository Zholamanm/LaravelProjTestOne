<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'avatar' => 'nullable',
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = UserModel::create($data);
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $rules = [
            'username' => 'sometimes|required',
            'email' => 'sometimes|required|email',
            'password' => 'sometimes|required',
            'phone' => 'sometimes|required',
            'avatar' => 'nullable',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = $validator->validated();
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'User deleted'], 200);
    }
    public function testUpdate($id)
    {
        return response()->json(['message' => 'Test update method'], 200);
    }
}
