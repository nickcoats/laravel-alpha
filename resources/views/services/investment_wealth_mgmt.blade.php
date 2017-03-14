@extends('app')
@section('content')
<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 0%;">
    <div class="container">
      <div class="center-heading">
        <h1 class="white">{{ $active_page }}</h1>
      </div>
    </div>
</section>
<div class="divide40 hidden-xs hidden-sm"></div>
<div class="divide10 hidden-md hidden-lg hidden-xl"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center-heading">
                <p class="lead justify">
                  Investment &amp; Wealth Management is a process of coordinating your goals and objectives with your risk and reward comfort levels. We are strict believers in strategic asset allocation and diversification. We recognize the need for tactical flexibility when the markets present us with periods of volatility. We do not guess or speculate, we are disciplined and structured in our process to take advantage of opportunities when they present themselves.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="divide30"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12 center-heading">
      <h2>Our Process</h2>
      <span class="center-line"></span>
      <div class="divide35"></div>
      <ul class="list-inline">
        <li class="col-md-1 hidden-xs hidden-sm"></li>
      	<li class="col-sm-2 text-center">
          <div>
            <i class="fa fa-dot-circle-o fa-2x"></i>
            <div class="divide20"></div>
          </div>
          <div class="process-desc">
      			<h5>Assess</h5>
      			<p class="lead">We work with you to clearly define your goals.</p>
      		</div>
      	</li>
      	<li class="col-sm-2 text-center">
          <div>
            <i class="fa fa-dot-circle-o fa-2x"></i>
            <div class="divide20"></div>
          </div>
          <div class="process-desc">
      			<h5>Define</h5>
      			<p class="lead">Together, we balance your priorities with an appropriate risk and reward structure.</p>
      		</div>
      	</li>
      	<li class="col-sm-2 text-center">
          <div>
            <i class="fa fa-dot-circle-o fa-2x"></i>
            <div class="divide20"></div>
          </div>
          <div class="process-desc">
      			<h5>Design</h5>
      			<p class="lead">Collaboratively we create a plan to pursue your objectives and goals.</p>
      		</div>
      	</li>
      	<li class="col-sm-2 text-center">
          <div>
            <i class="fa fa-dot-circle-o fa-2x"></i>
            <div class="divide20"></div>
          </div>
          <div class="process-desc">
      			<h5>Implement</h5>
      			<p class="lead">Putting the plan in action with realistic and specific steps.</p>
      		</div>
      	</li>
        <li class="col-sm-2 text-center">
          <div>
            <i class="fa fa-dot-circle-o fa-2x"></i>
            <div class="divide20"></div>
          </div>
          <div class="process-desc">
            <h5>Monitor</h5>
            <p class="lead">Regular progress checkpoints and adjustments as needed.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="divide20"></div>
<!-- Services Bar -->
@include('partials._services_bar')
@endSection
