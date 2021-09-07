@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="/p">
            @csrf

            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('caption') }}" >

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('POST') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
