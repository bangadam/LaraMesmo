@extends('admin.index')

@section('kegiatan')
	<div class="row">
	<h5>Tambah Kegiatan</h5>
	<hr>
</div>		
	
	<div class="row">
		<a href="{{ route('kegiatan') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('kegiatan.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Kegiatan</h3>
				<div class="input-field{{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="nama_kegiatan" class="validate">
					<label for="">Nama Kegiatan</label>
					@if($errors->has('nama_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('bidang_id') ? ' has-error' : '' }}"> 
					<select name="bidang_id">
						<option value="" selected disabled>- Pilih Bidang -</option>
						@foreach($bidang as $bidangs)
							<option value="{{ $bidangs->id }}">{{ $bidangs->nama_bidang }}</option>
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
					<input type="date" class="datepicker"  name="tgl_pel">
					@if($errors->has('tgl_pel'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pel') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('pembina_id') ? ' has-error' : '' }}"> 
					<select name="pembina_id">
						<option value="" selected disabled>- Pilih Pembina -</option>
						@foreach($pembina as $pembinas)
							<option value="{{ $pembinas->id }}">{{ $pembinas->nama }}</option>
						@endforeach
					</select>
					@if($errors->has('pembina_id'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('pembina_id') }}</p>
        				 </ul>
					@endif
				</div>
				
				
				<div class="row">
					<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
					<button type="submit" class="btn waves-effect waves-light right blue lighten-2">Tambah <i class="fa fa-plus"></i></button>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
</div>
@endsection