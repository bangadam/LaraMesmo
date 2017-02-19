@extends('templates.app')

@section('content')
	
	<!-- Navbar -->
	<nav class="grey darken-2">
			<div class="container">
			  <div class="nav-wrapper">
				<a href="/" class="brand-logo">Mesmo <span style="font-size: 15px;font-weight: bold;">SMKN 1 DLANGGU</span></a>
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

	<div class="row">
		<div class="parallax-container">
			<div class="parallax">
				<img src="/uploads/{{ $kegiatan->gambar }}" alt="">
			</div>
		</div>
	</div>
	<div class="row">
		
			<div class="col m8">
				<div class="card z-depth-2 kegiatan-content">
					<div class="section">
						<h2 class="center-align">{{ $kegiatan->nama_kegiatan }}</h2>
						<div class="divider"></div>
					</div>
					<p style="margin: 5px">
						{!! $kegiatan->keterangan !!}
					</p>
				</div>
			</div>

			<div class="col m4">
				<div class="card z-depth-2" style="padding-bottom: 30px">
					<div class="section ">
						<h5 class="center-align">Tanggal Pelaksanaan</h5>
						<p style="padding-left: 20px;margin-top: 15px">
							Di Pimpin Oleh : {{ $kegiatan->pembina->nama }} <br>
							Bidang : {{ $kegiatan->bidang->nama_bidang }}
						</p><br>
						<div class="row" style="padding: 10px">
							<table class="striped">
								<thead>	
									<th>Tanggal</th>
									<th>Status</th>
								</thead>
								<tbody>
									<td>{{ $kegiatan->tgl_pel }}</td>
									<td style="">
										@if($kegiatan->status == 'belum terlaksana')
											<span class="new badge red">{{ $kegiatan->status }}</span>
										@elseif($kegiatan->status == 'terlaksana')
											<span class="new badge green">{{ $kegiatan->status }}</span>
										@endif
									</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</div>

<footer class="page-footer grey darken-2">
		<p class="center-align" style="color: white;padding: 10px;">Copyright &copy; <?php echo date('Y'); ?> Bangadam. Made With <i class="fa fa-heart" style="color:#f73333"></i> SMKN 1 Dlanggu</p>
</footer>

@endsection