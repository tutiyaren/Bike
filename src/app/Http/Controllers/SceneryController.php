<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SceneryPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Scenery_Genre;
use App\Models\Area;
use App\Models\Scenery_Post;
use App\Models\Scenery_Another_Image;

class SceneryController extends Controller
{
    public function index(Request $request)
    {
        $paginate = 18;
        $sceneryPosts = Scenery_Post::with(['scenery_another_images', 'profile', 'profile.profile_image'])
        ->AreaSearch($request->area)
        ->SceneryGenreSearch($request->scenery_genre)
        ->TitleSearch($request->title)
        ->paginate($paginate);

        $areas = Area::get();
        $sceneryGenres = Scenery_Genre::get();

        return view('favorite.scenery.index', compact('sceneryPosts', 'areas', 'sceneryGenres'));
    }

    public function create()
    {
        $areas = Area::get();
        $sceneryGenres = Scenery_Genre::get();

        return view('favorite.scenery.create', compact('areas', 'sceneryGenres'));
    }

    public function store(SceneryPostRequest $request)
    {
        $loginProfile = Auth::user()->profile->id;
        $sceneryPostData = $request->only(['title', 'content']);
        $sceneryPostData['profile_id'] = $loginProfile;
        $sceneryPostData['area_id'] = $request->input('area');
        $sceneryPostData['scenery_genre_id'] = $request->input('scenery_genre');

        $imageData = $request->file('image1');
        $imageName = uniqid() . '.' . $imageData->getClientOriginalExtension();
        $imageData->storeAs('public', $imageName);
        $sceneryPostData['image'] = $imageName;

        $sceneryPost = Scenery_Post::create($sceneryPostData);

        $anotherImages = ['image2', 'image3', 'image4'];
        foreach ($anotherImages as $anotherImage) {
            if ($request->hasFile($anotherImage)) {
                $imageData = $request->file($anotherImage);
                $imageName = uniqid() . '.' . $imageData->getClientOriginalExtension();
                $imageData->storeAs('public', $imageName);

                Scenery_Another_Image::create([
                    'scenery_post_id' => $sceneryPost->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('scenery.index');
    }
}
