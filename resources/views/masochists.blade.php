@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
        </div>
						<div class="card-columns">
						@foreach ($masochistList as $masochist)
            	<div class="card">
                <div class="card-body">
									<h5 class="card-title">{{ $masochist->username }} ({{ $masochist->old}}歳) 希望:{{ $masochist->wantold }}歳</h5>
									<h6 class="card-subtitle mb-2 text-muted">{{ $masochist->area }}</h6>
									<p class="card-text">{{ $masochist->description }}</p>
								</div>
							</div>
						@endforeach
						</div>
    </div>
</div>
@endsection
