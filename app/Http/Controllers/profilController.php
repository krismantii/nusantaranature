<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Donate;
use App\Komunitas;

class profilController extends Controller
{
    public function index()
    {
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);
        $camps = Donate::all()->where('camp_id', $loggedInUserId);
        $komunitas = Komunitas::all()->where('komunitas_id', $loggedInUserId);
        // return $komunitas;
        return view('profil', compact('posts','camps','komunitas'));
    }
}
