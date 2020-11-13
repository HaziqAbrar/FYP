@extends('layout/coordinatorlayout')

@section('title','Title Details')

@section('style')

	<style type="text/css">
		.btnstyle a{
			padding: 10px;
			margin: 5px;"
		}

		.box{
			border: solid;
			padding: 0 5px;
		}

	</style>

@endsection


@section('container')

<div class="container mt-5" style="border:solid; padding-bottom: 30px; margin-bottom: 20px;">
	
	<div class="row">

		<div class="col-12">
			<h3 class="mt-5 " style="text-transform: uppercase;">{{ $titleinfo->title }}</h3>
			<h3 class="mt-3" style="text-transform: uppercase;">Status: {{ $titleinfo->status }}</h3>
			<h3 class="mt-3" style="text-transform: uppercase;">Time Of Proposing: {{ $titleinfo->created_at }}</h3>
			<h3 class="mt-3" style="text-transform: uppercase;"> Session: Sesion 2 of 2019/2020</h3>

			<div class=" mt-5 box">
				<h5>Description</h5>
				<p>{{ $titleinfo->description}}</p>
			</div>

			<div class="mt-3 box">
				<h5>Comments</h5>
				@if(empty($titleinfo->comment))
					<p>This proposal have no comment.</p>
				@else
					<p>{{ $titleinfo->comment}}</p>
				@endif
			</div>

			{{-- <div class="mt-3 box">
				

			</div> --}}

			<div class="mt-5 w3-container w3-right-align">

			  	<a href="/supervisor" class="w3-button w3-round-xxlarge w3-grey">Back</a>
			  	<a href="{{$titleinfo->id}}/edit" class="w3-button w3-round-xxlarge w3-blue">Edit</a>

			</div>

		</div>
	</div>
</div>

    

@endsection
    






   {{--  <form class="h-100" style="margin: 5px;" method="post" action="/titleinfos/{{ $titleinfo->id}}">
					@method('patch')
					@csrf
				  		<div class="form-group">
				    		<label for="comment">Update comments:</label>
				    		<textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" placeholder="(Write down comments here)"></textarea>
				    @error('comment')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				  </div>
				  <button type="submit" class="btn btn-primary">Comment</button>
				</form> --}}

