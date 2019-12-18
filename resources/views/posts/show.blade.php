@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row d-flex mt-5">
		<div class="col-8">
			<img src="/storage/{{ $post->image }}" class="img-fluid">
		</div>
		<div class="col-4">
			<div class="d-flex align-item-baseline" >
				<div class="mr-2 ml-2">
					<a href="/profile/{{ $post->user->id }}">
						<img src="/storage/{{ $post->user->profile->image }}" class="rouded-circle" height="50px" width="50px">
					</a>
				</div>
				<div>
					<h3 class="text-dark mt-2">@<span>{{ $post->user->username }}</span></h3>
				</div>
			</div>
			<hr />
			<h4 class="mt-4">{{ $post->caption }}</h4>
			<p>{{ $post->created_at }}</p>
		</div>
	</div>
</div>
@endsection
