<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{ URL::to('css/materialize.min.css') }}"  media="screen,projection"/>
		
		<link rel="stylesheet" href="{{URL::to('css/style.css')}}">
		{{-- Import font awesome --}}
		<link type="text/css" rel="stylesheet" href="{{ URL::to('font-awesome/css/font-awesome.min.css') }}"  media="screen,projection"/>
		@yield('dataTableCss')
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		
		<!--Let browser know website is optimized for mobile-->
	</head>

	<body>

		@yield('content')



		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('js/materialize.min.js') }}"></script>
		@yield('dataTableJs')
		@yield('custom')
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
				$(".button-collapse").sideNav();
				$(".slider").slider({
					indicators: false,
					height: 650
				});
				$('.parallax').parallax();
				$("#testimoni").slider({
					transition: 400,
					indicators: false,
					interval: 2000
				});
				$(".carousel").carousel();
				$('.dropdown-button').dropdown();
				$('.modal').modal({
				  dismissible: true, // Modal can be dismissed by clicking outside of the modal
			      opacity: .5, // Opacity of modal background
			      in_duration: 300, // Transition in duration
			      out_duration: 200, // Transition out duration
			      starting_top: '20%', // Starting top style attribute
			      ending_top: '10%', // Ending top style attribute
				});
				$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 100 // Creates a dropdown of 15 years to control year
			  });
			});
		</script>
	</body>
</html>