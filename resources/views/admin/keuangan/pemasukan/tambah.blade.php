@extends('admin.index')

@section('kegiatan')

<div class="row">
	<h5>Tambah Keuangan</h5>
	<hr>
</div>		
	
	<div class="row">
		<a href="{{ route('pemasukan') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('pemasukan.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Keuangan</h3>
				<div class="input-field{{ $errors->has('jumlah_uang') ? ' has-error' : '' }}"> 
					<input type="text" onkeypress="return isNumber(event)" name="jumlah_uang" class="validate">
					<label for="">Jumlah Uang</label>
					@if($errors->has('jumlah_uang'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jumlah_uang') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Sumber Pemasukan</label>
				<div class="input-field{{ $errors->has('pemasukan_dari') ? ' has-error' : '' }}"> 
					<input type="text" name="pemasukan_dari" class="validate">
					@if($errors->has('pemasukan_dari'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('pemasukan_dari') }}</p>
        				 </ul>
					@endif
				</div>
					
				<label for="">Tanggal Pemasukan</label>
				<div class="input-field{{ $errors->has('tgl_masuk') ? ' has-error' : '' }}">
					<input type="date" class="datepicker validate"  name="tgl_masuk">
					@if($errors->has('tgl_masuk'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_masuk') }}</p>
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