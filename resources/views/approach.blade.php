@extends('app')
@section('content')
  <div class="breadcrumb-wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h4>Our Approach</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="divide80 hidden-xs hidden-sm hidden-md"></div>
  <div class="divide40"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 margin20 justify">
        <h3 class="heading">ALPHA CMG partners with eMoney</h3>
        <p>eMoney is the most powerful financial software in the industry. This allows our clients to consolidate their various financial accounts in a single place. Designed to be the center of an advisor-led experience, and the combination of these tools creates a work space that allows a great deal of collaboration between advisor and client, while maintaining an up-to-date financial picture. Our objective is to give you clear and timely communications to help you better understand your financial world. We also want to provide detailed analysis to help you make the best financial decisions possible for you and your family. By utilizing eMoney, we believe you will be better equipped to tackle the challenges in your financial world with a clear purpose and understanding.</p>
      </div>
      <div class="divide20 hidden-lg hidden-xl"></div>
      <div class="col-md-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-lztQ9rVVbU" frameborder="0" allowfullscreen></iframe>
      </div>
    </div><!--about intro-->
  </div>
  <div class="divide60"></div>
  <div class="divide60 hidden-xs hidden-sm hidden-md"></div>
  <div class="container">
  <!-- Services Bar -->
  @include('partials._services_bar')
  </div>
  <div class="divide60 hidden-xs hidden-sm hidden-md"></div>
  <div class="container process">
  	<div class="row">
  	  <div class="col-md-12">
        <h3 class="heading">Our Investing Approach</h3>
      </div>
    </div>
    <div class="divide40"></div>
    <div class="process-step"> <span class="process-border"></span>
      <div class="step">
        <div class="icon-square"> <i class="fa fa-bullseye"></i> </div>
        <h5>Assess your goals and circumstances</h5>
        <p>The investment plan process begins during the discovery meeting with a discussion of your financial values and goals, as well as your key relationships, existing assets, other professional advisors, preferred process and important interests.</p>
      </div>
      <div class="step even">
      	<div class="icon-square"> <i class="fa fa-calendar"></i> </div>
      	<h5>Set short & long-term investment objectives</h5>
      	<p>Taking into account the long-term nature of appropriate investing, we will set both short and long-term objectives for your portfolio(s) and plan. These objectives will be aligned with your willingness, ability and need to take risk, and the investment horizon(s) you identify.</p>
      </div>
      <div class="step">
      	<div class="icon-square"> <i class="fa fa-pencil-square-o"></i> </div>
      	<h5>Plan your asset allocation</h5>
      	<p>Because it is so important, asset allocation is the first investment decision. During this process we decide how much of your portfolio to invest in each of the different investment types, or asset classes. Including stocks, bonds and short-term investments; both domestic and foreign. Asset allocation does not ensure a profit or protect against a loss.</p>
      </div>
      <div class="step even">
        <div class="icon-square"> <i class="fa fa-road"></i> </div>
        <h5>Select your investment approach</h5>
      	<p>With an asset allocation in place, we now select the investment vehicles that you will use to implement your portfolio strategy. Two key investing principals guide these decisions: the importance of diversification and the value of remaining invested. There is no guarantee that a diversified portfolio will enhance overall returns or outperform a non-diversified portfolio. Diversification does not protect against market risk.</p>
      </div>
      <div class="step">
        <div class="icon-square"> <i class="fa fa-area-chart"></i> </div>
      	<h5>Build your portfolio</h5>
      	<p>Building on the first four steps, we construct a portfolio suited to your needs, goals, investment horizon, and risk attitude.</p>
      </div>
    </div><!--steps-->
    <div class="divide40"></div>
    <p class="text-center">
    	In addition to the above considerations, the recommendations take in to account portfolio cost as well as the potential tax impact of the restructuring.
    </p>
  </div>
</div>
<div class="divide40"></div>
@endSection
