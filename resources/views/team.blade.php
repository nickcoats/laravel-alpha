@extends('app')
@section('content')
<div class="breadcrumb-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>Meet Your Team</h4>
      </div>
    </div>
  </div>
</div>
<div class="divide80 hidden-xs hidden-sm hidden-md"></div>
<div class="divide20"></div>
<div class="container">
  <div class="row">
    <h3 class="heading">Managing Partners</h3>
    <div class="col-md-1"></div>
    @foreach($managingPartners as $advisor)
      <div class="col-md-2 margin10" style="cursor: pointer;">
        <a href="team-member/{{ $advisor->slug }}">
          <div class="team-wrap">
            <img src="img/{{ $advisor->photo }}.jpg" class="img-responsive" alt="">
            <h4>{{ $advisor->name }}</h4>
            <span>{{ $advisor->title }}</span>
          </div>
        </a>
      </div>
    @endforeach
  </div>
  <div class="divide10"></div>
    <div class="row">
      <h3 class="heading">Partner</h3>
      <div class="col-md-4"></div>
      @foreach($partners as $partner)
        <div class="col-md-2 margin10" style="cursor: pointer;">
          <a href="team-member/{{ $partner->slug }}">
            <div class="team-wrap">
              <img src="img/{{ $partner->photo }}.jpg" class="img-responsive" alt="{{ $partner->name }}-AlphaCMG">
              <h4>{{ $partner->name }}</h4>
              <span>{{ $partner->title }}</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    <div class="divide10"></div>
    <div class="row">
     <h3 class="heading">Client Associates</h3>
     <div class="col-md-4"></div>
      @foreach($assistants as $assistant)
        <div class="col-md-2 margin10" style="cursor: pointer;">
          <a href="team-member/{{ $assistant->slug }}">
            <div class="team-wrap">
              <img src="img/{{ $assistant->photo }}.jpg" class="img-responsive" alt="{{ $assistant->name }}-AlphaCMG">
              <h4>{{ $assistant->name }}</h4>
              <span>{{ $assistant->title }}</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
</div>
<div class="divide40"></div>
@endSection
