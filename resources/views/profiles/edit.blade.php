@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}}" enctype="multipart/form-data"  method ="POST" >
            @method('PATCH')
            @csrf
            <div class="row">
                <h3 >
                    Edit  Profile
                </h3>
            </div>
            <div class="form-group row">
                <label for="image" class="col-form-label ">Profile Picture</label>
                <input id="image"
                       type="file"
                       class="form-control-file @error('image') is-invalid @enderror" name="image"
                       value="{{ old('image') ?? $user->profile->image }}"  autocomplete="image" autofocus>

                @error('image')
                <strong>{{ $message }}</strong>
                @enderror

            </div>

            <div class="form-group row">
                <label for="title" class="col-form-label ">Title</label>
                <input id="title"
                       type="text"
                       class="form-control @error('title') is-invalid @enderror" name="title"
                       value="{{ old('title') ?? $user->profile->title}}"  autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="description" class="col-form-label ">Description</label>
                <input id="description"
                       type="text"
                       class="form-control @error('description') is-invalid @enderror" name="description"
                       value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

                @error('description')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="url" class="col-form-label ">Website</label>
                <input id="url"
                       type="text"
                       class="form-control @error('url') is-invalid @enderror" name="url"
                       value="{{ old('url')  ?? $user->profile->url }}"  autocomplete="url" autofocus>

                @error('url')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>



            <div class="row text-center pt-3">
                <button class="btn btn-block btn-dark">Save</button>
            </div>
        </form>
    </div>
@endsection
