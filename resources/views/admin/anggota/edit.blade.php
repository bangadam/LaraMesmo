@extends('admin.index')

@section('pembina')

	<h5>Edit Anggota</h5>
	<hr>

<div class="row">
	<a style="margin-top: 20px;" href="{{ route('anggota') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>

<div class="row">
	<div class="col m7">
		<div class="card">
				<div class="card-content">
						<form action="{{ route('anggota.update', $data->id) }}" method="POST" enctype="multipart/form-data">
					<h3 class="blue-text blue-lighten-2 center-align">Edit Anggota</h3>
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
							<option value="pria" @if($data->jenis_kelamin == 'pria') selected @endif>pria
							</option>
							<option value="wanita" @if($data->jenis_kelamin == 'wanita') selected @endif>wanita
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
					
					<label for="">Pilih Kelas</label>
					<div class="input-field">
<<<<<<< HEAD
						<select name="kelas_id">
							@foreach($kelas as $datas)
								<option value="{{ $datas->id }}" @if($datas->id == $data->kelas_id) selected @endif>{{ $datas->nama_kelas }}</option>	
=======
						<select name="kelas">
							<option value="" disabled selected>Kelas</option>
				
							@foreach($data as $datas)
								<option value="" >{{ $data->kelas->nama_kelas }}</option>	
<<<<<<< HEAD
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
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
						<label for="">Alamat</label>
					</div>
					<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
						<input type="text" name="no_hp" id="no_hp" class="validate" placeholder="No Hp" value="{{ $data->no_hp }}">
						@if($errors->has('no_hp'))
							 <ul class="card-panel red darken-1">
	        					<p>{{ $errors->first('no_hp') }}</p>
	        				 </ul>
						@endif
						<label for="">No. Hp</label>
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

	<div class="col md5">
			<div class="card">
				<div class="card-image">
					<img src="{{ asset('uploads/' . $data->gambar) }}" class="activator materialboxed" width="200" height="150">
				</div>
				<div class="card-content">
					<h3 class="blue-text lighten-2 center-align">{{ $data->nama }}</h3>
				</div>
			</div>
		</div>
</div> {{-- End Row --}}

@endsection
