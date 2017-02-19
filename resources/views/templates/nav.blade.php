<!-- Navbar -->
	<nav class="grey darken-2">
			<div class="container">
			  <div class="nav-wrapper">
				<a href="{{ url('/') }}" class="brand-logo"><img src="{{ URL::to('images/mesmo.png') }}" alt="" class="responsive-img" width="10%">Mesmo <span style="font-size: 15px;font-weight: bold;">SMKN 1 DLANGGU</span></a>
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="{{ route('auth.login') }}" class="btn blue lighten-2">Login</a></li>
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="{{ route('auth.login') }}" class="btn blue accent-2">Login</a></li>
				</ul>
			  </div>
			</div>
		</nav>
