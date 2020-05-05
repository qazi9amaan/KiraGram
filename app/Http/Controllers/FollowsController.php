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
    public function followers()
    {
        $users = auth()->user()->profile->followers()->pluck('users.id');
        $profiles = Profile::whereIn('user_id',$users);
        return view('follows.index',compact('profiles'));

    }

}
