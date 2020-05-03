@extends('layouts.app')

@section('content')
    <div class="container mt-2">
       <div class="row">
           <div class="col-12 mt-5">
               <div class="container">
                   <div class="row ">
                       <div class="col-8"><img src="/storage/{{$post->image}}" class="w-100"></div>
                       <div class="col-4 bg-light p-3">
                           <div>
                              <h4> {{$post->user->username}}</h4>
                               <p class="mt-2">
                                  <span class="font-weight-bold">{{$post->user->username}}</span> {{$post->caption}}
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
