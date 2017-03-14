@extends('admin')

@section('content')

	<div class="container">
    	<div class="row">
		    <div class="col-xs-12 main-content single-content">

		        <h3 class="text-center">Edit Post</h3>

				@include('errors._list')

				{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

				  	@include('admin._article_form', ['submitButtonText' => 'Update Article'])

				{!! Form::close() !!}

			</div><!-- main-content/col -->
		</div> <!--/row -->
	</div> <!-- /container -->

	<hr>

@endsection
