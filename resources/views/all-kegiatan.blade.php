@extends('templates.app')

@section('content')
	
	@include('templates.nav')
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
<div class="row">
	<div class="col m9">
	@foreach($allkegiatan as $data)
		<div class="row">
			<div class="col s12 m7">
				<div class="card">
					<div class="card-image">
						<img src="uploads/{{ $data->gambar }}">
						<span class="card-title">{{ $data->nama_kegiatan }}</span>
					</div>
					<div class="card-content">
						<p>{{ substr(strip_tags($data->keterangan), 20) }}</p>
					</div>
					<div class="card-action">
						<a href="single-kegiatan/{{ $data->id }}">lihat Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>


@endsection