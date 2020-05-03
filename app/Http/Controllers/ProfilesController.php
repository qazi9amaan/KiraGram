<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index( User $user)
    {
        $follows = (auth()->user())? auth()->user()->following->contains($user->id) :false;

        return view('profiles.index', [
            'user'=>$user,
            'follows'=>$follows,
        ]);
    }

    public function edit( User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }
    public function update( User $user)
    {
        $data= request()->validate([
           'title'=>'required',
           'description'=>'required',
           'url'=>'',
           'image'=>'',
        ]);

        if(request('image'))
        {
            $imagePath = request('image')->store('uploads/profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
            $imageArry = ['image'=>$imagePath];

        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArry ?? []
        ));
        return redirect('/profile/'.$user->id);
    }
}
