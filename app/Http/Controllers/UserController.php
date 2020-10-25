<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Image;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile', array('user'=> Auth::user()));
    }


    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $fileName));

            $user = Auth::user();
            $user->avatar = $fileName;
            $user->save();
        }

        return view('users.profile', array('user'=> Auth::user()));
    }
}
