@extends('templates.app')

@section('content')

@include('templates.alert')

	<div class="container" style="margin-top: 40px;">
		<div class="row">
			<div class="col m8 offset-m2">
				<h4 class="center-align">Daftar <span class="orange-text">Anggota</span></h4>
				@include('templates.alert')
				<div class="card">
					<div class="card-content">
						<form action="{{ route('auth.register') }}" method="post">
							<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}">
								<input type="text" name="nama" id="nama" class="validate" value="{{ old('nama') }}">
								<label for="">Nama</label>
							@if($errors->has('nama'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('nama') }}</p>
		        				 </ul>
							@endif
							</div>
							
							<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="email" name="email" id="email" class="validate" value="{{ old('email') }}">
								<label for="">Email</label>
							@if($errors->has('email'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('email') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" name="password" id="password" class="validate">
								<label for="">Password</label>
							@if($errors->has('password'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('password') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="input-field{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
								<select name="jenis_kelamin">
									<option value="" selected disabled>- Jenis Kelamin -</option>
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							@if($errors->has('jenis_kelamin'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('jenis_kelamin') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="input-field{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
								<input type="date" name="tgl_lahir" id="tgl_lahir" class="datepicker" value="{{ old('tgl_lahir') }}">
							@if($errors->has('tgl_lahir'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('tgl_lahir') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="input-field{{ $errors->has('kelas_id') ? ' has-error' : '' }}">
								<select name="kelas_id">
									<option value="" selected disabled>- Kelas -</option>
									<option value="1">XII RPL 2</option>
								</select>
							@if($errors->has('kelas_id'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('kelas_id') }}</p>
		        				 </ul>
							@endif
							</div>


							<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
								<input type="text" name="no_hp" id="no_hp" class="validate" value="{{ old('no_hp') }}">
								<label for="">No Hp</label>
							@if($errors->has('no_hp'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('no_hp') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
								<textarea name="alamat" class="materialize-textarea" rows="3">{{ old('alamat') }}</textarea>
								<label for="">Alamat</label>
							@if($errors->has('alamat'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('alamat') }}</p>
		        				 </ul>
							@endif
							</div>

							<div class="file-field input-field{{ $errors->has('gambar') ? ' has-error' : '' }}">
							<div class="btn">
								<span>File</span>
								<input type="file" name="gambar" value="{{ old('gambar') }}">
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

							<div class="row">
								<div class="col m12">
									<button style="width: 100%;" class="btn waves-effect waves-light" type="submit">Daftar</button>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection