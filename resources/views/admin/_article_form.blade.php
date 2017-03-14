<div class="form-group">
	{!! Form::label('title', 'Title: ') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('slug', 'Web URL (*Cannot contain spaces - ex: corporate-retirement-plans): ') !!}
	{!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Body: ') !!}
	{!! Form::textarea('body', null, ['class' => 'ckeditor form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category', 'Category: ') !!}
	{!! Form::select('category',
		[
			'Investment & Wealth Management' 	=> 'Investment & Wealth Management',
			'Business & Estate Planning' 			=> 'Business & Estate Planning',
			'Insurance & Long Term Care' 			=> 'Insurance & Long Term Care',
			'Corporate Retirement Plans' 			=> 'Corporate Retirement Plans',
			'Family Office Services' 					=> 'Family Office Services',
		],
		null,
		['class' => 'ckeditor form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('published_at', 'Publish At: ') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
