@extends('templates.app')

@section('content')
{{-- NavBar --}}
<div class="navbar-fixed">
	<nav>
	<div class="nav-wrapper " id="header">
		<a href="#!" class="brand-logo">Admin Mesmo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		<ul class="right hide-on-med-and-down">
		 <a class='dropdown-button' href='#' data-activates='dropdown1'><i class="fa fa-user"></i> Bangadam</a>
		  <!-- Dropdown Structure -->
		  <ul id='dropdown1' class='dropdown-content' style="margin-top: 50px;">
		    <li><a href="#!"><i class="fa fa-gear"></i> Proflie</a></li>
		    <li class="divider"></li>
		    <li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
		  </ul>
		</ul>
		<!-- navbar for mobile -->
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#!" class="dropdown-button" data-activates="dropdown-profile"><i class="fa fa-user"></i> Bangadam</a></li>
			<ul id="dropdown-profile" class="dropdown-content" style="margin-top: 50px;">
				<li><a href="#!"><i class="fa fa-user"></i> Profile</a></li>
				<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
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
		<ul id="nav-mobile" class="sidebar side-nav fixed">
			<li><a href="#!"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="{{ route('pembina') }}"><i class="fa fa-user"></i> Pembina</a></li>
			<li><a href="#!"><i class="fa fa-book"></i> Kegiatan</a></li>
			<ul class="collapsible" data-collapsible="accordion">
				 <li>
      				<div class="collapsible-header"><i class="fa fa-users"></i> Anggota</div>
      				<div class="collapsible-body">
      					<ul class="daftar">
      						<li><a href="#!"><i class="fa fa-eye"></i>Daftar Anggota</a></li>
      						<li><a href="#!"><i class="fa fa-book"></i> Absensi</a></li>
      						<li><a href="#!"><i class="fa fa-user"></i> Pengurus</a></li>
      					</ul>
      				</div>
			    </li>
			</ul>
			<li><a href="#"><i class="fa fa-money"></i> Keuangan</a></li>
		</ul>	
	</div>
{{-- End Sidebar --}}
	<div class="col m10 offset-m2">
		@yield('dashboard')
		@yield('pembina')
	</div>

	<div class="row" style="bottom: 0;">
			<footer class="page-footer teal">
				<p class="center-align" style="color: white;padding: 10px;">Copyright &copy; <?php echo date('Y'); ?> Bangadam. Made With <i class="fa fa-heart" style="color:#f73333"></i> SMKN 1 Dlanggu</p>
			</footer>
		</div>
	</div>{{--End Content--}}

@endsection