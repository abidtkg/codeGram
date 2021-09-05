@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0"
            style="height:150px; width: auto; border-radius: 50%;"
            alt="Profile">
        </div>
        <div class="col-8">
            <div>
                <h4> {{ $user->name }} </h4>
            </div>
            <div class="d-flex">
                <div class="mr-4"> <strong>400K</strong> Followers </div>
                <div class="mr-4"> <strong>400K</strong> Following </div>
                <div class="mr-4"> <strong>400K</strong> Posts </div>
            </div>
            <div class="mt-2">
                <p> {{ $user->profile->title }} </p>
            </div>
            <div class="mt-2">
                <p> {{ $user->profile->description }} </p>
            </div>
            <div class="mt-2">
                <a class="text-dark"  href="{{ $user->profile->url }}"> {{ $user->profile->url }} </a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
        <div class="col-4 pt-4">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/ikqra03zdnggljdu5vv0" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
