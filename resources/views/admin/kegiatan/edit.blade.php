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
					<label for="">Nama Kegiatan</label>
					@if($errors->has('nama_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>
					
				<div class="input-field{{ $errors->has('bidang') ? ' has-error' : '' }}">
					<select name="bidang_id">
						<option value="{{ $data->bidang->id }}" selected>{{ $data->bidang->nama_bidang }}</option>
						@foreach($bidang as $bidangs)
							<option value="{{ $bidangs->id }}">{{ $bidangs->nama_bidang }}</option>
						@endforeach
					</select>
					@if($errors->has('bidang'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('bidang') }}</p>
        				 </ul>
					@endif
				</div>
				
				<label for="">Tanggal Pelaksanaan</label>
				<div class="input-field{{ $errors->has('tgl_pel') ? ' has-error' : '' }}">
					<input type="date" name="tgl_pel" class="datepicker" value="{{ $data->tgl_pel }}">
					@if($errors->has('tgl_pel'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pel') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('pembina') ? ' has-error' : '' }}">
					<select name="pembina_id">
						<option value="{{ $data->pembina->id }}" selected>{{ $data->pembina->nama }}</option>
						@foreach($pembina as $pembinas)
							<option value="{{ $pembinas->id }}">{{ $pembinas->nama }}</option>
						@endforeach
					</select>
					@if($errors->has('pembina'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('pembina') }}</p>
        				 </ul>
					@endif
				</div>
				
				
				<div class="row">
					<button type="submit" class="btn waves-effect waves-light right amber">Edit <i class="fa fa-pencil"></i></button>
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
					<div class="row">
						<span class="card-title blue-text lighten-2">Di Pimpin Oleh :</span>
						<img src="{{ asset('uploads/' . $data->pembina->gambar) }}" class="circle materialboxed" width="200" height="150">
					</div>
					<div class="row">
						<div class="col m6 offset-m4">
							<a href="{{ route('pembina.lihat', $data->pembina->id) }}" class="blue-text lighten-2 center-align" style="font-size: 30px;">{{ $data->pembina->nama }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

</div>

@endsection