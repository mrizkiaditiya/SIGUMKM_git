<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'SIG') }}</title>

    <!--css-->
<link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('user/css/font-awesome.css') }}" rel="stylesheet">



    <!-- script -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="{{ asset('user/js/main.js') }}"></script>
<!--search jQuery-->
<script src="{{ asset('user/js/responsiveslides.min.js') }}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="{{ asset('user/js/bootstrap-3.1.1.min.js') }}"></script>
 <!-- cart -->
<script src="{{ asset('user/js/simpleCart.min.js') }}"></script>
<!-- cart -->
  <!--start-rate-->
<script src="{{ asset('user/js/jstarbox.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('user/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
    
</head>
<body>  
    @yield('content')
</body>
</html>
