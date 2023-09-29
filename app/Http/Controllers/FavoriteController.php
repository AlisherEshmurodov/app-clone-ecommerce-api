<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    public function index()
    {
        return auth()->user()->favorites()->paginate(6);
    }


    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true
        ]);
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy($favorite_id)
    {

        if (auth()->user()->hasFavorites($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);

            return response()->json([
                "success" => true,
            ]);
        }else{
            return response()->json([
                "success" => false,
                "message" => "Favorite does not exist in this user"
            ]);
        }

    }
}
