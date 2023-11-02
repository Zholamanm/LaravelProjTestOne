<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserDetailsController extends Controller
{
    public function index()
    {
        $details = UserDetails::all();
        return response()->json($details);
    }

    public function show($id)
    {
        $details = UserDetails::find($id);
        if (!$details) {
            return response()->json(['message' => 'User details not found'], 404);
        }
        return response()->json($details);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_model_id' => 'required|exists:user_models,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'citizenship' => 'required',
            'address' => 'required',
            'birth_date' => 'required|date',
            'mob_phone' => 'required',
            'job_title' => 'nullable',
            'postcode' => 'required',
        ]);

        $details = UserDetails::create($data);
        return response()->json($details, 201);
    }

    public function update(Request $request, $id)
    {
        $details = UserDetails::find($id);
        if (!$details) {
            return response()->json(['message' => 'User details not found'], 404);
        }

        $rules = ([
            'user_model_id' => 'sometimes|required|exists:user_models,id',
            'first_name' => 'sometimes|required',
            'last_name' => 'sometimes|required',
            'citizenship' => 'sometimes|required',
            'address' => 'sometimes|required',
            'birth_date' => 'sometimes|required|date',
            'mob_phone' => 'sometimes|required',
            'job_title' => 'sometimes|required',
            'postcode' => 'sometimes|required',
        ]);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = $validator->validated();

        $details->update($data);
        return response()->json($details);
    }

    public function destroy($id)
    {
        $details = UserDetails::find($id);
        if (!$details) {
            return response()->json(['message' => 'User details not found'], 404);
        }
        $details->delete();
        return response()->json(['message' => 'User details deleted'], 200);
    }
}
