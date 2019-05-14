<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Donate;

class profilController extends Controller
{
    public function index()
    {
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);
        $camps = Donate::all()->where('camp_id', $loggedInUserId);

        return view('profil',['posts'=>$posts], ['camps'=>$camps]);
    }
}
