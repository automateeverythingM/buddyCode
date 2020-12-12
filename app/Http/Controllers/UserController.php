<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Skill;
use Image;

class UserController extends Controller
{
    public function profile()
    {
        $skills = User::all();
        return view('users.profile', array('user'=> Auth::user()))->with('skills', $skills);
    }

    public function edit(User $user)
    {   
        $skills = Skill::all();
        $user = Auth::user();
        return view('users.edit', compact('user', 'skills'));
    }

    public function update(Request $request)
    {
        


        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalName();
            if(auth()->user()->avatar !== 'default.jpg'){
                File::delete(public_path('uploads/avatars/' .auth()->user()->avatar));
            }
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $fileName));
            }elseif(empty($request->hasFile('avatar'))){
                $user = Auth::user();
                $fileName = auth()->user()->avatar;
            }
            $user = Auth::user();
            $user->avatar = $fileName;
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->about = $request->input('about');
            $user->save();
            
            
            //$user->skills()->attach(request('skill_id[]'));
            $user->skills()->attach($request->skill_id);
            
        return view('users.profile', array('user'=> Auth::user()));
    }
}
