@extends('app')
@section('content')
<div class="breadcrumb-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>About Us</h4>
      </div>
    </div>
  </div>
</div>
<div class="divide90 hidden-xs hidden-sm"></div>
<div class="divide20 hidden-md hidden-lg hidden-xl"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-heading">
        <p class="lead justify">
            We are a multi-generational partnership of integrated financial professionals.  We assist our clients with all aspects of building, preserving and distributing their wealth.  Flexibility, collaboration and preparation in our planning allow us to help our clients adjust to life’s journey.
        </p>
        <p class="lead justify">
          Objective advice and guidance around all of your investments, brokerage accounts, retirement assets, bank deposits, real estate and business interests are evaluated for an integrated approach to pursuing your goals today and in the future.
        </p>
        <p class="lead justify">
          Alpha CMG's sole mission is to advise business owners, corporate executives, entrepreneurs, and families throughout the complex nature of protecting and enhancing their wealth. Whether you have recently sold a business, inherited a windfall, or simply transitioned from earning money to focusing more on how much of it that you have. Every day brings a new set of investment challenges and opportunities and our team works relentlessly to anticipate and uncover what's next—applying collective insights to help keep our clients at the forefront of change.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="divide10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-heading">
        <h2>Our Core Values</h2>
        <span class="center-line"></span>
        <p class="lead justify">
          Our core values of independence, excellence, integrity and respect continue to form the foundation of everything that we do. These values allow us to take a holistic approach to managing your investments, aiming to put your investments and life in balance.
        </p>
        <div class="divide10"></div>
        <a href="{{ url('team') }}" class="btn btn-theme-bg btn-lg">Meet Your Team</a>
      </div>
    </div>
  </div>
</div>
<div class="divide40"></div>
<!-- Services Bar -->
@include('partials._services_bar')
@endSection
