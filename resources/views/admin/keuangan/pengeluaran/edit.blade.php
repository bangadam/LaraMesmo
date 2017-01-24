@extends('admin.index')

@section('pembina')
<div class="row">
	<h5>Edit Pemasukan</h5>
	<hr>	
</div>

	<div class="row">
		<a  href="{{ route('pengeluaran') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('pengeluaran.update', $data->id) }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Edit Keuangan</h3>
				<div class="input-field{{ $errors->has('jumlah_uang') ? ' has-error' : '' }}"> 
					<input type="text" name="jumlah_uang" class="validate" value="{{ $data->jumlah_uang }}">
					<label for="">Jumlah Uang</label>
					@if($errors->has('jumlah_uang'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jumlah_uang') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Keperluan</label>
				<div class="input-field{{ $errors->has('keperluan') ? ' has-error' : '' }}"> 
					<input type="text" name="keperluan" class="validate" value="{{ $data->keperluan }}">
					@if($errors->has('keperluan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('keperluan') }}</p>
        				 </ul>
					@endif
				</div>
					
				<label for="">Tanggal Pemasukan</label>
				<div class="input-field{{ $errors->has('tgl_pengeluaran') ? ' has-error' : '' }}">
					<input type="date" class="datepicker validate"  name="tgl_pengeluaran" value="{{ $data->tgl_pengeluaran }}">
					@if($errors->has('tgl_pengeluaran'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pengeluaran') }}</p>
        				 </ul>
					@endif
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

@endsection