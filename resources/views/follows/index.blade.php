@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @foreach($profiles as $profile)
                    <div class="row">
                        <div class="col-12">
                            <div class="card" >
                                <div class="card-body d-flex align-items-center p-2">
                                    <img src="{{$profile->profileImage()}}"  style="max-width: 27px;" class="w-100 m-1 rounded-circle mr-2">
                                    <a  class=" m-1 text-decoration-none text-dark font-weight-bold mr-1 " href="/profile/{{$profile->user->id}}">{{$profile->user->username}}  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection


