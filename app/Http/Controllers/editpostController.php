<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Donate;
use App\Komunitas;
use Auth;

class editpostController extends Controller
{
    public function index()
        {
            $loggedInUserId = Auth::id();
            $posts = Post::all()->where('user_id', $loggedInUserId);
            $camps = Donate::all()->where('camp_id', $loggedInUserId);
            $komunitas = Komunitas::all()->where('komunitas_id', $loggedInUserId);
            // return dd($posts);
            return view('editpost', compact('posts','camps','komunitas'));
        }
    
}
