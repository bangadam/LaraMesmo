@extends('admin.index')

@section('pembina')

	<h5>Tambah Pembina</h5>
	<hr>

<div class="row">
	<a style="margin-top: 20px;" href="{{ route('anggota') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>

<div class="row">
	<div class="col m8 offset-m2">
		<div class="card z-depth-2">
				<div class="card-content">
						<form action="{{ route('anggota.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					<h3 class="blue-text blue-lighten-2 center-align">Edit Pembina</h3>
					<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
						<input type="text" name="nama" id="nama" placeholder="Nama" class="validate" value="{{ $data->nama }}">
						<label>Nama</label>
						@if($errors->has('nama'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('nama') }}</p>
	        				 </ul>
						@endif
					</div>
					
					<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}"> 
						<input type="text" name="email" id="email" class="validate" value="{{ $data->email }}">
						<label>Email</label>
						@if($errors->has('email'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('email') }}</p>
	        				 </ul>
						@endif
					</div>

					<div class="input-field">
						<select name="jenis_kelamin">
							<option value="" disabled selected>- Pilih Jenis Kelamin -</option>
							<option value="pria" @if($data->jenis_kelamin == 'pria') selected >pria
							</option>
							<option value="wanita" @elseif($data->jenis_kelamin == 'wanita') selected @endif>wanita
							</option>
						</select>
					</div>

					<label for="">Tanggal Lahir</label>
					<div class="input-field{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
						<input type="date" class="datepicker"  name="tgl_lahir" value="{{ $data->tgl_lahir }}">
						@if($errors->has('tgl_lahir'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('tgl_lahir') }}</p>
	        				 </ul>
						@endif
					</div>

					<div class="input-field">
						<select name="kelas">
							<option value="" disabled selected>Kelas</option>
							<option value="{{ $data->kelas->id }}" selected>{{ $data->kelas->nama_kelas }}</option>
							@foreach($kelas as $kelases)
								<option value="{{ $kelases->id }}">{{ $kelases->nama_kelas }}</option>	
							@endforeach
						</select>
					</div>

					<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
						<textarea name="alamat" rows="3" class="materialize-textarea validate" placeholder="Alamat">{{ $data->alamat }}</textarea>
						@if($errors->has('alamat'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('alamat') }}</p>
	        				 </ul>
						@endif
					</div>
					<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
						<input type="text" name="no_hp" id="no_hp" class="validate" placeholder="No Hp" value="{{ $data->no_hp }}">
						@if($errors->has('no_hp'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('no_hp') }}</p>
	        				 </ul>
						@endif
					</div>
					<div class="file-field input-field">
						<div class="btn grey">
							<span>File</span>
							<input type="file" name="gambar">
						</div>
						<div class="file-path-wrapper">
							<input type="text" class="file-path validate" placeholder="Limit Size 200kb">
						</div>
					</div>
					
					
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light right yellow darken-1">Edit <i class="fa fa-pencil"></i></button>
					</div>
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
			 	</div>
			</div>
	</div>
</div>

</div>

@endsection
