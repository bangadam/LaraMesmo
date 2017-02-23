@extends('templates.app')

@section('content')


@include('templates.nav')

<!-- Slider -->
{{-- <section id="home-slider"> --}}

	<!-- Slider -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="{{ URL::to('images/ANGGOTA.jpg') }}"> <!-- random image -->
				<div class="caption center-align">
					<h3>Sistem Informasi Mesmo</h3>
					<h5 class="light grey-text text-lighten-3">Mencetak Pemuda Pemudi berprestasi untuk Umat</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('images/ANGGOTAL.jpg') }}"> <!-- random image -->
				<div class="caption left-align">
					<h3>Sistem Informasi Mesmo</h3>
					<h5 class="light grey-text text-lighten-3">Mencetak Pemuda Pemudi berprestasi untuk Umat</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('images/ANGGOTAP.jpg') }}"> <!-- random image -->
				<div class="caption right-align">
					<h3>Sistem Informasi Mesmo</h3>
					<h5 class="light grey-text text-lighten-3">Mencetak Pemuda Pemudi berprestasi untuk Umat</h5>
				</div>
			</li>
		</ul>
	</div>
{{-- </section> --}}

<section id="about" class="blue accent-2">
		<div class="row">
			<div class="col m12">
				<h2 class="center-align header">Tentang Mesmo</h2>
				<div class="row">
					<div class="col m6 offset-m3" style="border-bottom: 2px solid #f0f0f0;"></div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 50px">
			<div class="col m7" style="border: 2px solid #f0f0f0;padding:20px;margin-bottom: 40px;margin-right: 10px;">
				<div class="row">
					<h3>Ketua Pembina Mesmo</h3>
				</div>
				<div class="row">
					<div class="col m3">
						<img src="uploads/{{ $pembina->gambar }}" class="materialboxed " style="border: 5px solid #f3f3f3;border-radius: 10px;" width="190" height="150">
					</div>
					<div class="col m8" style="margin-left: 50px">
						<h5>{{ $pembina->nama }}</h5>
						<p>Selamat Datang Di Sistem Informasi Mesmo, Yaitu sebuah organisasi Managemen Emosional Spiritual dan Motivasi Agama Islam yang ada Di SMKN 1 Dlanggu, Semoga menjadi Manusia yang bermanfaat bagi Umat Islam.</p>
					</div>
				</div>
			</div>
			<div class="col m4" style="margin-bottom: 40px">
				<div class="row blue-text lighten-2">
					<div class="card white center-align">
						<div class="card-content">
							<i class="fa fa-users fa-5x" style="float:left"></i>
							<h3>{{ count($count) }} Anggota</h3>
						</div>
					</div>
				</div>
				<div class="row blue-text lighten-2">
					<div class="card white center-align">
						<div class="card-content">
							<i class="fa fa-calendar fa-5x" style="float:left"></i>
							<h3>{{ count($kegiatan) }} Kegiatan</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="kegiatan">
		<div class="row">
			<div class="col m12">
				<h2 class="center-align header">Kegiatan Mesmo</h2>
				<div class="row">
					<div class="col m6 offset-m3" style="border-bottom: 2px solid #000000;"></div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 80px; margin-bottom: 20px">
		 <div class="carousel">
		 @foreach($data as $datas)
			    <a class="carousel-item" href="single-kegiatan/{{ $datas->id }}"><img src="uploads/{{ $datas->gambar }}" ></a>
		 @endforeach
			  </div>
		</div>
		<div class="row">
			<div class="col m6 offset-m3">
				<a href="{{ route('home.allkegiatan') }}" class="btn waves-light waves-effect blue lighten-2" style="width: 100%">Lihat Semua Kegiatan</a>
			</div>
		</div>
</section>

 <div class="parallax-container">
    <div class="parallax">
    	<img src="{{ URL::to('images/quran.jpg') }}">
    </div>
  </div>

	<section id="bg-anggota">
		<div id="anggota">
		<div class="row">
			<div class="col m12">
				<h2 class="center-align header">Anggota Mesmo</h2>
				<div class="row">
					<div class="col m6 offset-m3" style="border-bottom: 2px solid #ffffff;"></div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 80px; margin-bottom: 20px">
			@foreach($anggota as $data)
			<div class="col m4">
				<div class="card-panel grey lighten-5 z-depth-3">
          <div class="row valign-wrapper">
            <div class="col m4">
              <img src="uploads/{{ $data->gambar }}" alt="" class="circle materialboxed responsive-img">
            </div>
            <div class="col m8">
              <blockquote class="black-text" style="font-size: 12px">
              	Bagikan ilmu walaupun sedikit, Yakinlah Ilmu anda akan bertambah dan tidak akan pernah berkurang.
              </blockquote>
              <span class="grey-text center-align" style="margin-left: 30px">
              	"Ali Bin Abi Thalib"
              </span>
            </div>
          </div>
        </div>
			</div>
			@endforeach
		</div>

		<div class="row" style="margin-top: 90px">
			<div class="container">
				<a href="{{ route('auth.register') }}" class="btn blue accent-2 waves-effect waves-light" style="width:100%; height: 70px;border-radius: 5px;font-size: 30px;padding-top: 15px">Daftar Sekarang <i class="fa fa-send"></i></a>
			</div>
		</div>

		
		</div>
	</section>	
	
	<section id="Contact">
		<div class="container">
			<div class="row">
				<div class="col m12">
					<h1 class="center-align">Buku Tamu</h1>
				</div>
			</div>

			<div class="row">
				<div class="col m6">
				@include('templates.alert');
					<div class="card">
						<div class="card-content">
					<form action="{{ route('buku.tamu') }}" method="post">
						<div class="input-field">
							<input type="text" name="nama" id="nama" class="validate">
							<label for="Nama">Nama</label>
						</div>
						<div class="input-field">
							<input type="email" name="email" id="email" class="validate">
							<label for="Email">Email</label>
						</div>
						<div class="input-field">
							<input type="text" name="subject" id="subject" class="validate">
							<label for="Subject">Subject</label>
						</div>
						<div class="input-field">
							<textarea name="pesan" id="pesan" rows="3" class="materialize-textarea"></textarea>
							<label for="Nama">Pesan</label>
						</div>
						<div class="row">
							<button type="submit" class="btn blue lighten-2 waves-effect waves-light right">Kirim <i class="fa fa-send"></i></button>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
					</form>
						</div>
					</div>
				</div>
				<div class="col m6">
					<img src="{{ URL::to('images/map.png') }}" class="materialboxed" width="500" height="280" alt="" style="border: 5px solid #f3f3f3; margin-top: 5px">
				</div>
			</div>
		</div>
	</section>

<footer class="page-footer grey darken-2">
		<p class="center-align" style="color: white;padding: 10px;">Copyright &copy; <?php echo date('Y'); ?> Bangadam. Made With <i class="fa fa-heart" style="color:#f73333"></i> SMKN 1 Dlanggu</p>
</footer>																					
@endsection	
@section('sustom')											<script type="text/javascript">
		$(document).ready(function() {
			$("#about").on('click', function(event) {
				if (this.hash !== "") {
					event.prevenDefault();

					var has = this.hash;

					$('hmtl, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {
						window.location.hash = hash;
					});
				} //end if
			});
		});		
	</script>
@endsection											
