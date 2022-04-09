<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Validation\Validator;
use TheSeer\Tokenizer\TokenCollection;

use Illuminate\Support\Facades\Validator;

class ApiAuthenticationController extends Controller
{
    public $successStatus = 200;


    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // $token = $user->createToken('Laravel8PassportAuth')->accessToken;

        return response()->json(['token' => $user], 200);
    }



    // public function userInfo()
    // {
    //     dd('asdf');
    //     $user = auth()->user();
    //     return response()->json(['user' => $user], 200);
    // }
    public function login(Request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password

        ];

        // dd($data);

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}