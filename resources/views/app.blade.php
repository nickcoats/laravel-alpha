<!DOCTYPE html>
<html lang="en">
	<!-- header -->
	@include('partials._header')
  <body>
   	<!-- navigation bar -->
    @include('partials._nav_bar')
		<!-- page content -->
		@yield('content')
		<!-- footer -->
		@include('partials._footer')
  </body>
</html>
