@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-2">
        <div class="col-3 p-4 ">
            <img src="{{$user->profile->profileImage()}}"
                 class="rounded-circle w-100 p-4">
        </div>
        <div class="col-9 pt-4 ">
            <div class="d-flex align-items-center pt-4">
                <h1>{{$user->username}}</h1>
                @can('update',$user->profile)
                    <a class ="btn btn-outline-secondary ml-3" href="/profile/{{$user->id}}/edit">Edit Profile</i></a>

                    <span class ="settings" >
                    <a href="/profile/{{$user->id}}/edit"><i class="icofont-gear"></i></a>
                </span>
                @endcan

                @cannot('update',$user->profile)
                    <follow-button user_id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                    <a class ="btn  btn-outline-secondary ml-2" href="#">Message</a>
                    <a class ="btn  btn-light ml-3" href="#">...</a>
                @endcannot
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"> <strong>{{$user->profile->followers->count()}}</strong> <a href="/profile/{{$user->id}}/followers" class="text-dark text-decoration-none">Followers</a></div>
                <div class="pr-5"> <strong>{{$user->following->count()}}</strong> Following</div>
            </div>
            <div class="pt-3 font-weight-bold">
            {{$user->profile->title}}
            </div>
            <div>{{$user->profile->description}}
            </div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100 "></a>
        </div>

         @endforeach
    </div>

</div>
@endsection
