<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    public function store(User $user)
    {
        return  auth()->user()->following()->toggle($user->profile);

    }
    public function following(User $user)
    {

        $users =  $user->following()->pluck('profiles.user_id');
        $profiles = Profile::whereIn('user_id',$users)->with('user')->latest()->get();
        return view('follows.index',[
            'profiles'=> $profiles,
            'type'=> 'following',
            'user'=>$user,
        ]);

    }
    public function followers(User $user)
    {

        $users =  $user->profile->followers()->pluck('users.id');
        $profiles = Profile::whereIn('user_id',$users)->with('user')->latest()->get();
        return view('follows.index',[
            'profiles'=> $profiles,
            'type'=> 'follower',
            'user'=>$user,
        ]);

    }

}
