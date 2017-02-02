@extends('admin.index')

@section('pembina')

	<h5>Edit Anggota</h5>
	<hr>

<div class="row">
	<a style="margin-top: 20px;" href="{{ route('anggota') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>

<div class="row">
	<div class="col m7 offset-m2">
		<div class="card">
				<div class="card-content">
						<form action="{{ route('absensi.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					<h3 class="blue-text blue-lighten-2 center-align">Edit Absensi</h3>
			
					<div class="input-field{{ $errors->has('anggota_id') ? ' has-error' : '' }}">
						<input type="text" disabled name="anggota_id" value="{{ $data->anggota->nama }}">
						@if($errors->has('anggota_id'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('anggota_id') }}</p>
	        				 </ul>
						@endif
						<label for="">Nama Anggota</label>
					</div>

					<label for="">Tanggal Absensi</label>
					<div class="input-field{{ $errors->has('tgl_absen') ? ' has-error' : '' }}">
						<input type="date" class="datepicker"  name="tgl_absen" value="{{ $data->tgl_absen }}">
						@if($errors->has('tgl_absen'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('tgl_absen') }}</p>
	        				 </ul>
						@endif
					</div>
					
					<label for="">Keterangan</label>
					<div class="input-field{{ $errors->has('keterangan') ? ' has-error' : '' }}">
							<input class="with-gap" name="keterangan" value="Hadir" type="radio" id="hadir" />
							<label for="hadir">Hadir</label>
							<input class="with-gap" name="keterangan" value="Sakit" type="radio" id="absen" />
							<label for="absen">Absen</label>
							<input class="with-gap" name="keterangan" value="Absen" type="radio" id="sakit" />
							<label for="sakit">Sakit</label>
						@if($errors->has('keterangan'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('keterangan') }}</p>
	        				 </ul>
						@endif
						
					</div>					
					
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light right amber">Edit <i class="fa fa-pencil"></i></button>
					</div>
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
			 	</div>
			</div>
	</div>
</div> {{-- End Row --}}

@endsection
