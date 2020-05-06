@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent border-0 " >
                                <div class="d-flex  justify-content-between align-items-center">
                                    <div class=" d-flex   p-2">
                                        <div class="d-flex align-items-center">
                                            <a  class=" m-1  text-decoration-none text-dark font-weight-bold mr-1 "
                                                href="/profile/{{$user->id}}"><img src="{{$user->profile->profileImage()}}"
                                                                                   style="max-width: 99px;" class="w-100 m-1 rounded-circle mr-3"> </a>
                                            <div>
                                                <a  class=" text-decoration-none text-dark font-weight-bold "
                                                    href="/profile/{{$user->id}}">{{$user->username}}  </a>

                                                <p class="mt-2"> <Strong>{{$user->profile->title}}</Strong> <br> {{$user->profile->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="/home" class="btn btn-block btn-secondary mb-1">Home</a>
                                        <a href="/profile/{{auth()->user()->id}}" class="btn btn-secondary">My Account</a>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <p> </p>
                <nav  aria-label="breadcrumb mb-1">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item " ><a  class=" text-decoration-none text-dark " href="/profile/{{$user->id}}">{{$user->username}}  </a></li>
                        <li class="breadcrumb-item font-weight-bold " aria-current="page">{{$type}} </li>
                    </ol>
                </nav>
                @foreach($profiles as $profile)
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-1" >
                                <div class=" d-flex align-items-center justify-content-between p-2">
                                   <div>
                                       <img src="{{$profile->profileImage()}}"  style="max-width: 27px;" class="w-100 m-1 rounded-circle mr-2">
                                       <a  class=" m-1 text-decoration-none text-dark font-weight-bold mr-1 "
                                           href="/profile/{{$profile->user->id}}">{{$profile->user->username}}  </a>
                                   </div>
                                    @if($type === 'following' && auth()->user()->id == $user->id )
                                        <follow-button user_id="{{$profile->user->id}}" follows="{{ true }}"></follow-button>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection


