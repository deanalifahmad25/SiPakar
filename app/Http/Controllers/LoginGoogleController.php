<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class LoginGoogleController extends Controller
{
    use HasRoles;

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'password' => $callback->id,
            'avatar' =>  $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $user->assignRole($userRole);

        $users = User::where('email', $data['email']);

        $updateData = $users->update([
            'is_login_google' => true
        ]);

        Auth::login($user, true);

        return redirect()->route('dashboard');
    }
}
