@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xl-3 p-5 text-center">
            <img class="rounded-circle" src="/storage/{{ $user->profile->image }}" height="150px">
        </div>
        <div class="col-md-12 col-xl-9 pt-5">
            <div class="d-flex justify-content-between align-item-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                <a  href="/post/create" class="btn btn-dark">Create New Post</a>
                @endcan
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>
            <div class="d-flex mt-2">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-3">{{ $user->profile->title }}</div>
            <div class="pt-1">{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" class="link text-dark">{{ $user->profile->url}}</a></div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
        </div>
    </div>

    <hr />
    <!-- Posts Section -->
    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
            <p>{{ $post->caption }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
