<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
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
}
