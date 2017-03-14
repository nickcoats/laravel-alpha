@extends('app')
@section('content')
<div class="breadcrumb-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>{{ $member->name }}</h4>
      </div>
    </div>
  </div>
</div>
<div class="divide80 hidden-xs hidden-sm hidden-md"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-5">
        <img src="{{ asset("$member_photo") }}" class="img-responsive member-img" alt="{{ $member->name }}" draggable="false">
      </div>
      <div class="col-md-7">
        <p>
          {!! $member->bio !!}
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="divide5"></div>
      <span class="center-line"></span>
      <div class="divide20"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 hidden-xs hidden-sm">
      <div class="col-md-4 text-center">
        <a href="tel://{{ $member->phone }}"><i class="fa fa-phone fa-lg fa-pad"></i>  {{ $member->phone }}</a>
      </div>
      <div class="col-md-4 text-center">
        <a href="mailto:{{ $member->email }}"><i class="fa fa-envelope fa-lg fa-pad"></i>  {{ $member->email }}</a>
      </div>
      <div class="col-md-4 text-center">
        <a href="https://www.linkedin.com/in/{{ $member->linkedin }}" target="_blank"><i class="fa fa-linkedin fa-lg fa-pad"></i> LinkedIn</a>
      </div>
    </div>
    <div class="col-md-12 hidden-md hidden-lg hidden-xl">
      <div class="col-md-4">
        <a href="tel://{{ $member->phone }}"><i class="fa fa-phone fa-lg fa-pad"></i>  {{ $member->phone }}</a>
      </div>
      <div class="col-md-4">
        <a href="mailto:{{ $member->email }}"><i class="fa fa-envelope fa-lg fa-pad"></i>  {{ $member->email }}</a>
      </div>
      <div class="col-md-4">
        <a href="https://www.linkedin.com/in/{{ $member->linkedin }}" target="_blank"><i class="fa fa-linkedin fa-lg fa-pad"></i> LinkedIn</a>
      </div>
    </div>
  </div>
</div>
<div class="divide45"></div>
<!-- Services Bar -->
@include('partials._services_bar')
@endSection
