@extends('app')
@section('content')
<div class="breadcrumb-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>News + Education</h4>
      </div>
    </div>
	</div>
</div>
<div class="divide80 hidden-xs hidden-s hidden-m"></div>
<div class="divide40"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
			<div class="col-md-3 hidden-xs hidden-s hidden-m">
				<div class="sidebar-box margin40">
					<h4>Categories</h4>
					<p><a href="#" id="post-lightblue" class="posts-filter">Investment & Wealth Management</a></p>
					<p><a href="#" id="post-green" class="posts-filter">Business & Estate Planning</a></p>
					<p><a href="#" id="post-teal" class="posts-filter">Life Insurance & Long Term Care</a></p>
					<p><a href="#" id="post-darkblue" class="posts-filter">Corporate Retirement Plans</a></p>
					<p><a href="#" id="post-brown" class="posts-filter">Family Office Services</a></p>
					<p><a href="#" id="all-posts">Show All Posts</a></p>
				</div>
				<div class="sidebar-box margin40">
	        <h4>Alpha CMG</h4>
	        <p>We embrace the wealth management process as we focus on your financial needs and goals - then map a strategy with the goal to help get you to your destination.</p>
		    </div>
			</div>
			<div class="col-md-9">
				<div class="row">
          @foreach($posts as $post)
						<div class="blog-post col-md-3 {{ $post['class'] }}">
							<a href="news-education/{{ $post['slug'] }}">
								<h5>{{ $post['title'] }}</h5>
								<div class="col-md-12 footer">
									<p>{{ $post['category'] }}</p>
								</div>
							</a>
            </div>
          @endforeach
				</div>
				<div class="margin40"></div>
	      <!--<ul class="pager text-center col-md-10">
	          <li class=""><a href="#">Load More Articles</a></li>
        </ul>-->
			</div>
    </div>
	</div>
</div>
<div class="divide60"></div>
<div class="divide60"></div>
@endSection
