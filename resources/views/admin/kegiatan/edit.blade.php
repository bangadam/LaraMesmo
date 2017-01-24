@extends('admin.index')

@section('pembina')

	<h5>Edit Kegiatan</h5>
	<hr>	
	
	<div class="row">
		<a  href="{{ route('kegiatan') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="cantainer">
			<div class="col m7">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('kegiatan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Edit Kegiatan</h3>
				<div class="input-field{{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="nama_kegiatan" class="validate" value="{{ $data->nama_kegiatan }}">
					@if($errors->has('nama_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama_kegiatan') }}</p>
        				 </ul>
					@endif
					<label for="">Nama Kegiatan</label>
				</div>
				
				<label for="">Nama Pembina</label>
				<div class="input-field{{ $errors->has('pembina_id') ? ' has-error' : '' }}"> 
					<select name="pembina_id">
						@foreach($pembina as $pembinas)
							<option value="{{ $pembinas->id }}" @if($data->pembina_id == $pembinas->id) selected @endif>{{ $pembinas->nama }}</option>
						@endforeach
					</select>
				</div>
				
				<label for="">Nama Bidang</label>	
				<div class="input-field{{ $errors->has('bidang_id') ? ' has-error' : '' }}">
					<select name="bidang_id">
						@foreach($bidang as $bidangs)
							<option value="{{ $bidangs->id }}" @if($data->bidang_id == $bidangs->id) selected @endif>{{ $bidangs->nama_bidang }}</option>
						@endforeach
					</select>
					@if($errors->has('bidang_id'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('bidang_id') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Tanggal Pelaksanaan</label>
				<div class="input-field{{ $errors->has('tgl_pel') ? ' has-error' : '' }}">
					<input type="date" class="datepicker" name="tgl_pel" value="{{ $data->tgl_pel }}">
					@if($errors->has('tgl_pel'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pel') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Status</label>
				<div class="input-field">
					<select name="status">
						<option value="terlaksana" @if($data->status == 'terlaksana') selected @endif>Terlaksana</option>
						<option value="belum terlaksana" @if($data->status == 'belum terlaksana') selected @endif>Belum Terlaksana</option>
					</select>
				</div>
				
				
				
				<div class="row">
					<button type="submit" class="btn waves-effect waves-light right amber accent-4">Edit <i class="fa fa-pencil"></i></button>
				</div>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
		<div class="col md5">
			<div class="card">
				<div class="card-content">
					<h3 class="blue-text blue-lighten-2">Di Pimpin Oleh :</h3>
					<div class="row">
						<img src="{{ asset('uploads/' . $data->pembina->gambar) }}" class="circle materialboxed" width="200" height="150">
					</div>
					<div class="row">
						<h3 class="center-align"><a href="{{ route('pembina.lihat', $data->pembina->id) }}" class="blue-text lighten-2">{{ $data->pembina->nama }}</a></h3>
					</div>
				</div>
			</div>
		</div>
		</div>

</div>

@endsection