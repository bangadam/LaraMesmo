@extends('admin.index')

@section('pembina')

<div class="row">
	<h5>Tambah Pembina</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>
		      </div>
		    </div>
		</nav>
		<div class="col m6 offset-m2">
			<form action="{{ route('pembina.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Pembina</h3>
				<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
					<input type="text" name	="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}">
					@if($errors->has('nama'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}"> 
					<input type="password" name="password" id="password" placeholder="Password">
					@if($errors->has('password'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('password') }}</p>
        				 </ul>
					@endif
				</div>	
				<div class="input-field">
					<select name="jenis_kelamin" class="browser-default validate">
						<option value="" disabled selected>- Pilih -</option>
						<option value="pria">pria</option>
						<option value="wanita">wanita</option>

				</div>
				<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
					<input type="text" name="no_hp" id="no_hp" placeholder="No Hp" >
					@if($errors->has('no_hp'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('no_hp') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<textarea name="alamat" rows="3" class="materialize-textarea" placeholder="Alamat">{{ old('alamat') }}</textarea>
					@if($errors->has('alamat'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('alamat') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="file-field input-field">
					<div class="btn">
						<span>File</span>
						<input type="file" name="gambar">
					</div>
					<div class="file-path-wrapper">
						<input type="text" class="file-path validate" placeholder="Limit Size 200kb">
					</div>
				</div>

				<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
				<button type="submit" class="btn waves-effect waves-light right">Tambah <i class="fa fa-send"></i></button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				

			</form>
		</div>
</div>
</div>

@endsection