<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Age;
use App\Models\Gender;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $ages = Age::all();
        $loginUser = Auth::user();
        $profile = $loginUser->profile;
        return view('profile.profile', compact('ages', 'profile'));
    }

    public function store(ProfileRequest $request)
    {
        $loginUser = Auth::user();

        $existingProfile = $loginUser->profile;
        if ($existingProfile) {
            $existingProfile->delete();
        }

        $profile = $request->only(['nickname', 'gender', 'age']);
        $profile['user_id'] = $loginUser->id;
        $profile['gender_id'] = Gender::where('gender', $profile['gender'])->first()->id;
        $profile['age_id'] = $profile['age'];

        Profile::create($profile);

        return redirect()->route('top');
    }
}
