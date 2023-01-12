<?php

namespace Monolith\Authorization\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if(isset($user) && Hash::check($request->password, $user->password))
            return $user->createToken('default')->plainTextToken;
        else
            return 'Wrong credentials';

    }
}
