@extends('layouts.app')

@section('content')
<div class="container ">


        <div class="col-8 offset-2 my-auto">

            <form action="/post" enctype="multipart/form-data"  method ="POST"  class=" ">
                @csrf
                <div class="row">
                    <h3 >
                        Add New Post
                    </h3>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-form-label ">Add a image</label>
                    <input id="image"
                           type="file"
                           class="form-control-file @error('image') is-invalid @enderror" name="image"
                           value="{{ old('image') }}"  autocomplete="image" autofocus>

                    @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="caption" class="col-form-label ">Add a caption</label>
                        <input id="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror" name="caption"
                               value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="row pt-3">
                    <button class="btn btn-dark">Add New Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
