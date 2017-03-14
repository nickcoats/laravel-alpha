@extends('app')
@section('content')
<div class="breadcrumb-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>Contact Us</h4>
      </div>
    </div>
  </div>
</div>
<div class="divide64 hidden-xs hidden-s hidden-m"></div>
<div id="map-canvas"></div>
<div class="divide30 hidden-xs hidden-sm"></div>
<div class="divide30"></div>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-sm-offset-1 margin30 sky-form-columns contact-sky-option">
      <div class="row">
        <div class="col-md-12">
          <div class="center-heading">
            <p>For more information, please contact us!</p>
          </div>
        </div>
      </div><!--center heading row-->
      <div class="row margin40">
        <div class="col-md-4 margin30">
          <div class="contact-option-circle">
            <i class="fa fa-home"></i>
            <p class="contact-font">
                6465 Greenwood Plaza Blvd. Ste 625<br>
                Centennial, CO 80111
            </p>
          </div><!--contact option circle-->
        </div><!--contact option detail box col-->
         <div class="col-md-4 margin30">
          <div class="contact-option-circle">
            <i class="fa fa-phone"></i>
            <p class="contact-font">
                Phone: (303)900-1919<br>
                Fax: (303)600-0276
            </p>
          </div><!--contact option circle-->
        </div><!--contact option detail box col-->
       	<div class="col-md-4 margin30">
          <div class="contact-option-circle">
            <i class="fa fa-envelope"></i>
            <p class="contact-font last-contact-box">
                Info@AlphaCMG.com<br>
            </p>
          </div><!--contact option circle-->
        </div><!--contact option detail box col-->
      </div>
			<form action="{{ url('send-mail') }}" method="post" id="sky-form" class="sky-form sky-form-columns">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name">
							</label>
						</section>
						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email">
							</label>
						</section>
					</div>
					<section>
						<label class="label">Subject</label>
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
							<input type="text" name="subject" id="subject">
						</label>
					</section>
					<section>
						<label class="label">Message</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
					<section>
						<label class="label">Enter characters below:</label>
						<label class="input input-captcha">
              <img src="sky-form/captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
							<input type="text" maxlength="6" name="captcha" id="captcha">
						</label>
					</section>
				</fieldset>
				<footer>
					<button href="#" type="submit" class="btn btn-theme-bg btn-lg ">Send message</button>
				</footer>
				<div class="message">
					<div class="divide80"></div>
					<i class="fa fa-check"></i>
					<p>Thanks you for contacting us, we look forward to working with you!</p>
					<div class="divide80"></div>
				</div>
			</form>
    </div>
  </div>
</div><!--contact advanced container end-->
<div class="divide60"></div>
<!--gmap js-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
  var myLatlng;
  var map;
  var marker;

  function initialize() {
      myLatlng = new google.maps.LatLng(39.599350, -104.895779);

      var mapOptions = {
          zoom: 13,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          draggable: false
      };
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var contentString = '<p style="line-height: 20px;"><strong>Alpha Capital Management Group</strong></p><p>Address: 6465 Greenwood Plaza Blvd. Suite 625 Centennial, CO 80111</p>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Marker'
      });

      google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
      });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endSection
