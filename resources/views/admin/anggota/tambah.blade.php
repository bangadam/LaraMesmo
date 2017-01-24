@extends('admin.index')

@section('anggota')

<div class="row">
	<h5>Tambah Anggota</h5>
	<hr>

		<div class="row">
				<a href="{{ route('anggota') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
		</div>
		<div class="col m9 offset-m2">
			<div class="card z-depth-2">
				<div class="card-content">
					<form action="{{ route('anggota.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Anggota</h3>
				<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
					<input type="text" name	="nama" id="nama" value="{{ old('nama') }}">
					<label for="">Nama</label>
					@if($errors->has('nama'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="email" name="email" id="email" value="{{ old('email') }}" class="validate">
					<label for="">Email</label>
					@if($errors->has('email'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('email') }}</p>
        				 </ul>
					@endif
				</div>
				
				<div class="input-field{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
					<select name="jenis_kelamin">
						<option value="" disabled selected>- Jenis Kelamin -</option>
						<option value="pria">pria</option>
						<option value="wanita">wanita</option>
					</select>
					@if($errors->has('jenis_kelamin'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jenis_kelamin') }}</p>
        				 </ul>
					@endif
				</div>
				
				<label for="">Tanggal Lahir</label>
				<div class="input-field{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
					<input type="date" class="datepicker"  name="tgl_lahir">
					@if($errors->has('tgl_lahir'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_lahir') }}</p>
        				 </ul>
					@endif
				</div>
				
				<label for="">Pilih Kelas</label>
				<div class="input-field{{ $errors->has('kelas_id') ? ' has-error' : '' }}">
					<select name="kelas_id">
						<option value="" disabled selected>- Pilih Kelas -</option>
						@foreach($kelas as $kelases)
							<option value="{{ $kelases->id }}">{{ $kelases->nama_kelas }}</option>	
						@endforeach
					</select>
					@if($errors->has('kelas_id'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('kelas_id') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
					<input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" >
					<label for="">No. Hp</label>
					@if($errors->has('no_hp'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('no_hp') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<textarea name="alamat" rows="3" class="materialize-textarea">{{ old('alamat') }}</textarea>
					<label for="">Alamat</label>
					@if($errors->has('alamat'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('alamat') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="file-field input-field{{ $errors->has('gambar') ? ' has-error' : '' }}">
					<div class="btn grey darken-1">
						<span>File</span>
						<input type="file" name="gambar">
					</div>
					<div class="file-path-wrapper">
						<input type="text" class="file-path validate" placeholder="Limit Size 200kb">
					</div>
					@if($errors->has('gambar'))
						<ul class="card-panel red darken-1">
							<p>{{ $errors->first('gambar') }}</p>
						</ul>
					@endif
				</div>

				<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
				<button type="submit" class="btn waves-effect waves-light right blue accent-2">Tambah <i class="fa fa-send"></i></button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				

			</form>
		</div>
				</div>
			</div>
		</div>
</div>

@endsection