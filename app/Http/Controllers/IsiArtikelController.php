<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class IsiArtikelController extends Controller
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
