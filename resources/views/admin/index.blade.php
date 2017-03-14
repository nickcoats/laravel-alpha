@extends('admin')

@section('content')

<div class="container">


	<div class="col-sm-12">
    <hr>
    <div class="col-xs-2"> <!-- required for floating -->
      <!-- Nav tabs -->
      <ul class="nav nav-tabs tabs-left">
        <li class="active"><a href="#posts" data-toggle="tab">Blog Posts</a></li>
        <li class=""><a href="#bios" data-toggle="tab">Team Bios</a></li>
      </ul>
    </div>

    <div class="col-xs-10">
      <!-- Tab panes -->
      <div class="tab-content">

        <div class="tab-pane active" id="posts">
	        <!-- Blog Post Tables -->
			<div class="containter">
				<table id="articles" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
			            <tr>
			                <th>ID</th>
			                <th>Title</th>
			                <th>Category</th>
			                <th>Edit</th>
							<th>Delete</th>
			            </tr>
			        </thead>
					<tbody>

						@foreach($articles as $article)
						<tr>
							<td class="text-center">{{ $article->id }}</td>
							<td>{{ $article->title }}</td>
							<td>{{ $article->category }}</td>
							<td class="text-center">
								<a href="article/{{ $article->id }}/edit">
									<i class="fa fa-pencil-square-o"></i>
								</a>
							</td>
							<td class="text-center">
								<a href="#" data-toggle="modal" data-target="#delete-modal" data-type="article" data-id="{{ $article->id }}" data-title="{{ $article->title }}">
									<i class="fa fa-trash-o"></i>
								</a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
        </div>

        <div class="tab-pane" id="bios">
	        <!-- Bios Table -->
			<div class="containter">
				<table id="bio" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
				        <tr>
				            <th>ID</th>
				            <th>Name</th>
				            <th>Edit</th>
							<th>Delete</th>
				        </tr>
				    </thead>
					<tbody>

						@foreach($bios as $bio)
						<tr>
							<td class="text-center">{{ $bio->id }}</td>
							<td>{{ $bio->name }}</td>
							<td class="text-center">
								<a href="bio/{{ $bio->id }}/edit">
									<i class="fa fa-pencil-square-o"></i>
								</a>
							</td>
							<td class="text-center">
								<a href="#" data-toggle="modal" data-target="#delete-modal" data-type="bio" data-id="{{ $bio->id }}" data-title="{{ $bio->name }}">
									<i class="fa fa-trash-o"></i>
								</a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
        </div>

      </div>
    </div>

    <div class="clearfix"></div>

  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <h4 class="modal-title" id="exampleModalLabel">Confirm Deletion</h4>
			</div>

			<div class="modal-body"></div>

			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			  <button id="delete-content" type="button" class="btn btn-primary">Yes</button>
			</div>

		</div>
	</div>
</div>


<script>

	$(document).ready(function() {

    	// dataTables & custom styling
    	$('#articles').dataTable({
	    	"columnDefs": [
				{ "width": "40px", "targets": [0,3,4] }
			]
    	});
    	$('#bio').dataTable({
	    	"columnDefs": [
				{ "width": "40px", "targets": [0,2,3] }
			]
    	});


		// load blog post content into modal form for viewing and editing
		$('#delete-modal').on('show.bs.modal', function (event) {

		  // Declare variables
		  var element = $(event.relatedTarget);
		  var id = element.data('id');
		  var label = element.data('title');
		  var data_type = element.data('type');
		  var ajaxUrl = '/'+data_type+'/'+id;

		  // Generate confirmation text
		  var modal = $(this);
		  modal.find('.modal-body').html('<p>Are you sure you want to delete ' + label + '?</p>');

		  // Ajax delete article or bio and reload page
		  $('#delete-content').click( function() {
		  	$.ajax({
		  		url: ajaxUrl,
		  		type: 'DELETE',
		  		success: function(response) {
					location.reload();
		  		}
		  	});
		  });
		});
	});

</script>

@endsection
