@extends('admin')

@section('content')

	<div class="container">
    	<div class="row">
		    <div class="col-xs-12 main-content single-content">

		        <h3 class="text-center">Create New Blog Post</h3>

				@include('errors._list')

				{!! Form::open(['url' => 'article']) !!}

				  	@include('admin._article_form', ['submitButtonText' => 'Create Article'])

				{!! Form::close() !!}

			</div><!-- main-content/col -->
		</div> <!--/row -->
	</div> <!-- /container -->

	<hr>

@endsection
