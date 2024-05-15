<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // Set validation
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required'
        ]);

        // If validations fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create new user
        $user = new UserModel();
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = bcrypt($request->password);
        $user->level_id = $request->level_id;
        $user->save();

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user
        ], 201);
    }
}
