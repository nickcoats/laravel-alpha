@extends('app')
@section('content')
<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<h4>{{ $article->title }}</h4>
			</div>
		</div>
	</div>
</div>
<div class="divide80 hidden-xs hidden-s hidden-m"></div>
<div class="divide40"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="justify">
          {!! $article->body !!}
        </div>
				<div class="divide40 hidden-xs hidden-s hidden-m"></div>
        <ul class="list-inline post-detail">
				 <li>By <a href="{{ url('about') }}">Alpha CMG</a></li>
				 <li class="pull-right"><i class="fa fa-calendar"></i> {{ $article->published_at->diffForHumans() }}</li>
       	</ul>
        <div class="divide60"></div>
      </div>
			<!-- article sidebar -->
			@include('partials._articles_sidebar')
    </div>
  </div>
<div class="divide10"></div>
@endSection
