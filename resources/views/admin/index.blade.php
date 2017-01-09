@extends('templates.app')

@section('dataTableCss')
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/dataTables.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/dataTables.material.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/sweetalert.css') }}">
@endsection

@section('content')
{{-- NavBar --}}

<div class="navbar-fixed">
	<nav class="blue lighten-2">
	<div class="nav-wrapper " id="header">
		<a href="#!" class="brand-logo">Admin Mesmo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		<ul class="right hide-on-med-and-down">
		 <a class='dropdown-button' href='#' data-activates='dropdown1'><i class="fa fa-user"></i> {{ Auth::user()->username }}</a>
		  <!-- Dropdown Structure -->
		  <ul id='dropdown1' class='dropdown-content' style="margin-top: 50px;">
		    <li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out" style="color: #35D6F9"></i> Logout</a></li>
		  </ul>
		</ul>
		<!-- navbar for mobile -->
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#!" class="dropdown-button" data-activates="dropdown-profile"><i class="fa fa-user"></i> Bangadam</a></li>
			<ul id="dropdown-profile" class="dropdown-content" style="margin-top: 50px;">
				<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out" style="color: #35D6F9"></i> Logout</a></li>
			</ul>
		</ul>
	</div>
</nav>
</div>

{{-- End Navbar --}}

<div class="row">
{{-- Sidebar --}}
	<div class="container">
		<a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle gide-on-large-only">
			<i class="fa fa-bars"></i>
		</a>
	</div>

	<div class="col m2">
		<ul id="nav-mobile" class="grey lighten-2 sidebar side-nav fixed">
			<li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>	
			<li><a href="{{ route('pembina') }}"><i class="fa fa-user"></i> Pembina</a></li>
			@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'anggota')
				<li><a href="{{ route('kegiatan') }}"><i class="fa fa-book"></i> Kegiatan</a></li>
				<ul class="collapsible" data-collapsible="accordion">
					 <li>
		      			<div class="collapsible-header"><i class="fa fa-users"></i> Anggota</div>
		      			<div class="collapsible-body">
		      				<ul class="daftar">
		      					<li><a href="{{ route('anggota') }}"><i class="fa fa-eye"></i>Daftar Anggota</a></li>
		      					<li><a href="{{ route('absensi') }}"><i class="fa fa-book"></i> Absensi</a></li>
		      					<li><a href="{{ route('pengurus') }}"><i class="fa fa-user"></i> Pengurus</a></li>
		      				</ul>
		      			</div>
					   </li>
				</ul>
				<li><a href="#"><i class="fa fa-money"></i> Keuangan</a></li>
				</ul>
			@endif	
	</div>
{{-- End Sidebar --}}
	<div class="col m10 offset-m2">
		@yield('dashboard')
		@yield('pembina')
		@yield('anggota')
		@yield('pengurus')
		@yield('kegiatan')
	</div>

</div>{{--End Content--}}

@endsection

@section('dataTableJs')
	<script type="text/javascript" src="{{ URL::to('js/dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/dataTables.material.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		$('#TableId').DataTable({
					search: {
						caseInsensitive : true
					},
					pagingType: "full_numbers" 
				});
		$('.modal').modal({
		      dismissible: true, // Modal can be dismissed by clicking outside of the modal
		      opacity: .5, // Opacity of modal background
		      in_duration: 300, // Transition in duration
		      out_duration: 200, // Transition out duration
		      starting_top: '4%', // Starting top style attribute
		      ending_top: '10%', // Ending top style attribute
		    }
		  );
	</script>
@endsection