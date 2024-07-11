<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Age;
use App\Models\Gender;
use App\Models\Profile;
use App\Models\Profile_Image;

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
        $existingImage = $existingProfile ? $existingProfile->profile_image : null;

        if ($existingProfile) {
            $existingProfile->delete();
        }

        $profile = $request->only(['nickname', 'gender', 'age']);
        $profile['user_id'] = $loginUser->id;
        $profile['gender_id'] = Gender::where('gender', $profile['gender'])->first()->id;
        $profile['age_id'] = $profile['age'];

        $newProfile = Profile::create($profile);

        $newHasImage = $request->hasFile('my_image');
        if ($newHasImage && $existingImage) {
            $existingImage->delete();
        }
        // 新しい画像がアップロードされた場合、その画像を保存
        if ($newHasImage) {
            $imageData = $request->file('my_image');
            $imageName = uniqid() . '.' . $imageData->getClientOriginalExtension();
            $imageData->storeAs('public', $imageName);

            Profile_Image::create([
                'profile_id' => $newProfile->id,
                'my_image' => 'storage/' . $imageName
            ]);
        }
        // 新しい画像がアップロードされていない場合、既存の画像を新しいプロフィールに関連付ける
        if ($existingImage) {
            Profile_Image::create([
                'profile_id' => $newProfile->id,
                'my_image' => $existingImage->my_image
            ]);
        }

        return redirect()->route('top');
    }
}
