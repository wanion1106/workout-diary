<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use App\WorkoutRecord;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $posts = Post::latest()->paginate(10);
        $workoutRecords = WorkoutRecord::where('user_id', Auth::id())->whereDate('created_at', now())->latest()->get();


        return view('home',[
            'user' => $user,
            'posts' => $posts,
            'workoutRecords' => $workoutRecords
        ]);
    }

    public function store(PostRequest $request, Post $post)
    {
        if ($request->photo_img !== null)
        {
            $filePath = $request->photo_img->store('public/posts');
            $post->photo_img = str_replace('public/posts/', '', $filePath);

        }
        
        $post->user()->associate(Auth::user());
        $post->body = $request['body'];
        $post->save();

        return redirect()->to('/home');

    }

    public function delete(Post $post)
    {
        if (Auth::id() !== $post->user_id){
            abort(403);
        }
        $post->delete();

        return redirect()->to('/home');
    }
}
