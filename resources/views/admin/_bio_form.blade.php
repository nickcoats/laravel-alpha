<div class="form-group">
	{!! Form::label('name', 'Name: ') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('title', 'Title: ') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('position', 'Position: ') !!}
	{!! Form::select('position', [0 => "Select a Position",1 => "Managing Partner",2 => "Partner",3 => "Assistant"], $defaultPosition,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('photo', 'Photo: ') !!}
	{!! Form::select('photo',
				[	0 					=> "Select an Image",
					"ian_campbell" 		=> "Ian Campbell",
					"garrison_campbell" => "Garrison Campbell",
					"doug_campbell" 	=> "Doug Campbell",
					"mark_ell" 			=> "Mark Ell",
					"dora_monahan"	 	=> "Dora Monahan",
					"michelle_baxter" 	=> "Michelle Baxter",
					"lori_schwartz" 	=> "Lori Schwartz",
					"levi_rozga" 	=> "Levi Rozga",
					"chris_silversmith" 	=> "Chris Silversmith",
				],
				$defaultImage,
				['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('phone', 'Phone: ') !!}
	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email: ') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('linkedin', 'LinkedIn: ') !!}
	{!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('bio', 'Bio: ') !!}
	{!! Form::textarea('bio', null, ['class' => 'ckeditor form-control']) !!}
</div>

<br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
