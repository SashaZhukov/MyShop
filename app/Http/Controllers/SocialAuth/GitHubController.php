<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        $githubUser = Socialite::driver('github')->user();

         $user = User::updateOrCreate([
            'github_id' => $githubUser->id
        ],
        [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
            'role' => 'user'
        ]);

        $user->assignRole('user');
        Auth::login($user);

        return redirect()->route('home');
    }
}
