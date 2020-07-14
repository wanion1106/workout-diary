<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{

    public function edit($id)
    {
        $authUser = Auth::User();

        return view('profile-edit', compact('authUser'));
    }

    public function update(ProfileRequest $request, $id)
    {
        if(isset($request->avatar_img)){
            $filePath = $request->avatar_img;
            $path = Storage::disk('s3')->putFile('/avatars', $filePath, 'public');
            $image = Storage::disk('s3')->url($path);
    
        } else {
            $image = null;
        }

        $authUser = Auth::user();

        $authUser->name = $request->input('name');
        $authUser->email = $request->input('email');
        $authUser->avatar_img = $image;
        $authUser->password = Hash::make($request->password);

        $authUser->save();

        return back();

    }
}
