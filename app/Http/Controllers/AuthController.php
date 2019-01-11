<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    protected function jwt(User $user)
    {
        $payload = [
            'iss' => 'oauth2',
            'sub' => $user->id,
            'iat' => time(),
            'exp' => time() + 60 * 60,
        ];

        return JWT::encode($payload, env('JWT_SECRET'));
    }

    public function register()
    {
        $this->validate($this->request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required',
        ]);
        $input = $this->request->all();
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone_number = $input['phone_number'];
        $user->password = Hash::make($input['password']);
        $user->balance = 0;
        $user->status = 'ACTIVE';
        $user->save();
        return $this->ok('Register success',$user);
    }

    public function authenticate()
    {
        $this->validate($this->request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $this->request->input('email'))->first();
        if (!$user) {
            return response()->json([
                'error' => 'Email does not exist.',
            ]);
        }
        if (Hash::check($this->request->input('password'), $user->password)) {
            return $this->ok('Login success', [
                'access_token'=> $this->jwt($user)
            ]);
        }
        return $this->badRequest('Email or password is wrong.');
    }
}
