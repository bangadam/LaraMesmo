<!DOCTYPE html>
<html>
	<head>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{ URL::to('css/materialize.min.css') }}"  media="screen,projection"/>
		
		<link rel="stylesheet" href="{{URL::to('css/style.css')}}">
		{{-- Import font awesome --}}
		<link type="text/css" rel="stylesheet" href="{{ URL::to('font-awesome/css/font-awesome.min.css') }}"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	</head>

	<body>

		@yield('content')



		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('js/dataTables.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('js/dataTables.material.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#TableId').DataTable({
					search: {
						caseInsensitive : true
					},
					pagingType: "full_numbers" 
				});
				$('select').material_select();
				$(".button-collapse").sideNav();
				$(".slider").slider({
					indicators: false,
					height: 560
				});
				$("#testimoni").slider({
					transition: 400,
					indicators: false,
					interval: 2000
				});
				$(".carousel").carousel();
				$('.dropdown-button').dropdown();
			});
		</script>
	</body>
</html>