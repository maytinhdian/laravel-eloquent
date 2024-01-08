<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $allPosts = Post::all();
        // dd($allPosts);

        // //Create new Post
        // $post = new Post;
        // $post->title='Bai viet 3';
        // $post->content='Noi dung 3 ';
        // $post->status = 1;
        // $post->save();

        echo '<h2>Query Eloquent Model</h2>';
        // $allPosts = Post::all();

        // if ($allPosts->count()>0) {
        //     foreach ($allPosts as $item) {
        //         echo $item->title.'</br>';
        //     }
        // }

        // $detail=Post::find(1);
        // dd($detail);

        //Sử dụng query builder

        // $activePosts = DB::table('posts')->where('status',1)->get();
        // dd($activePosts);

        // $activePosts=Post::where('status',1)->get();
        // dd($activePosts);

        $allPosts = Post::all();
        $activePosts = $allPosts->reject(function ($post) {
            return $post->status == 0; //boolean
        });
        dd($activePosts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
