<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;

class artikelController extends Controller
=======
use App\Post;
use Illuminate\Http\Request;

class IsiArtikelController extends Controller
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
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
