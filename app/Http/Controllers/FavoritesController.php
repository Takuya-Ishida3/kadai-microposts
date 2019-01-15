<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $favorites = $user->feed_favorites()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'favorites' => $favorites,
            ];
        }
    }
    
    public function store(Request $request, $id)
    {
        \Auth::user()->favor($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavor($id);
        return back();
    }
}
