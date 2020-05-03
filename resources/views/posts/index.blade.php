@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
          <div class="col-9 offset-1">
              @foreach($posts as $post)
                  <div class="row pb-3">
                      <div class="col-8">
                          <div class="card" >
                              <div class="card-header d-flex align-items-center p-2">
                                  <img src="{{$post->user->profile->profileImage()}}"  style="max-width: 27px;" class="w-100 m-1 rounded-circle mr-2">
                                  <a  class=" m-1 text-decoration-none text-dark font-weight-bold mr-1 " href="/profile/{{$post->user->id}}">{{$post->user->username}}  </a>
                              </div>
                              <img class="card-img-top w-100" src="/storage/{{$post->image}}" alt="Card image cap">
                              <div class="card-body pt-2">
                                  <p class="card-text ">
                                      <a  class=" text-decoration-none font-weight-bold text-dark mr-1 " href="/profile/{{$post->user->id}}">{{$post->user->username}}  </a>
                                      {{$post->caption}}
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
              <div class="row">
                  <div class="col-8 d-flex justify-content-center">
                      {{$posts->links()}}
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection

