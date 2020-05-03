@extends('layouts.app')

@section('content')
    <div class="container mt-2">
       <div class="row">
           <div class="col-12 mt-5">
               <div class="container">
                   <div class="row ">
                       <div class="col-8"><img src="/storage/{{$post->image}}" class="w-100"></div>
                       <div class="col-4 bg-white p-3 pt-0">
                           <div>
                               <div class="d-flex align-items-center ">
                                   <img src="{{$post->user->profile->profileImage()}}" alt=""  style="max-width: 35px;" class="w-100 rounded-circle mr-2">
                                   <a class="text-dark " href="/profile/{{$post->user->id}}"> <h4> {{$post->user->username}}</h4></a>
                                   <a href="#" class="btn btn-primary ml-3 btn-sm">Follow</a>

                               </div>
                               <hr>
                               <p class="mt-4">
                                   <span class="font-weight-bold text-dark"> <a  class="text-dark " href="/profile/{{$post->user->id}}">{{$post->user->username}}</span> </a> {{$post->caption}}
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
