@extends('admin.index')

@section('pembina')

<div class="row">
	<h5>Lihat Pembina</h5>
	<hr>
		<div class="col m12">
			<a href="{{ route('pembina') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
			<div class="container">
			   <h1 class="blue-text center-align">Biodata</h1>
				<div class="card">
					<div class="card-content">
						<div class="row">
							<div class="col m4">
								<img src="{{ asset('uploads/' . $data->gambar ) }}" class="materialboxed responsive-img circle" alt="">
							</div>
							<div class="col m7">
								<h2>{{ $data->nama }}</h2>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col m12">
								<div class="col m5 profile">
									<h5>Id</h5>	<br>
									<h5>Nama</h5> <br>
									<h5>Jenis Kelamin</h5> <br>
									<h5>Alamat</h5> <br>
									<h5>No Hp</h5> <br>
								</div>
								<div class="col m7">
									<h5>{{ $data->id }}</h5>	<br>
									<h5>{{ $data->nama }}</h5> <br>
									<h5>{{ $data->jenis_kelamin }}</h5> <br>
									<h5>{{ $data->alamat }}</h5> <br>
									<h5>{{ $data->no_hp }}</h5> <br>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
		</div>
</div>
</div>

@endsection