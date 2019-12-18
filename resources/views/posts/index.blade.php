@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row pt-4">
        @foreach($posts as $post)
        <div class="col-4">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
            <div class="mt-4">
            	<h4 class="align-content-baseline">
            		<span>
            			<img src="/storage/{{ $post->user->profile->image }}" height="30px" width="30px">	
            		</span>
            		{{ $post->user->username }}
            	</h4>
            	<p>{{ $post->caption }}</p>
            </div>
        </div>
        @endforeach

        <hr />
        <div class="row">
        	<div class="col-12 display-flex justify-content-center">
        		{{ $posts->links() }}
        	</div>
        </div>
    </div>
</div>
@endsection
