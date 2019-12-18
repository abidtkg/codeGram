@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form" action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h1>NEW POST</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
                @error('image')
                        <p class="text-danger">{{ $message }}</p>
                @enderror            
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-8 offset-2">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    </form>
</div>
@endsection
