<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Auth;

class PostController extends Controller
{
    

    public function publicArtikel() {
        $posts = Post::all();

        return view('artikel', ['posts'=>$posts]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);

        return view('artikel',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $this->validate($request,
        [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post = new Post;
        $post->user_id= Auth::id();
        $post->title = $request->input('title');
<<<<<<< HEAD
        $post->desc = $request->input('desc');
=======
        $post->body = $request->input('des');
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
        $post->name = Auth::user()->name;
        $exist = Storage::disk('local')->exists('Post',$request->input('image'));
        if($exist){
            Storage::disk('local')->delete('Post',$request->input('image'));
            // return "haha";
        }
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('Post', $request->image);
            $post->image = $name;
            // return "he";
        }
        // return "hi";
		$post->save();
        return redirect()->route('artikel');
        }



    /*
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, Post $post)
    {
        //
=======
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $visitCount = $request->visitCount;

        $post->visit_count = $visitCount;

        $post->save();

        return redirect()->route('IsiArtikel', ['id'=>$id]);
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
