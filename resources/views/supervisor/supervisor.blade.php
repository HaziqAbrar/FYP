@extends('layout/coordinatorlayout')

@section('title','Supervisor')

@section('style')

	<style type="text/css">
		table {
    		counter-reset: tableCount;     
		}
		.counterCell:before {              
    		content: counter(tableCount); 
    		counter-increment: tableCount; 
		}
	</style>

@endsection


@section('container')

<div class="container mt-5" style="border:solid; padding-bottom: 30px;">
	
	<div class="row d-flex justify-content-center">
		<div class="col-12">
			<h1 class="mt-5 text-center">
				PROPOSED TITLE LIST
			</h1>
			@if (session('status'))
    			<div class="alert alert-success text-center">
        			{{ session('status') }}
    			</div>
			@endif
			<div class="text-center mt-3">
				<a href="/supervisor/create"><button type="button" class="btn btn-primary">Propose a Title</button></a>
			</div>
			<table class="w3-table w3-hoverable mt-3">
			    <thead>
			      	<tr class="w3-grey w3-border">
			        	<th>No.</th>
			        	<th>Title Name</th>
			        	<th>Year/Session</th>
			        	<th>Comments</th>
			        	<th>Status</th>
			        	<th>Details</th>
			      	</tr>
			    </thead>
			    @foreach($titleinfos as $titleinfo)
				    <tr class="w3-border">
				    	<td class="counterCell"></td>
				      	<td>{{ $titleinfo->title }}</td>
				      	<td>Session 2 of 2019/2020</td>
				      	<td>
				      		@if (empty($titleinfo->comment))
				      			<p>Not Available</p>
							@else
								<p>Available</p>
				      		@endif
				      	</td>
				     	<td>{{ $titleinfo->status }}</td>
				     	<td class="text-center">
				     		<form action="/titleinfosv/{{ $titleinfo->id }}" method="get">
				    		{{csrf_field()}}
				    			<div > 
						   			<input type="hidden" name="Details" value="Details"></input>
						   			<button type="submit" class="btn btn-info">Details</button>
				   				</div>
							</form>

							<form action="/supervisor/{{ $titleinfo->id }}" method="post">
				    		{{csrf_field()}}
				    			<div class="mt-3"> 
				    				<input type="hidden" name="_method" value="delete"></input> 
						   			<input type="hidden" name="Delete" value="Delete"></input>
						   			<button type="submit" class="btn btn-danger">Delete</button>
				   				</div>
							</form>
						</td>
				    </tr>
				@endforeach
			    
			</table>
		</div>
	</div>
</div>

    

@endsection
    

