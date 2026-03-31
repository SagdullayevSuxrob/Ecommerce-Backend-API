<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->success(
            'User logged in successfully',
            ['token' => $user->createToken($request->email)->plainTextToken]
        );
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return $this->success('User logged out successfully');
    }



    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->assignRole('customer');

        // photo maydoni users jadvaliga kiritilmasligi uchun olib tashlang
        if (isset($data['photo'])) {
            unset($data['photo']);
        }


        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('users/' . $user->id, 'public');
            $user->photos()->create([
                'full_name' => $request->file('photo')->getClientOriginalName(),
                'path' => $path,
            ]);
        }

        return $this->success(
            'User registered successfully',
            ['token' => $user->createToken($request->email)->plainTextToken]
        );
    }



    public function changePassword()
    {
        $user = auth()->user();
        $data = request()->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($data['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The provided password is incorrect.'],
            ]);
        }

        $user->password = Hash::make($data['new_password']);
        $user->save();

        return $this->success('Password changed successfully');
    }



    public function user(Request $request)
    {
        return $this->response(new UserResource($request->user()));
    }
}
