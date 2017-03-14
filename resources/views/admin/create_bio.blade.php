@extends('admin')

@section('content')

	<div class="container">
    	<div class="row">
		    <div class="col-xs-12 main-content single-content">
		          
		        <h3 class="text-center">Create New Bio</h3>

				@include('errors._list')
				
				{!! Form::open(['url' => 'bio']) !!}
		
				  	@include('admin._bio_form', ['submitButtonText' => 'Create Bio', 
				  								 'defaultImage' => '0', 
				  								 'defaultPosition' => '0'])
				  
				{!! Form::close() !!}
			
			</div><!-- main-content/col -->
		</div> <!--/row -->
	</div> <!-- /container -->

	<hr>

@endsection