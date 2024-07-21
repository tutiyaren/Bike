<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Food_Genre;
use App\Models\Area;
use App\Models\Food_Post;
use App\Models\Food_Another_Image;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $paginate = 18;
        $foodPosts = Food_Post::with(['food_another_images', 'profile', 'profile.profile_image'])
        ->AreaSearch($request->area)
        ->FoodGenreSearch($request->food_genre)
        ->TitleSearch($request->title)
        ->paginate($paginate);

        $areas = Area::get();
        $foodGenres = Food_Genre::get();
        
        return view('favorite.food.index', compact('foodPosts','areas', 'foodGenres'));
    }

    public function create()
    {
        $areas = Area::get();
        $foodGenres = Food_Genre::get();

        return view('favorite.food.create', compact('areas', 'foodGenres'));
    }

    public function store(FoodPostRequest $request)
    {
        $loginProfile = Auth::user()->profile->id;
        $foodPostData = $request->only(['title', 'content']);
        $foodPostData['profile_id'] = $loginProfile;
        $foodPostData['area_id'] = $request->input('area');
        $foodPostData['food_genre_id'] = $request->input('food_genre');

        $imageData = $request->file('image1');
        $imageName = uniqid() . '.' . $imageData->getClientOriginalExtension();
        $imageData->storeAs('public', $imageName);
        $foodPostData['image'] = $imageName;

        $foodPost = Food_Post::create($foodPostData);

        $anotherImages = ['image2','image3', 'image4'];
        foreach ($anotherImages as $anotherImage) {
            if ($request->hasFile($anotherImage)) {
                $imageData = $request->file($anotherImage);
                $imageName = uniqid() . '.' . $imageData->getClientOriginalExtension();
                $imageData->storeAs('public', $imageName);

                Food_Another_Image::create([
                    'food_post_id' => $foodPost->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('food.index');
    }
}
