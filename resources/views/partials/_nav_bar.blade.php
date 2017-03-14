<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/alpha_capital_logo.png') }}" alt="Alpha Capital Management Group"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="home-page"><a href="{{ url('/') }}">Home</a></li>
        <li id="about-page" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who We Are <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu" role="menu">
           	<li><a href="{{ url('about') }}">About Alpha CMG</a></li>
            <li><a href="{{ url('team') }}">Meet Your Team</a></li>
            <li><a href="{{ url('approach') }}">Our Approach</a></li>
          </ul>
        </li>
        <li id="services-page" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('investment-wealth-management') }}">Investment & Wealth Management</a></li>
            <li><a href="{{ url('business-estate-planning') }}">Business & Estate Planning</a></li>
            <li><a href="{{ url('life-insurance-long-term-care') }}">Life Insurance & Long Term Care</a></li>
            <li><a href="{{ url('corporate-retirement-plans') }}">Corporate Retirement Plans</a></li>
            <li><a href="{{ url('family-office-services') }}">Family Office Services</a></li>
          </ul>
        </li>
        <li id="articles-page"><a href="{{ url('news-education') }}">News + Education</a></li>
        <li id="contact-page"><a href="{{ url('contact') }}">Contact</a></li>
        <li id="about-page" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('https://wealth.emaplan.com/ema/lpl/alphacapmgmtgrp') }}" target="_blank">eMoney Login</a></li>
            <li><a href="{{ url('https://myaccountviewonline.com/AccountView/') }}" target="_blank">LPL Login</a></li>
            <li><a href="{{ url('https://login.fidelity.com/ftgw/Fas/Fidelity/RtlCust/Login/Init') }}" target="_blank">Fidelity Login</a></li>
            <li><a href="{{ url('https://client.schwab.com/Login/SignOn/CustomerCenterLogin.aspx') }}" target="_blank">Charles Schwab Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="pull-right hidden-xs hidden-sm hidden-md" style="margin-top: -10px;">
    	<a href="https://www.google.com/maps/place/6465+Greenwood+Plaza+Blvd+%23625,+Centennial,+CO+80111/@39.5993503,-104.8957791,17z/data=!3m1!4b1!4m2!3m1!1s0x876c868890cb86a5:0x9f1405fe30b669e1" target="_blank"><i class="fa fa-map-marker"></i> <span class="colored-text">6465 Greenwood Plaza Blvd. Suite 625 Centennial, CO 80111</span></a>
    	<br>
    	<span class="pull-right">
    	  <a href="tel://303-900-1919"><i class="fa fa-phone"></i> <span class="colored-text">303-900-1919</span></a> |
		    <a href="mailto:iancampbell.kw@gmail.com"><i class="fa fa-envelope"></i> <span class="colored-text">Info@AlphaCMG.com</span></a>
    	</span>
    </div>
  </div>
</div>
