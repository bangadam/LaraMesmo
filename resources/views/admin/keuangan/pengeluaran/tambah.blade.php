@extends('admin.index')

@section('kegiatan')

<div class="row">
	<h5>Tambah Pengeluaran</h5>
	<hr>
</div>		
	
	<div class="row">
		<a href="{{ route('pengeluaran') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('pengeluaran.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Pengeluaran</h3>
				<div class="input-field{{ $errors->has('jumlah_uang') ? ' has-error' : '' }}"> 
					<input type="text" name="jumlah_uang" onkeypress="return isNumber(event)" class="validate" value="{{ old('jumlah_uang') }}">
					<label for="">Jumlah Uang</label>
					@if($errors->has('jumlah_uang'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jumlah_uang') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Keperluan Untuk</label>
				<div class="input-field{{ $errors->has('keperluan') ? ' has-error' : '' }}"> 
					<input type="text" name="keperluan" class="validate" value="{{ old('keperluan') }}">
					@if($errors->has('keperluan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('keperluan') }}</p>
        				 </ul>
					@endif
				</div>
					
				<label for="">Tanggal Pengeluaran</label>
				<div class="input-field{{ $errors->has('tgl_pengeluaran') ? ' has-error' : '' }}">
					<input type="date" class="datepicker validate"  name="tgl_pengeluaran" value="{{ old('tgl_pengeluaran') }}">
					@if($errors->has('tgl_pengeluaran'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pengeluaran') }}</p>
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

@endsection