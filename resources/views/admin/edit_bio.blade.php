@extends('admin')

@section('content')

	<div class="container">
    	<div class="row">
		    <div class="col-xs-12 main-content single-content">
		          
		        <h3 class="text-center">Edit {{ $bio->name }}</h3>

				@include('errors._list')
				
				{!! Form::model($bio, ['method' => 'PATCH', 'action' => ['BiosController@update', $bio->id]]) !!}
		
				  	@include('admin._bio_form', ['submitButtonText' => 'Update Bio',
				  								 'defaultImage' => $bio->photo, 
				  								 'defaultPosition' => $bio->position])
				  
				{!! Form::close() !!}
			
			</div><!-- main-content/col -->
		</div> <!--/row -->
	</div> <!-- /container -->

	<hr>

@endsection