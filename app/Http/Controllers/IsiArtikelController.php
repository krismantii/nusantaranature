<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index()
    {
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);

        return view('artikel',['posts'=>$posts]);
    }

    public function showartikel($id)
    {
        $posts = Post::find($id);
        return view('IsiArtikel', ['posts'=>$posts]);
    }
}
