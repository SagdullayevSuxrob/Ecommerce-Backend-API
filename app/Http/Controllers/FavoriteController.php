<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function index()
    {
        return auth()->user()->favorites()->paginate(20);
    }


    /**
     * TODO refactor responses, make standart format
    **/
    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            "success" => "true"
        ]);
    }

    public function destroy($favorite_id)
    {
        if (auth()->user()->hasFavorite($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);

            return response()->json(["Deleted successfully"]);
        }

        return response()->json(["Favorite doesn't exist in this user's profile"]);
    }
}
