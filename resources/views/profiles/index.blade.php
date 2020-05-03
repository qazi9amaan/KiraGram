@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-2">
        <div class="col-3 p-4 ">
            <img src="/storage/{{$user->profile->image}}"
                 class="rounded-circle w-100 p-2">
        </div>
        <div class="col-9 pt-4 ">
            <div class="d-flex align-items-center pt-2">
                <h1>{{$user->username}}</h1>
                @can('update',$user->profile)
                <span class ="settings" >
                    <a href="/profile/{{$user->id}}/edit"><i class="icofont-gear"></i></a>
                </span>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"> <strong>12</strong> Followers</div>
                <div class="pr-5"> <strong>12</strong> Following</div>
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
