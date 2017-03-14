@extends('app')
@section('content')
<!-- services section -->
@include('partials._index_services_bar')
<!-- team photo -->
<section id="slider-sec" class="slider-reg">
  <div class="main-flex-slider">
    <ul class="slides">
      <li>
        <figure>
          <img src="{{ asset('img/alpha-homepage-team.jpg') }}" class="img-responsive slider-img-shorten" alt="Alpha Capital Management Group">
        </figure>
      </li>
    </ul>
  </div>
</section>
<div class="divide60"></div>
<!-- section about your team -->
@include('partials._index_team')
<div class="divide20"></div>
<section class="fun-fact-wrap parallax" data-stellar-background-ratio="0.5"></section>
<div class="divide80"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-heading">
        <h2>Our Philosophy</h2>
        <span class="center-line"></span>
        <p class="lead">
          At Alpha Capital, we measure our success through the achievement of your financial goals. We know every situation is unique — every person, every family, every company. That’s why we’ve built a team with more than 150 years of collective experience that will work diligently to find the right solutions for you. Whatever your needs are —financial and wealth planning, investment management, retirement plans, insurance and long-term care planning or estate and business planning — we’re here to help.
        </p>
        <p class="lead">
            We build trust.<br>
            We’re available.<br>
            We’re proactive.<br>
            We listen.<br>
            We care about your financial security.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="divide30"></div>
<div id="map-canvas"></div>
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
<div id="stock-tickers" class="row col-md-12 hidden-xs hidden-sm">
  <div id="snp" class="col-md-4 text-center stock-box"><div class="stockTick1"></div></div>
  <div id="dji" class="col-md-4 text-center stock-box"><div class="stockTick2"></div></div>
  <div id="nas" class="col-md-4 text-center"><div class="stockTick3"></div></div>
</div>
<script type="text/javascript">
  $(document).ready( function(){

      // call finance API and get the latest stock data
	$.getJSON('https://finance.google.com/finance/info?client=ig&q=INDEXSP:.INX&callback=?',function(response){
    	  var stockInfo = response[0];
    	  var stockString ='S&P 500 <span id="#snp-data" class="green">'+stockInfo.l+' ('+stockInfo.cp+'%)</span>';

    	  $('.stockTick1').prepend(stockString);

          if(stockInfo.cp < 0){
		  		$("#snp-data").removeClass('green').addClass('red');
		  }
    });

	$.getJSON('https://finance.google.com/finance/info?client=ig&q=INDEXDJX:DJI&callback=?',function(response){
	       var stockInfo = response[0];
           var stockString ='Dow Jones <span id="#dji-data" class="green">'+stockInfo.l+' ('+stockInfo.cp+'%)</span>';

           $('.stockTick2').prepend(stockString);

           if(stockInfo.cp < 0){
		  		$("#dji-data").removeClass('green').addClass('red');
		  }
	});

	$.getJSON('https://finance.google.com/finance/info?client=ig&q=INDEXNASDAQ:.IXIC&callback=?',function(response){
		  var stockInfo = response[0];
          var stockString ='Nasdaq <span id="#nas-data" class="green">'+stockInfo.l+' ('+stockInfo.cp+'%)</span>';

		  $('.stockTick3').prepend(stockString);

          if(stockInfo.cp < 0){
		  		$("#nas-data").removeClass('green').addClass('red');
		  }
	});

    // News & Education Filter Controls
    $(".posts-filter").click(function(event) {
        var category = "." + event.target.id;
        $(".blog-post").hide();
        $(category).show();
    });

    $("#all-posts").click(function() {
        $(".blog-post").show();
    });
    
  });
</script>
@endSection
